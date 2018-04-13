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
$value1=$_POST['master'];
$value=$_POST['key'];
$query = sprintf("SELECT * FROM studentsdata WHERE %s='%s'",mysql_real_escape_string($value1),mysql_real_escape_string($value));
$result = mysql_query($query);
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
while ($row = mysql_fetch_assoc($result)) {
	echo "first name:";
    echo $row['fname'];
	echo "<br>"."last name:";
    echo $row['lname'];
	echo "<br>"." door no:";
    echo $row['dno'];
	echo "<br>"." adress:";
    echo $row['al1'];
	echo "<br>"."    ";
	echo $row['al2'];
	echo "<br>"."     ";
	echo $row['al3'];
	echo "<br>"."State:";
	echo $row['state'];
	echo "<br>"."Email:";
	echo $row['email'];
	echo "<br>"." pincode:";
	echo $row['pincode'];
	echo "<br>"." country:";
	echo $row['country'];
	echo "<br>"." current year:";
	echo $row['cyear'];
	echo "<br>"."joining year:";
	echo $row['jyear'];
	echo "<br>"."completing year:";
	echo $row['compyear'];
	echo "<br>"." overall cgpa:";
	echo $row['ocgpa'];
	echo "<br>"."Online course:";
	echo $row['ocourse'];
	echo "<br>"."Sport:";
	echo $row['sport'];
	echo "<br>"."-------------------------------------------------------------------------------------------------------------";
}
mysql_free_result($result);
mysql_close();
?>