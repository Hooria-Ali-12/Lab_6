db.php



<?php 

$servername = "localhost"; //database server (local host when using)
$username = "root";   //default username
$password = ""; //by default it is empty
$dbname = "student_db"; 

$conn = new mysqli($servername , $username, $password , $dbname); //conncetion mysqli obj create kra hua
//aur variable bhej rhe ye 4 cheezein 


//obj ki class mai se var ko access krna                                                                  

if($conn->connect_error){   //mysqli ki class mai pre-define var hai jo db ki connectivity k during error ae tu wo die ko chala de
    die("connection failed : " . $conn->connect_error);  //die func => agar error true krde tou connection stop 
}

?>

