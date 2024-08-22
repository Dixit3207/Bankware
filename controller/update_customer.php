<?php
include '../config.php';
$admin = new Admin();

if(isset($_POST['add2']))
{
	$cid=$_POST['cid'];
	$name=$_POST['cname'];
	$sid=$_POST['sid'];


	$address=$_POST['cadd'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $adhar=$_POST['adno'];
    $acno=$_POST['acno'];
    $stmt=$admin->cud("UPDATE `acust` SET `cname`='$name',`sid`='$sid',`cadd`='$address',`cphone`='$phone',`cemail`='$email',`age`='$age',`adhar`='$adhar',`acno`='$acno' WHERE `cid`='$cid'",'Updated');
    echo "<script>alert('Customer Updated Successfully');window.location='../staff/html/viewcustomer.php';</script>";
   }
   ?>