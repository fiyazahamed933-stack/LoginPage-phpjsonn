<?php session_start();

if(isset($_SESSION['user_email'])){
    header("Location:index.php");
    exit();
}

$error = "";
$success = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $cpassword = trim($_POST['cpassword']);

    if(empty($first_name)){
        $error = "enter the first name";
    }
    if($last_name == ''){
        $error = " enter the last name";
    }
    if($email == ""){
        $error = " enter the email";
    }
    elseif($password == ''){
        $error = " enter the password";
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = "enter the valid email";
    }
    elseif ($password != $cpassword  ){
        $error = "enter the correct password";
    }
    else{
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $users = json_decode(file_get_contents('user_data.json'),true)?? [];
        $email_exists = false;
        foreach ($users as $user) {
            if($user['email'] == $email){
                $email_exists = true;
                break;
            }
        }
        if($email_exists){
            $error = "email is already registered.";
        }
        else{
            $users[] = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $password_hash
            ];      
            file_put_contents(("user_data.json"),json_encode($users, JSON_PRETTY_PRINT));
             $success = " register !!";
        }
        
    }
}
include 'index.php';

?>