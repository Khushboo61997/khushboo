<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khushboo";
$port = "3308";

$con = mysqli_connect($servername,$username,$password,$dbname,$port); 

$na = $_POST['name'];
$r  = $_POST['email'];
$cl = $_POST['comment'];

if ($_POST['submit'])

		
	           if($na!="" && $r!="" && $cl!="")
	             {
					 $query = "INSERT INTO KHUSHBOO VALUES ('$na','$r','$cl')";
					 $result = mysqli_query($con,$query);
                     if ($result) echo 'Thank you! We have received your message.';
		                
						else echo 'Sorry, unexpected error. Please try again later';
				 }
?>