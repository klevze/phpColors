<?php 
namespace klevze\phpColors\Traits;

trait fgColors
{	
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

}

