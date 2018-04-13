<?php
define('DB_NAME','studentdatabse');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');
$link=mysql_connect(DB_HOST,DB_USER,DB_PASS);
if(!$link){
	die("could not connect".mysql_error());
}
$db_selected=mysql_select_db(DB_NAME,$link);
if(!$db_selected){
	die("can't use ".DB_NAME.':'.mysql_error());
}
$regno=$_POST['regno'];
$cyear=$_POST['cyear'];
$jyear=$_POST['jyear'];
$compyear=$_POST['compyear'];
$ocgpa=$_POST['ocgpa'];
$ocourse=$_POST['ocourse'];
$sport=$_POST['sport'];
$sql="UPDATE studentsdata SET cyear='$cyear',jyear='$jyear',compyear='$compyear',ocgpa='$ocgpa',ocourse='$ocourse',sport='$sport' WHERE regno='$regno' ";
if(!mysql_query($sql)){
	die("error".mysql_error());
}
echo "successfully updated";
mysql_close();
?>