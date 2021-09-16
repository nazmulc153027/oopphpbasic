<?php 
 class Nur{
 	 var $ferari = "Mohammad Nazmul Huda Anik";
 	
 }

 //inheritance

  class Nazmul extends Nur{
       function tacuma(){
 	 	echo $this->ferari;
 	 }
  }

  $bmw = new Nazmul();
  // echo $bmw->ferari;
  echo $bmw->tacuma();


?>