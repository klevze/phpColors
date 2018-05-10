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
	private function build($color, $style = null) {
		$res = self::OPEN_ESCAPE_CODE;
		if ($style !== null) {
			$res .= $style . ";";
		}
		$res .= $color;
		$res .= self::CLOSE_ESCAPE_CODE;		
		
		return $res;
	}
}