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

echo $c->red() . "TEST TEXT " . $c->reset() . "\t";
echo $c->green() . "TEST TEXT " . $c->reset() . "\t";
echo $c->yellow() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $c->blue() . "TEST TEXT " . $c->reset() . "\t";
echo $c->cyan() . "TEST TEXT " . $c->reset() . "\t";
echo $c->magenta() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $c->lightGray() . "TEST TEXT " . $c->reset() . "\t";
echo $c->darkGray() . "TEST TEXT " . $c->reset() . "\t";
echo $c->lightRed() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $c->lightGreen() . "TEST TEXT " . $c->reset() . "\t";
echo $c->lightYellow() . "TEST TEXT " . $c->reset() . "\t";
echo $c->lightBlue() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $c->magenta() . "TEST TEXT " . $c->reset() . "\t";
echo $c->cyan() . "TEST TEXT " . $c->reset() . "\t";
echo $c->white() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo PHP_EOL;

echo $c->bold() . "TEST TEXT " . $c->reset() . "\t";
echo $c->underline() . "TEST TEXT " . $c->reset() . "\t";
echo $c->dim() . "TEST TEXT " . $c->reset() . PHP_EOL;
echo $c->blink() . "TEST TEXT " . $c->reset() . PHP_EOL;
