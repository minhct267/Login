<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="loginbox">
        <h1>Login Here</h1>
        <form name="frmLogin" id="frmLogin" method="post" action="" >
            <p>Username</p>
            <input type="text" name="username" id="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <input type="submit" name="btnLogin" id="btnLogin" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>
<?php
if(isset($_POST['btnLogin'])){
    $username = $_POST['username']
    $password = $_POST['password']
    if($username=='minhct267' and $password=='Minhct267')
    {
        echo 'Dang nhap thanh cong'
    } else echo 'Dang nhap that bai'
}
?>
</div>

</body>
</html>
