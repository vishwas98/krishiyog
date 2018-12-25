<?php
session_start();
include 'db_connect.php';
$unit= $_POST['unit'];
$item= $_POST['item'];
$price= $_POST['price'];
$duration= $_POST['duration'];
$unit= $_POST['unit'];
$num= $_SESSION['mobile'];
$id= $_POST['id'];
$bid= $_POST['bid'];

$q="select SID FROM sellerdb where sMobNo=$num";
$result = mysqli_query($connection,$q);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$sid = $row['SID'];


$query="INSERT INTO quotationdb(qid, SID, BID, price,item, unit, duration) VALUES('".$id."','".$sid."','".$bid."','".$price."','".$item."','".$unit."','".$duration."')";
mysqli_query($connection,$query);
header("Location:sellerform.php");
?>
