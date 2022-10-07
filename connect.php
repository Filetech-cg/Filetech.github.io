<?php

$con= mysqli_connect('localhost','root','');

if (!$con){
    die("database connection failed" . mysqli_error($con));
}

$select_db = mysqli_select_db($con, 'filetech');
if(!$select_db){
    die("database connection failed" . mysqli_error($select_db));
}

?>

