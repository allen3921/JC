<?php

header( "Content-Type:text/html;charset=utf-8" );
$email = $_POST['email'];
$password = $_POST['password'];
$user_name = $_POST['user_name'];
$gender = $_POST['gender'];
$school = $_POST['school'];
$grade = substr(trim($_POST['grade']),0,4);
$title = $_POST['title'];


include "sqlbase.php";
		$con=mysql_connect("$host_name","$db_user","$db_pass");
		if(!$con){
			die ( 'Could not connect: ' . mysql_error () );
		}
mysql_select_db("$db_name",$con);

mysql_query("set names utf8");

$result_register = mysql_query("select user_id from $table_user_name where email = '$email'");
$num = mysql_num_rows($result_register);

if($num){
	echo "0";
}
else {
// $md5_password = md5($password);
mysql_query ("INSERT INTO $table_user_name (email,password) VALUES ('$email','$password')");
$result = mysql_query("select user_id from $table_user_name where email = '$email'");
$row = mysql_fetch_array($result);
$user_id = $row['user_id'];

$query = "INSERT INTO $table_user_info (user_id,$tb_username,$tb_gender,$tb_email,$tb_school,$tb_grade,$tb_title) VALUES ('$user_id','$user_name','$gender','$email','$school','$grade','$title')";


mysql_query ($query);

session_start();
$_SESSION["admin"]=true;
$_SESSION["login_time"]=mktime();
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$email;
echo "1";
}

?>

