<!DOCTYPE html>
<html lang="" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>admin login</title>


</head>
<body>
<div class="header">
    <a class="arrow"href="home.html"> <img src="images/asianroots.png"width="20%" height="65px"> </a>
    <font style="float: right;margin-right: 40px;margin-top: 10px"><a class="sign"href="home.html"> go to Home</a></font>
   


</div>
 <div class="flower">
    <div class="form">
    <form method="post" action="admin_loginback.php">
<br>

        <label style="margin-left: 80px"> <b>User Name:
        </b>
        </label>
        <input type="text"  class="username" name="username_input"  placeholder="Enter user id">
        <br><br><br>
        <label style="margin-left: 80px"><b>Password:
        </b>
        </label>
        <input type="text" class="password" name="password_input" placeholder="Enter password">
        <br><br><br>
        <input type="submit"  class="loginbutton"  value="Login" ><br>
        <br>

    </form>
</div>
</div>
<div class="footer"></div>

<style type=text/css>

    body {
        background-color:rgba(140, 52, 52, 0.29);
        background-image: url("images/back1.jpg");

        background-size: cover;
        
    }
    .header{
        width: 100%;
        height: 50px;
        background-color:rgba(140, 52, 52, 0.29);
        margin-top: 0px;
    }

    .btn{

        height: 40px;
        width: 60px;
    }



.username {
       width: 300px;
        height: 30px;
        font-size: 15px;
        margin-top: 50px;
        margin-left: 0px;
        background-color: rgb(237, 245, 245);
        border: none;

 }
 .form{
    margin-left: 30%;
    margin-top: 9%;
    width: 40%;
    height: 60%;
    border: 2px solid white;
    background-color:rgba(140, 52, 52, 0.29);

 }


    .password{
       width: 300px;
       height: 30px;
        font-size: 15px;
       margin-top: 10px;
        margin-left: 10px;
        background-color: rgb(237, 245, 245);
        border: none;


   }
    .loginbutton{
        width: 70px;
        height: 40px;
        margin-top: 10px;
        margin-left: 165px;
        border-radius: 5px;
       background-color: indianred;

    }
    .loginbutton:hover{
        background-color: white;
    }
    .sign{
        text-decoration: none;
    }
    .footer{
    margin-top: 134px;
    width: 100%;
    height: 50px;
   background-color: rgba(140, 52, 52, 0.29); 
}

</style>

</body>
</html>

