<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname="tempdb";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
}
else
{
    die("connecion failed because ".mysqli_connect_error());
}
?>