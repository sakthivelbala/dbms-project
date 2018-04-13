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
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dno=$_POST['dno'];
$al1=$_POST['al1'];
$al2=$_POST['al2'];
$al3=$_POST['al3'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$email=$_POST['email'];
$country=$_POST['country'];
$sql="INSERT INTO studentsdata(regno,fname,lname,dno,al1,al2,al3,state,pincode,email,country)VALUES('$regno','$fname','$lname','$dno','$al1','$al2','$al3','$state','$pincode','$email','$country')";
if(!mysql_query($sql)){
	die("error".mysql_error());
}
echo "successfully updated";
mysql_close();
?>