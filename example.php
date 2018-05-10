<?php 
require __DIR__ . '/vendor/autoload.php';
use \klevze\phpColors\Colors;

$line = '';

$c = new Colors();

$line = $c->bgRed() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->bgGreen() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->bgYellow() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $line;
$line = $c->bgBlue() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->bgCyan() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->bgMagenta() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $line;
$line = $c->bgLightGray() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->bgDarkGray() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->bgLightRed() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $line;
$line = $c->bgLightGreen() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->bgLightYellow() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->bgLightBlue() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $line;
$line = $c->bgMagenta() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->bgCyan() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->bgWhite() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $line;
echo PHP_EOL;

for ($i = 0; $i < 3; $i++) {
	$line = $c->red($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $line;
	$line = $c->green($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $line;
	$line = $c->yellow($i) . "TEST TEXT " . $c->reset() . PHP_EOL;
	echo $line;
	$line = $c->blue($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $line;
	$line = $c->cyan($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $line;
	$line = $c->magenta($i) . "TEST TEXT " . $c->reset() . PHP_EOL;
	echo $line;
	$line = $c->lightGray($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $line;
	$line = $c->darkGray($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $line;
	$line = $c->lightRed($i) . "TEST TEXT " . $c->reset() . PHP_EOL;
	echo $line;
	$line = $c->lightGreen($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $line;
	$line = $c->lightYellow($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $line;
	$line = $c->lightBlue($i) . "TEST TEXT " . $c->reset() . PHP_EOL;
	echo $line;
	$line = $c->magenta($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $line;
	$line = $c->cyan($i) . "TEST TEXT " . $c->reset() . "\t";
	echo $line;
	$line = $c->white($i) . "TEST TEXT " . $c->reset() . PHP_EOL;
	echo $line;
	echo PHP_EOL;
}

$line = $c->bold() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->underline() . "TEST TEXT " . $c->reset() . "\t";
echo $line;
$line = $c->dim() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $line;

// Italic
$line = $c->underline() . "TEST TEXT " . $c->italic() . "\t";
echo $line;

// Blinked text
$line = $c->blink() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $line;

for ($i = 0; $i < 256; $i+=16) {
	$line = "\033[38;2;250;0;" . $i . "m TEST TEXT\033[0m" . PHP_EOL;
	echo $line;
}

