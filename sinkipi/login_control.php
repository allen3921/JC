<?php
header('Content-Type:text/html;charset=utf-8');
$email = $_POST['email'];
$user_password = $_POST['user_password'];
include 'sqlbase.php';

$con = mysql_connect("$host_name","$db_user","$db_pass");
if(!$con){
	die ('Could not connect:'.mysql_error());
}

mysql_select_db("$db_name",$con);
mysql_query('set names utf8');
// $md5_password = md5($user_password);
$login_result = mysql_query("select * from $table_user_name where email = '$email' and password = '$user_password'");

if(mysql_num_rows($login_result)){
	$user_row=mysql_fetch_array($login_result);
	session_start();
	$_SESSION["admin"]=true;
	$_SESSION["login_time"]=mktime();
	$_SESSION['user_id']=$user_row['user_id'];
	$_SESSION['user_name'] = $email;
	
	$user_id = $user_row['user_id'];
	
// 	$priority_result = mysql_query("select priority from user_info where user_id = '$user_id'");
// 	$priority_row=mysql_fetch_array($priority_result);
	
// 	$_SESSION['priority']=$priority_row['priority'];
	echo "登录成功！";
}
else {
	echo "用户名密码错误！";
}
?>