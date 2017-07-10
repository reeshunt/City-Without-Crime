<!--HTML Section-->
<!--..............................................................................................................-->
<?php
require 'dbconnection.php';
?>
<h2 align="center"> Add Criminal List!</h2>
<hr color="red" size="5"/>
<form method="post" enctype="multipart/form-data">
<table align="center" width="80%" >
<tr><td>
<fieldset>
<legend>Criminal Info....</legend>
<table align="center" border="0px" cellspacing="0px" cellpadding="5px" width="80%">
<tr><td>
C_Id :
</td>

<td><input type="text" name="txtId" id="pId" />
</td>
</tr>

<tr><td>
Name :
</td>

<td><input type="text" name="txtName" id="name" />
</td>
</tr>
<tr><td>
Location :
</td>
<td>
<input type="text" name="category" id="category" />
</td>
</tr>

<tr><td>
Crime Type :
</td>
<td><select name="brand">
<option value="-1"> ---Select Type--</option>
<option>Murderer</option>
<option>Rober</option>
<option>Fraud</option>

</select>
</td>
</tr>
<tr>
<td> Ranking:
</td>
<td> <input type="number" name="numPrice" id="price" min="0"/> </td></tr>
<tr>
<td>Image :</td>
<td><input type="file" id="image" name="file"/></td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="btnAdd" value="Add Criminal to List"/></td></tr>
</table>
</fieldset>


</td>

</tr>


</table>
</form>

<!--.............................................................................................................-->




<!-- To Add Product..............................................................................................-->

<?php
    //to insert new record
    if(isset($_POST["btnAdd"]))
    {
        $id=$_POST["txtId"];
        $name=$_POST["txtName"];
        $category=$_POST["category"];
        $brand=$_POST["brand"];
        $price=$_POST["numPrice"];
       
        if($_FILES["file"]["name"]!="")
         {
       
         $path="./Image/".$_FILES["file"]["name"];
         
       
         @copy($_FILES["file"]["tmp_name"],$path)or die("could not upload file");
         echo "file uploaded succesfully <br/>";
    
    
          }
      else
      echo "<font color=red> Select any file to upload</font>";
      
        $path="./Image/".$_FILES["file"]["name"];
        $image=$path;
        $insertQry="insert into product_master values($id,'$name','$category','$brand',$price,'$image')";
        @mysqli_query($link,$insertQry)or die(mysqli_error($link));
       
        
    }
?>  
    
<!--.............................................................................................................-->   