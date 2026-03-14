<?php 
namespace klevze\phpColors;

class Colors
{	
	use Traits\bgColors;
	use Traits\fgColors;
	use Traits\Styles;

	const OPEN_ESCAPE_CODE = "\033[";
	const CLOSE_ESCAPE_CODE = "m";
	
	// SET STYLES
	const BOLD = "1";
	const DIM = "2";
	const ITALIC = "3";
	const UNDERLINE = "4";
	const BLINK = "5";
	const BLINK_FAST = "6";
	const INVERTED = "7";
	const HIDDEN = "8";
	const STRIKETHROUGH = "9";

	// RESET STYLES
	const RESET = "0";

	// FOREGROUND & BACKGROUND COLORS
	public $color = [
		'BLACK' => [30, 40],
		'RED' => [31, 41],
		'GREEN' => [32, 42],
		'YELLOW' => [33, 43],
		'BLUE' => [34, 44],
		'MAGENTA' => [35, 45],
		'CYAN' => [36, 46],
		'LIGHT_GRAY' => [37, 47],
		'DARK_GRAY' => [90, 100],
		'LIGHT_RED' => [91, 101],
		'LIGHT_GREEN' => [92, 102],
		'LIGHT_YELLOW' => [93, 103],
		'LIGHT_BLUE' => [94, 104],
		'LIGHT_MAGENTA' => [95, 105],
		'LIGHT_CYAN' => [96, 106],
		'WHITE' => [97, 107],
	];

	/**
	 * Build escape code for color or style
	 * @param  string $color [color name]
	 * @param  string $style [0,1 or 2 for light, normal or dark]
	 * @return string        [formated string]
	 */
	/**
	 * Cache for previously-built escape codes to avoid recomputing strings.
	 * Keys are like "{style};{color}" (style omitted when null).
	 * @var array<string,string>
	 */
	private static $buildCache = [];

	private function build($color, $style = null) {
		// normalize parts to string (colors are stored as ints in $this->color)
		$colorStr = (string) $color;
		$styleStr = $style === null ? '' : (string) $style;

		$key = $styleStr === '' ? $colorStr : $styleStr . ';' . $colorStr;

		if (isset(self::$buildCache[$key])) {
			return self::$buildCache[$key];
		}

		$res = self::OPEN_ESCAPE_CODE;
		if ($style !== null) {
			$res .= $styleStr . ";";
		}
		$res .= $colorStr;
		$res .= self::CLOSE_ESCAPE_CODE;

		self::$buildCache[$key] = $res;

		return $res;
	}

	/**
	 * Return a foreground 24-bit escape sequence for RGB.
	 */
	public function escFg(int $r, int $g, int $b): string
	{
		return sprintf("\033[38;2;%d;%d;%dm", $r, $g, $b);
	}

	/**
	 * Return a background 24-bit escape sequence for RGB.
	 */
	public function escBg(int $r, int $g, int $b): string
	{
		return sprintf("\033[48;2;%d;%d;%dm", $r, $g, $b);
	}

	/**
	 * Build a gradient string between two RGB colors.
	 * Returns a string (does not print). Options:
	 *  - $glyph: character to print for each step
	 *  - $bg: whether to use background coloring
	 *  - $space: whether to add a space between glyphs
	 */
	public function rgbGradientString(array $from, array $to, int $steps = 16, string $glyph = '*', bool $bg = false, bool $space = true): string
	{
		$out = '';
		for ($i = 0; $i <= $steps; $i++) {
			$t = $steps === 0 ? 0.0 : $i / $steps;
			$r = (int) round($from[0] + ($to[0] - $from[0]) * $t);
			$g = (int) round($from[1] + ($to[1] - $from[1]) * $t);
			$b = (int) round($from[2] + ($to[2] - $from[2]) * $t);
			$esc = $bg ? $this->escBg($r, $g, $b) : $this->escFg($r, $g, $b);
			$out .= $esc . $glyph . "\033[0m" . ($space ? ' ' : '');
		}
		$out .= PHP_EOL;
		return $out;
	}

	/**
	 * Convert HSV (0..1) to RGB (0..255)
	 */
	public function hsvToRgb(float $h, float $s, float $v): array
	{
		// Normalize hue into [0,1). Use floor to handle floats correctly (avoid PHP's int-only % operator).
		$h = $h - floor($h);
		$i = (int) floor($h * 6);
		$f = $h * 6 - $i;
		$p = $v * (1 - $s);
		$q = $v * (1 - $f * $s);
		$t = $v * (1 - (1 - $f) * $s);
		switch ($i % 6) {
			case 0: $r = $v; $g = $t; $b = $p; break;
			case 1: $r = $q; $g = $v; $b = $p; break;
			case 2: $r = $p; $g = $v; $b = $t; break;
			case 3: $r = $p; $g = $q; $b = $v; break;
			case 4: $r = $t; $g = $p; $b = $v; break;
			default: $r = $v; $g = $p; $b = $q; break;
		}
		return [(int) round($r * 255), (int) round($g * 255), (int) round($b * 255)];
	}

	/**
	 * Return a rainbow string of $steps glyphs using HSV sweep.
	 */
	public function rainbowString(int $steps = 24, string $glyph = '#'): string
	{
		$out = '';
		for ($i = 0; $i < $steps; $i++) {
			$h = $steps > 0 ? ($i / $steps) : 0.0;
			[$r, $g, $b] = $this->hsvToRgb($h, 1.0, 1.0);
			$out .= $this->escFg($r, $g, $b) . $glyph . "\033[0m" . ' ';
		}
		$out .= PHP_EOL;
		return $out;
	}
}