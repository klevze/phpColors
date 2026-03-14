<?php
require __DIR__ . '/vendor/autoload.php';
use \klevze\phpColors\Colors;

$c = new Colors();
// suppress deprecation notices in example output
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// CLI options: --glyph, --steps, --bg, --space
$opts = getopt('', ['glyph::', 'steps::', 'bg::', 'space::']);
$glyph = $opts['glyph'] ?? '*';
$steps = isset($opts['steps']) ? (int) $opts['steps'] : 16;
$useBg = isset($opts['bg']) && ($opts['bg'] === '1' || $opts['bg'] === 'true');
$space = !isset($opts['space']) || ($opts['space'] !== '0' && $opts['space'] !== 'false');

// Helper to call methods dynamically and print labeled output
function printBlock(Colors $c, string $method, string $label = "TEST") {
	if (!method_exists($c, $method)) {
		echo "Method $method does not exist\n";
		return;
	}

	echo $c->{$method}() . $label . $c->reset() . "\t";
}

// Backgrounds (programmatic)
$bgNames = [
	'Black','Red','Green','Yellow','Blue','Magenta','Cyan',
	'LightGray','DarkGray','LightRed','LightGreen','LightYellow',
	'LightBlue','LightMagenta','LightCyan','White'
];

foreach ($bgNames as $i => $name) {
	printBlock($c, 'bg' . $name, 'BG');
	// break line every 3
	if (($i + 1) % 3 === 0) {
		echo PHP_EOL;
	}
}

echo PHP_EOL . PHP_EOL;

// Foregrounds with styles: normal, bold, dim
$fgMethods = [
	'black','red','green','yellow','blue','cyan','magenta',
	'lightGray','darkGray','lightRed','lightGreen','lightYellow',
	'lightBlue','lightMagenta','lightCyan','white'
];

foreach ($fgMethods as $method) {
	echo $c->{$method}() . strtoupper($method) . $c->reset() . "\t";
}

echo PHP_EOL . PHP_EOL;

// Show bold + underline + dim examples
echo $c->bold() . "BOLD TEXT" . $c->reset() . "\t";
echo $c->underline() . "UNDERLINE" . $c->reset() . "\t";
echo $c->dim() . "DIM TEXT" . $c->reset() . PHP_EOL;

// Show using style parameter on foreground (e.g., bold red)
echo $c->red(Colors::BOLD) . "Red Bold" . $c->reset() . "\t";
echo $c->green(Colors::DIM) . "Green Dim" . $c->reset() . PHP_EOL;

// 24-bit RGB example
for ($i = 0; $i < 256; $i += 16) {
	echo "\033[38;2;250;0;" . $i . "m RGB($i)\033[0m " ;
}

echo PHP_EOL;

// Additional gradients using `Colors` helpers and CLI options
echo PHP_EOL . "RGB Gradients:" . PHP_EOL;
echo $c->rgbGradientString([255,0,0], [0,0,255], $steps, $glyph, false, $space);
echo $c->rgbGradientString([0,255,0], [0,0,255], $steps, $glyph, false, $space);
echo $c->rgbGradientString([255,255,0], [255,0,255], $steps, $glyph, false, $space);

// Background gradients (compact blocks)
echo $c->rgbGradientString([255,0,0], [0,0,255], max(16, $steps * 2), ' ', true, false);
echo $c->rgbGradientString([0,255,0], [0,0,255], max(16, $steps * 2), ' ', true, false);

echo PHP_EOL . "Rainbow:" . PHP_EOL;
echo $c->rainbowString(48, '#');


