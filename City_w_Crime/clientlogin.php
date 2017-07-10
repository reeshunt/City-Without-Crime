<?php



require 'loginbox.php';
require 'dbconnection.php';


    if(isset($_POST["btnLogin"]))
    {
        //login script
        
        $userName=$_POST["txtUsername"];
        $password=$_POST["txtPassword"];
        $authQry="select Full_Name from login_master where userName='$userName' and password='$password'";
        $result=@mysqli_query($link,$authQry) or die(mysqli_error($link));
        
        if($row=mysqli_fetch_assoc($result))
        {
            session_start();
            $_SESSION["Full_Name"]=$row["Full_Name"];
            $_SESSION["logintime"]=date("d/m/y,h:i:s a");
            header("location:clienthome.php");
        }
        else
        {
            echo "<font color=red size=4> Invalid Username/Password</font>";
        }
    }



?>

?>
