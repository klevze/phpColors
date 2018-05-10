<?php 
namespace klevze\phpColors\Traits;

trait bgColors
{	
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
}

