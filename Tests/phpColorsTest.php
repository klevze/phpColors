<?php
use PHPUnit\Framework\TestCase;

class phpColorsTest extends TestCase
{
	private $colors;

	protected function setUp()
	{
		$this->colors = new klevze\phpColors\Colors();
	}

	protected function tearDown()
	{
		$this->colors = null;
	}

	public function testAdd()
	{
		 $this->assertEquals("\033[41mTEST TEXT\033[0m", $this->colors->bgRed() . "TEST TEXT" . $this->colors->reset());
	}
}
