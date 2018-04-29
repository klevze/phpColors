<?php 
namespace klevze\phpCliColors;

class Colors
{
	const openEscapeCode = "\033[";
	const closeEscapeCode = "m";
	
	// SET STYLES
	const BOLD = "1";
	const DIM = "2";
	const UNDERLINE = "4";

	const BLINK = "5";
	const INVERTED = "7";
	const HIDDEN = "8";

	// RESET STYLES
	const RESET = "0";

	// FOREGROUND & BACKGROUND COLORS
	var $color = [
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

	function __construct()
	{
	}

	public function bold()
	{
		return $this->build(self::BOLD);
	}

	public function dim()
	{
		return $this->build(self::DIM);
	}

	public function underline()
	{
		return $this->build(self::UNDERLINE);
	}

	public function blink()
	{
		return $this->build(self::BLINK);
	}

	public function inverted()
	{
		return $this->build(self::INVERTED);
	}

	public function hidden()
	{
		return $this->build(self::HIDDEN);
	}

	public function reset() 
	{
		return $this->build(self::RESET);
	}


	public function black() 
	{
		return $this->build($this->color['BLACK'][0]);
	}

	public function red() 
	{
		return $this->build($this->color['RED'][0]);
	}

	public function green() 
	{
		return $this->build($this->color['GREEN'][0]);
	}

	public function yellow() 
	{
		return $this->build($this->color['YELLOW'][0]);
	}

	public function blue() 
	{
		return $this->build($this->color['BLUE'][0]);
	}

	public function magenta() 
	{
		return $this->build($this->color['MAGENTA'][0]);
	}

	public function cyan() 
	{
		return $this->build($this->color['CYAN'][0]);
	}

	public function lightGray() 
	{
		return $this->build($this->color['LIGHT_GRAY'][0]);
	}

	public function darkGray() 
	{
		return $this->build($this->color['DARK_GRAY'][0]);
	}

	public function lightRed() 
	{
		return $this->build($this->color['LIGHT_RED'][0]);
	}

	public function lightGreen() 
	{
		return $this->build($this->color['LIGHT_GREEN'][0]);
	}

	public function lightYellow() 
	{
		return $this->build($this->color['LIGHT_YELLOW'][0]);
	}

	public function lightBlue() 
	{
		return $this->build($this->color['LIGHT_BLUE'][0]);
	}

	public function lightMagenta() 
	{
		return $this->build($this->color['LIGHT_MAGENTA'][0]);
	}

	public function lightCyan() 
	{
		return $this->build($this->color['LIGHT_CYAN'][0]);
	}

	public function white() 
	{
		return $this->build($this->color['WHITE'][0]);
	}

	public function bgBlack() 
	{
		return $this->build($this->color['BLACK'][1]);
	}

	public function bgRed() 
	{
		return $this->build($this->color['RED'][1]);
	}

	public function bgGreen() 
	{
		return $this->build($this->color['GREEN'][1]);
	}

	public function bgYellow() 
	{
		return $this->build($this->color['YELLOW'][1]);
	}

	public function bgBlue() 
	{
		return $this->build($this->color['BLUE'][1]);
	}

	public function bgMagenta() 
	{
		return $this->build($this->color['MAGENTA'][1]);
	}

	public function bgCyan() 
	{
		return $this->build($this->color['CYAN'][1]);
	}

	public function bgLightGray() 
	{
		return $this->build($this->color['LIGHT_GRAY'][1]);
	}

	public function bgDarkGray() 
	{
		return $this->build($this->color['DARK_GRAY'][1]);
	}

	public function bgLightRed() 
	{
		return $this->build($this->color['LIGHT_RED'][1]);
	}

	public function bgLightGreen() 
	{
		return $this->build($this->color['LIGHT_GREEN'][1]);
	}

	public function bgLightYellow() 
	{
		return $this->build($this->color['LIGHT_YELLOW'][1]);
	}

	public function bgLightBlue() 
	{
		return $this->build($this->color['LIGHT_BLUE'][1]);
	}

	public function bgLightMagenta() 
	{
		return $this->build($this->color['LIGHT_MAGENTA'][1]);
	}

	public function bgLightCyan() 
	{
		return $this->build($this->color['LIGHT_CYAN'][1]);
	}

	public function bgWhite() 
	{
		return $this->build($this->color['WHITE'][1]);
	}

	private function build($color) {
		return self::openEscapeCode . $color . self::closeEscapeCode;		
	}

}

