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
            $error = "Email is already registered.";
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
             header("Location: home.php");
        }
        
    }

include 'index.php';

?>