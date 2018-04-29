<?php 
namespace klevze\phpCliColors;

class Colors
{
	const openEscapeCode = "\033[";
	const closeEscapeCode = "m";
	
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

	public function italic()
	{
		return $this->build(self::ITALIC);
	}

	public function strike()
	{
		return $this->build(self::STRIKETHROUGH);
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


	public function black($style = null) 
	{
		return $this->build($this->color['BLACK'][0], $style);
	}

	public function red($style = null) 
	{
		return $this->build($this->color['RED'][0], $style);
	}

	public function green($style = null) 
	{
		return $this->build($this->color['GREEN'][0], $style);
	}

	public function yellow($style = null) 
	{
		return $this->build($this->color['YELLOW'][0], $style);
	}

	public function blue($style = null) 
	{
		return $this->build($this->color['BLUE'][0], $style);
	}

	public function magenta($style = null) 
	{
		return $this->build($this->color['MAGENTA'][0], $style);
	}

	public function cyan($style = null) 
	{
		return $this->build($this->color['CYAN'][0], $style);
	}

	public function lightGray($style = null) 
	{
		return $this->build($this->color['LIGHT_GRAY'][0], $style);
	}

	public function darkGray($style = null) 
	{
		return $this->build($this->color['DARK_GRAY'][0], $style);
	}

	public function lightRed($style = null) 
	{
		return $this->build($this->color['LIGHT_RED'][0], $style);
	}

	public function lightGreen($style = null) 
	{
		return $this->build($this->color['LIGHT_GREEN'][0], $style);
	}

	public function lightYellow($style = null) 
	{
		return $this->build($this->color['LIGHT_YELLOW'][0], $style);
	}

	public function lightBlue($style = null) 
	{
		return $this->build($this->color['LIGHT_BLUE'][0], $style);
	}

	public function lightMagenta($style = null) 
	{
		return $this->build($this->color['LIGHT_MAGENTA'][0], $style);
	}

	public function lightCyan($style = null) 
	{
		return $this->build($this->color['LIGHT_CYAN'][0], $style);
	}

	public function white($style = null) 
	{
		return $this->build($this->color['WHITE'][0], $style);
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

	private function build($color, $style = null) {
		$res = self::openEscapeCode;
		if ($style != null) {
			$res .= $style . ";"; 
		}
		$res .= $color;
		$res .= self::closeEscapeCode;		
		
		return $res;
	}

}

