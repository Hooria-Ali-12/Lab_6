<?php
// include database connection 


include 'db.php';

//write sql query to fetch all record

$sql = "SELECT * FROM  STUDENTS";

//EXECUTE AND STORE RSLT

$result = $conn-> query($sql);
?>


<!-- php ki file mai html bhi hoskti -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students list</title>
</head>
<body>
    
<h1> All Registered Students</h1>

<?php

if($result->num_rows > 0){

    //start making html table
    echo "<table border ='1' cellpadding ='10'>";
    echo "<tr>
    <th>ID<th>
    </th>NAME</th>
    <th>EMAIL</th>
    <th>AGE</th>
    </tr>"
while ($row =$result-> fetch_asso()){

        //td => cells of tables

        echo "<tr>";
        echo "<td>" .$row["id"] . "</td>";
        echo "<td>" .$row["name"] . "</td>";
        echo "<td>" .$row["email"] . "</td>";
        echo "<td>" .$row["age"] . "</td>";
        echo "</tr>"

    }

    echo "</table>";

} else{

    echo "<p>No students found </p>";
}

$conn->close();

<p><a href="index.html">GO BACK TO REGISTRATION FORM</a></p>

</body>
</html>





</body>
</html>