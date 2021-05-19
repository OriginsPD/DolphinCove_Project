<?php
            // Initialize the session
            session_start();

            // // Check if the user is logged in, if not then redirect him to login page
            // if($_SESSION['Active']==false)
            // {header("location: index_resume1.php");
            // } --> -->

            

            if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                    header("location: index_resume1.php");
                        exit;}
?>