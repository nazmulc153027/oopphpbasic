<?php
 class OOP{
 	//property
 	var $nazmul = "MD.Nazmul Huda";

 	function carDetails(){
 		echo $this->nazmul;
 	}
 }

 $bmw = new OOP();
 // echo $bmw->nazmul;
 echo $bmw->carDetails();



?>