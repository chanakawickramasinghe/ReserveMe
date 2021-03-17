<?php


$servername="localhost";
$username="root";
$password="";
$dbname="reserveme";

// try{
//     $connection = new PDO("mysql:dbhost=$servername;dbname=$dbname", "$username", "$password");
// }catch(PDOException $e){
//     echo $e->getMessage();
// }


$connection = mysqli_connect($servername,$username,$password,$dbname);

if(!$connection){
    die("Connection Failed:".mysqli_connect_error());
}
?>