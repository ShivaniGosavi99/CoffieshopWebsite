<?php

$con = mysqli_connect('localhost' ,'root');

if($con)
{
	echo "connection successfull";

}
else
{
	echo "no connection";
}

mysqli_select_db($con,'coffieshopwebsite');
$name = $_POST['name'];
$phone = $_POST['phone'];
$Address = $_POST['Address'];
$time = $_POST['time'];

$flavour = $_POST['flavour'];
$kg = $_POST['kg'];

$query = "insert into userentrydata(name, phone, Address,time,Kg,flavour)
values('$name','$phone','$Address','$time','$kg','$flavour') ";

//$mysqli_query($con, $query);
mysqli_query($con, $query);

header('location:index.php');




?>