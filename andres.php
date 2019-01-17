 <?php

	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	function devsuTest(){ 
   	echo 'Hello andres from ';
   	system('hostname'); 
 }

	devsuTest();

?>
