<?php
//connection to the database

$conn = mysqli_connect('localhost','root','root','orderNumbers');

if(!$conn){

    echo 'Error: ' . mysqli_connect_error();
}
?>