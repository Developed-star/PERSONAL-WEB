<?php
//connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Portfolio_db";
$conn="";
//database connection
try{
   $conn=mysqli_connect($servername,$username,$password,$dbname);

}
catch(mysqli_sql_exception){
   echo"Sorry Could not Connected";
}
// if($conn){
//     echo"Ready to go You are Connected";
// $conn->close();
// }
?>