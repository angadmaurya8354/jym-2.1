<?php
$server = "localhost";
$username = "root";
$password = "";
$database ="jym";


$conn = mysqli_connect($server,$username,$password,$database); 

if(!$conn){
//     echo "Connecting to database successfully";
// }
// else{
    die("Could not connect to database" . mysqli_connect_error());
}

?>