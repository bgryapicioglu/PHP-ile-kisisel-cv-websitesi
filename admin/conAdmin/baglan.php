<?php 


try 
{
	$db = new PDO("mysql:host=localhost;dbname=kisiselScript",'root','123456789');
	 // echo "veritabanı bağlandı";
}
catch (PDOExpception $e)
{
	echo $e->getMessage();
}

 ?>