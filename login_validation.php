<?php 
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
     $email = trim($_POST['email']);
     $password = trim($_POST['password']);

    if($email == ""){
        $error = " enter the email";
    }
    elseif($password == ''){
        $error = " enter the password";
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = "enter the valid email";
    }
    else{
        $users = json_decode(file_get_contents('user_data.json'),true)?? [];
        $user_found = false;
        foreach ($users as $user) {
            if($user["email"] == $email){
                $user_found = true;
                if (password_verify($password,$user["password"])) {
                    $_SESSION["user_email"] = $user["email"];
                    header("Location: home.php");
                     exit();
                }
                 else{
                $error = " your enter the wrong password";
                }
                break;
            }
        
        }
        if(!$user_found){
            $error = "Email not registered. Please register first.";
        }
    }   
}
include 'login.php';
?>