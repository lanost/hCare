<?php

if(isset($_POST['b2']))
{
	session_start();

$fnm=$_SESSION['fname'];
$lnm=$_SESSION['lname'];
$gen=$_SESSION['gender'];
$ag=$_SESSION['age'];
$mb=$_SESSION['mob'];
$ad=$_SESSION['addr'];

	$ootp=$_SESSION['otp'];
	$gotp=$_POST['otp'];
	
if($gotp==$ootp)
{
	
	include '../link.php';
	$ins=mysql_query("insert into register values('','$fnm','$lnm','$gen','$ag','$mb','$ad') ");
	
	header("location:success.php");
	
}
	else
	{
		
		header("location:error.php");
		
	}	
		
	
}
?>