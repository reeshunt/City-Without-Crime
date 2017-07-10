<!doctype html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>City Without Crime</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="./styles.css" />
<script type="text/javascript">

    function changetime()
{   

var date=new Date();
var time=date.toLocaleTimeString();
//document.write("current time:"+time);
document.getElementById("time").innerHTML="Time: "+time;

}

window.onload=function()
{
    interval=setInterval("changetime()",1000);
};


</script>

</head>

<body background="./img/Guide-Background-1728x1080.jpg">
    <script src="bootstrap/js/bootstrap.min.js"></script> 
    <script src="scripts/jquery-3.1.1.min.js"></script>


<?php require'main-top.php' ?>
<div class="content-middle" >
<div class="newscontent">
<div class="newshead"><h4 class="newshfont">Wanted Criminals</h4></div>
<div class="newshere">
<marquee height="800" direction="down" scrollamount="6" onmouseover="stop()" onmouseout="start()" >

<div class="newslist">
<?php


require 'dbconnection.php';

$selecttQry="select * from product_master";
$result=@mysqli_query($link,$selecttQry) or die(mysqli_error($link));
echo "<table cellspacing=10px cellpadding=10px><tr>";
        while($row=mysqli_fetch_row($result))
        {
                 
                 echo "<table><tr>";   
                 
            
            
            echo "<td ><br><img src='$row[5]' width=50% /><br>";
              echo "ID:".$row[0]."<br>NAME:".$row[1]."<br>";
            echo "Location:".$row[2]."<br>Crime Type:".$row[3]."<br>Ranking:".$row[4]."<br>";
            echo "<input type='button' name='add' id=$row[0] value='Click to View' onclick='additem(this.id)'/></td>";
            echo "</tr>";
             echo "<br/>";
              echo "<br/>";
        
            
        }
        echo "</table>";             
?>
</div>

</marquee>
</div>
</div>


<div class="sliderbox">
<div class="slider">
<iframe src="index.html" style="width:740px;height:375px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
</div>
<div class="loginforall" align="center">
<a class="logins" href="./clientlogin.php">Client Login</a>
<a class="logins" href="./adminlogin.php">Admin Login</a>
<a class="logins" href="./stationlogin.php">Station Login</a>
</div>
</div>

<div class="video">
<iframe width="465" height="280" src="./videos/policestory.mp4" >
</iframe>
</div>
    
    
    <div class="complainbox">
                <form method="post">
                <fieldset>
                <legend id="complainhead">Emergency Complain</legend>
                <div id="emergencyComplain">
                <input type="text" id="Sno" name="Sno" class="complaindetails formfull" placeholder="Enter ID No." /><br />
                <textarea id="description" name="Description" class="complaindetails  formfull" placeholder="Enter you complain (200 characters)"></textarea><br />
                <input type="submit" id="btnSubmitComplain" class="complaindetails  formfull" name="btnSubmitComplain" value="Lodge Complain" /><br />
                </fieldset>
                </div>
                <?php

                        if(isset($_POST["btnSubmitComplain"]))
                            {
                                $Sno=$_POST["Sno"];
                                $Description=$_POST["Description"];
                                $insertQry="insert into emergency values('$Sno','$Description')";
                                @mysqli_query($link,$insertQry)or die(mysqli_error($link));
                                echo "<font color=green size=4> Complain submitted successfully</font>";
                            }
                        ?>
               </form>

    </div>
</div>



<?php require'main-bottom.php' ?>


           

</body>
</html>
