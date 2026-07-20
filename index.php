<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Register form</title>
</head>
<body>
<center> 
       <h4 > logiin form </h4>
       <br>
       
       <form action="register.php" method="POST">
       <label for=""> first_Name  :</label> 
       <input type="taxt" name="first_name" id="" placeholder = "enter the fisrt name ">
       <br>
       <br>
       <label for=""> last_Name  :</label> 
       <input type="taxt" name="last_name" id="" placeholder = "enter the last  name ">
       <br>
       <br>
       <label for=""> Email  :</label> 
       <input type="email" name="email" id="" placeholder = "enter the email ">
       <br>
       <br>
       <label for=""> password  :</label> 
       <input type="password" name="password" id="" placeholder = "enter the password ">
       <br>
       <br>
       <label for=""> conform password  :</label> 
       <input type="password" name="cpassword" id="" placeholder = "enter the same  password ">
       <br>
       <br>
       <button type="submit"> Login</button>

 </form>
       <p>
       <a href="login.php">   already login </a>
       </p>
       <?php error_reporting(E_ERROR | E_PARSE);  if($error) echo "<p style='color:red;'> $error; </p>;" ?>
       <?php if($success) echo "<p style='color:blue;'>$success</p>"; ?>
 </center>      
</body>
</html>