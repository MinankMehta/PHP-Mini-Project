<?php
$servername="localhost";
$username="root";
$password="";
$dbname="wp_mini";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo mysqli_connect_error();    
}
?>