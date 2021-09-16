<?php 
class Cars{
    //method
	function carDetails1(){

	}
	function carDetails2(){
		
	}
	function carDetails3(){
		
	}
}

$methods = get_class_methods('Cars');
foreach ($methods as $method) {
	echo $method.'<br>';
}



?>