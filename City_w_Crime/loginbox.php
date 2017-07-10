<html>
<head>
<title>Login</title>
<style type="text/css">

#background{
    background-image:url("img/secure.jpg");
    background-position: center;
}
.login{
    margin:3px 3px 3px 3px;
    text-align: center;
   
   
}

.loginbox{
    background-color: #0080FF;

    padding: 40px 40px 40px 40px ;
    width:240px;
    margin:200px;
    opacity:0.8;
    border-radius:300px;
}
#btnLogin{
     border-radius:20px;
     height:30px;
     width: 80px;
}


</style>
</head>
<body id="background">
<div align="right"  class="loginbox">
<form method="post">
Username:<input type="text" placeholder="Username" class="login" name="txtUsername" /><br />
Password:&nbsp;<input type="password" placeholder="Password" class="login" name="txtPassword" /><br />
<input type="submit" class="btn-info" value="Login" name="btnLogin" id="btnLogin"/>
</form>
</div>
</body>
</html>