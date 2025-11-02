<?php

//this file recieve data from POST and saves it

//incllude database file jop banai hai xammp pe

include 'db.php';
//_SERVER super global array hai sare local files ka var,forms, data hota hai
// array ki class ka var hai request_method => Form kaa mthod chek krega

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //collect form data sefely => Jo jo data apne apne form mai likha hai wo sara yhn ajaega 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];



$sql = "INSERT INTO students (name, email , age) VALUES ('$name' , '$email' , '$age')";


//Run query and check 

if($conn->query($sql) === TRUE) {

    echo "<h2> Student Registered Succefully! </h2>";
    echo "<p><a href= 'index.html'> GO BACK </a></p>";
}

else{
    echo "Error: " .$sql . "<br>" .$conn->error;

}

//close database connection compulsory to close it always

$conn->close();

}

?>
