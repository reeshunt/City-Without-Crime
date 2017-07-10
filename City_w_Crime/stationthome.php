<div class="criminal"><br />
CRIMINALS
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
    }

else
{
  header("location:main.php");  
}

require'dbconnection.php';
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
<div class="complain-right">
<input type="submit" name="btnView" value="show FIRs" />
<?php
require 'dbconnection.php';
if(isset($_POST["btnView"]))
    {
        $selQry="select * from emergency";
        $result=@mysqli_query($link,$selQry) or die (mysqli_error($link));
        echo "<table>
        <tr>
        <td>Id</td>
        <td>Desc</td>
        </tr>";
       while($row=mysqli_fetch_assoc($result))
               {
       
            echo "<tr>";
            echo "<td>".$row["Sno"]."</td>";
            echo "<td>".$row["Description"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</div>