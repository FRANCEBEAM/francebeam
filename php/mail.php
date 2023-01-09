<?php


if(isset($_POST['btnSend'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(empty($name) || empty($email) || empty($message)){

        header('location: /index.php?error');


    }else{
        $to = "softwareversion2.8@gmail.com";

        if(mail($to, $message, $email)){
            header('location: /index.php?success');
        }
    }
}else{
    header('location: /index.php?error');
}


?>