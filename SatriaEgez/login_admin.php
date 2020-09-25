<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    

       if ($username=="Satriawan" AND $password=="2002")
    {
      
         $_SESSION["username"]=$username;
   
        header("location:home.php");
    }else{
      
        header("location:login.php?login_error");
    }
?>