<?php 
class Cars{
	public $seat = 10;
	private $wheel = 20;
	protected $cool =50;

	public function CarDetails($temp = null){
		echo $temp. "is now ".$this->cool;
	}

}

$nazmul = new Cars();
echo $nazmul->CarDetails("Temperature ");



?>