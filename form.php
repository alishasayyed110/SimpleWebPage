<?php

if(isset($_POST['btn-send']))
{
    $UserName = $_POST['username'];
    $Email = $_POST['email'];
    $Subject = $_POST['subject'];
    $Message = $_POST['message'];

    if(empty($UserName) || empty($Email) || empty($Subject) || empty($Message))
    {
       
        header('location:alisha.php?error');
    }
    else
    {
        $to = "alishasaiyed50246@gmail.com";

        if(mail($to,$Subject,$Message,$Email))
        {
            header("location:alisha.php?success");
        }
    }
}
else
{
    header('location:alisha.php');
}

?>