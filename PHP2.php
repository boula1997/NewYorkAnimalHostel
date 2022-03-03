<?php
require_once "pdo.php";
			
			$name=$_POST["name"];
			$phone=$_POST["phone"];
			$animal_type=$_POST["animal_type"];
			$start_date=$_POST["start_date"];
			$end_date=$_POST["end_date"];


			
 	$stmt = $pdo->query("INSERT INTO book (name, phone, animal_type,start_date,end_date)
	 VALUES ('$name=', '$phone', '$animal_type','$start_date','$end_date')");
		header("location:http://localhost/فندق نيويورك للحيوانات الاليفة/index.html");


		



?>