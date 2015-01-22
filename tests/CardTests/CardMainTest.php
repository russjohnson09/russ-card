<?php

class CardMainTest extends PHPUnit_Framework_TestCase
{
	public function testFirst()
	{
		$this->assertTrue(true);
	}
	
	public function testConstructCardModel()
	{
		new \Russ\Card\Models\Card();
	}
}