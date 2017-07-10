<?php
session_start();        
if(isset($_SESSION["fullname"]))
        {
        session_destroy();
        header("location:main.php");
        }
        
        else
        {
        session_destroy();
        header("location:main.php");
          
        }
?>