<?php  

/**
* 
*/
class Color
{

	public $red = 0;
	public $green = 0;
	public $blue = 0;


	function __construct( array $kwargs)
	{
		if (array_key_exists('red', $kwargs))
			$this->red = intval($kwargs['red']);
		if (array_key_exists('green', $kwargs))
			$this->green = intval($kwargs['green']);
		if (array_key_exists('blue', $kwargs))
			$this->blue = intval($kwargs['blue']);
		return ;
	}

	function add()
	{

	}

	function sub()
	{
		
	}

	function mult()
	{
		
	}

	function __destruct()
	{
		return ;
	}

	function __toString()
	{
		
	}
}

$couleur = new Color( array('red' => 200, 'green' => 50, 'blue' => 30));

?>