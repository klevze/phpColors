<?php 
namespace klevze\phpColors\Traits;

trait Styles
{	
	/**
	 * [bold description]
	 * @return [type] [description]
	 */
	public function bold()
	{
		return $this->build(self::BOLD);
	}

	/**
	 * [dim description]
	 * @return [type] [description]
	 */
	public function dim()
	{
		return $this->build(self::DIM);
	}

	/**
	 * [underline description]
	 * @return [type] [description]
	 */
	public function underline()
	{
		return $this->build(self::UNDERLINE);
	}

	/**
	 * [italic description]
	 * @return [type] [description]
	 */
	public function italic()
	{
		return $this->build(self::ITALIC);
	}

	/**
	 * [strike description]
	 * @return [type] [description]
	 */
	public function strike()
	{
		return $this->build(self::STRIKETHROUGH);
	}

	/**
	 * [blink description]
	 * @return [type] [description]
	 */
	public function blink()
	{
		return $this->build(self::BLINK);
	}

	/**
	 * [inverted description]
	 * @return [type] [description]
	 */
	public function inverted()
	{
		return $this->build(self::INVERTED);
	}

	/**
	 * [hidden description]
	 * @return [type] [description]
	 */
	public function hidden()
	{
		return $this->build(self::HIDDEN);
	}

	/**
	 * [reset description]
	 * @return [type] [description]
	 */
	public function reset() 
	{
		return $this->build(self::RESET);
	}
}

