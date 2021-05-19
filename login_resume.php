<?php
    session_start();
    $message="";
    if(count($_POST)>0){
        include_once "database_resume.php";
        $result= mysqli_query($DATABASECONNECTION, "SELECT * FROM login where username='', $_POST["username"]." and password = ''.$_POST(["pwd"]."");
        $row = mysqli_fetch_array($result);
        if(is_array($row)){
            $_SESSION['id']=$row['id'];
            $_SESSION["username"]=$row['username'];
        }else{
            $message="Invalid username or Password!";
        }
    }
    if(isset($_SESSION["id"])){
        header("Location: about_me.php");
    }
?>   
