<?php 
$servername = "localhost:3307";
$username = "root" ;
$password = 12345678 ;
$dbname = "avahome" ;
$connect = new mysqli($servername,$username,$password,$dbname);
if(!$connect){
    echo "<script>alert('connect database error !')</script>" ;
}
?>