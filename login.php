<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page </title>
</head>
<body> <center>


    <h3> have an accound means </h3>
    <form action="login_validation.php" method="POST">
        <input type="email" name = "email"> <br> <br>
        <input type="password" name="password" id=""><br> <br>
        <button type="submit">submit</button><br> <br>
    </form>
    <?php  error_reporting(E_ERROR | E_PARSE);  if($error) echo "<p style='color:red;'> $error; </p>;" ?>
    </center>
</body>
</html>