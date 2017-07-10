<?php
    session_start();
    if(isset($_SESSION["time"]))
    {
        $difference=time()-$_SESSION["time"];
        
        if($difference>40)
        {
            session_destroy();
            header("location:main.php");
        }

    }
    
        $_SESSION["time"]=time();
    
    if(isset($_SESSION["Full_Name"]))
{
    echo "Welcome: &nbsp;".strtoupper($_SESSION["Full_Name"]);
    echo "<br> Login Time:&nbsp;".$_SESSION["logintime"];
    echo "<br/>&nbsp;<a href=signout.php>Sign Out</a>";
    require'addCriminals.php';
}

else
{
  header("location:main.php");  
}
?>