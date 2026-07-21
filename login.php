<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page </title>
</head>
<body> <center>
    <h3> Log-in to your account </h3>
    <form action="login_validation.php" method="POST">
        <label for=""> Email </label>
        <input type="email" name = "email"> <br> <br>
        <label for=""> Password </label>
        <input type="password" name="password" id=""><br> <br>
        <button type="submit">submit</button><br> <br>
    </form>
    <p> Don't have an account yet?  <a href="register.php"> Click </a> </p> 
    <?php  error_reporting(E_ERROR | E_PARSE);  if($error) echo "<p style='color:red;'> $error; </p>;" ?>
    </center>
</body>
</html>