<?php
session_start();
require_once 'connect/connect.php';
$connect=connect();
$id=$_POST['manafacturer_id'];
$sql="DELETE FROM ";
?>