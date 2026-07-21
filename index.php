<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Register form</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class ="p-3 mt-3 ">
<center> 
       <h4 >SIGN UP</h4>
       <br>
       <form action="register.php" method="POST">
       <label for=""> FirstName  :</label> 
       <input type="taxt" name="first_name" id="" placeholder = "enter the fisrt name ">
       <br>
       <br>
       <label for=""> LastName  :</label> 
       <input type="taxt" name="last_name" id="" placeholder = "enter the last  name ">
       <br>
       <br>
       <label for=""> Email  :</label> 
       <input type="email" name="email" id="" placeholder = "enter the email ">
       <br>
       <br>
       <label for=""> Password  :</label> 
       <input type="password" name="password" id="" placeholder = "enter the password ">
       <br>
       <br>
       <label for=""> Conform Password  :</label> 
       <input type="password" name="cpassword" id="" placeholder = "enter the same  password ">
       <br>
       <br>
       <button type="submit"> Login</button>
      </form>
       <p>
             already login   <a href="login.php"> Click   </a>
       </p>
       <?php error_reporting(E_ERROR | E_PARSE);  if($error) echo "<p style='color:red;'> $error </p>;" ?>
       <?php if($success) echo "<p style='color:blue;'>$success</p>"; ?>
 </center>      
</body>
</html>