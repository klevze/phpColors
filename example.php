<?php 

include __DIR__ . "/src/Colors.php";
use \klevze\phpCliColors\Colors;

$c = new Colors();

echo $c->bgRed() . "TEST TEXT " . $c->reset() . "\t";
echo $c->bgGreen() . "TEST TEXT " . $c->reset() . "\t";
echo $c->bgYellow() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $c->bgBlue() . "TEST TEXT " . $c->reset() . "\t";
echo $c->bgCyan() . "TEST TEXT " . $c->reset() . "\t";
echo $c->bgMagenta() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $c->bgLightGray() . "TEST TEXT " . $c->reset() . "\t";
echo $c->bgDarkGray() . "TEST TEXT " . $c->reset() . "\t";
echo $c->bgLightRed() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $c->bgLightGreen() . "TEST TEXT " . $c->reset() . "\t";
echo $c->bgLightYellow() . "TEST TEXT " . $c->reset() . "\t";
echo $c->bgLightBlue() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $c->bgMagenta() . "TEST TEXT " . $c->reset() . "\t";
echo $c->bgCyan() . "TEST TEXT " . $c->reset() . "\t";
echo $c->bgWhite() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo PHP_EOL;

for ($i = 0; $i < 3; $i++) {
	echo $c->red($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $c->green($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $c->yellow($i) . "TEST TEXT " . $c->reset() . PHP_EOL;
	echo $c->blue($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $c->cyan($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $c->magenta($i) . "TEST TEXT " . $c->reset() . PHP_EOL;
	echo $c->lightGray($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $c->darkGray($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $c->lightRed($i) . "TEST TEXT " . $c->reset() . PHP_EOL;
	echo $c->lightGreen($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $c->lightYellow($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $c->lightBlue($i) . "TEST TEXT " . $c->reset() . PHP_EOL;
	echo $c->magenta($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $c->cyan($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $c->white($i) . "TEST TEXT " . $c->reset() . PHP_EOL;
	echo PHP_EOL;
}

echo $c->bold() . "TEST TEXT " . $c->reset() . "\t";
echo $c->underline() . "TEST TEXT " . $c->reset() . "\t";
echo $c->dim() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $c->underline() . "TEST TEXT " . $c->italic() . "\t";
echo $c->blink() . "TEST TEXT " . $c->reset() . PHP_EOL;

for ($i = 0; $i < 256; $i+=16) {
	echo "\033[38;2;250;0;" . $i . "m TEST TEXT\033[0m" . PHP_EOL;
}
