<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $user_email = $_POST['signupEmail'];
    $user_name = $_POST['userName'];
    $user_password = $_POST['signupPassword'];
    $user_cpassword = $_POST['signupcPassword'];

    // Check wheather this email exists 
    $existSql = "SELECT * FROM `users` WHERE user_email = '$user_email' ";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email already in use";
    }
    else{
        if($user_password == $user_cpassword){
            $hash = password_hash($user_password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `user_email`, `user_pass`, `user_name`, `timestamp`) 
            VALUES ( '$user_email', '$hash', '$user_name', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                    $showAlert = true;
                    header("Location: /forums/index.php?signupsuccess=true");
                    exit();
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
    header("Location: /forums/index.php?signupsucess=false&error=$showError");
}

?>