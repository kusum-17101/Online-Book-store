<?php

$servername ="localhost";
$username="root";
$password="";
$dbname = "bookstore";
$conn = mysql_connect($servername, $username, $password);
$dbcon= mysql_select_db($dbname);
$username = $_POST['uname'];
$pass = $_POST['password1'];
$sql ="SELECT fname FROM admin1 WHERE username='$username' and password='$pass'";
$result = mysql_query($sql);
$data=mysql_fetch_row($result);
$count=mysql_num_rows($result);
echo $count;
if($count!=null)
{
    // output data of each row
		
	session_start();
$_SESSION["admin"] = $username;
$_SESSION["firn"] = $data[0];	
	 header("Location:projectN.php");

	 
}
 else {
    header("Location: 2.php");
}
 mysql_close($conn);
?> 