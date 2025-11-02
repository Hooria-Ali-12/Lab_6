<!DOCTYPE html>
<html lang="en">
<head>
     <title>LOGIN FORM</title>
     <link rel="stylesheet" href="style.css">
</head>


<body>
   

    <form id = "studentForm" action = "insert.php" method = "POST">

    <div class="card">
    
    <h1 class="welcome"> REGISTRATION FORM</h1>
    
    <label for="name">name</label>
    <input type="text" name= "name" placeholder="Enter your Full name" class="name"><br>
     
    <label for="age">age</label>
    <input type="number" name= "age"   placeholder="Enter age in numbers" class="age"><br>
        
    <label for="email">email</label>
    <input type="email"  name= "email"  placeholder="Enter your email id" class="email"><br>

    <button class="button">SUBMIT</button>

</div>

</form>

</body>
</html>
