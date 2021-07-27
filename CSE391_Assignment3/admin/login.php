<?php 


$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'webpage');

if(isset($_POST['user'])){

    $uname=$_POST['user'];
    $password=$_POST['password'];

    $sql="select * from admin where username='".$uname."'AND password='".$password."' limit 1";

    $result=mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo " You Successfully Logged in";
        exit();
    }
    else{
        echo " You Entered Incorrect Password";
        exit();
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Admin</title>
</head>
<body>
<div class="container">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login</h2>
                <form action="validation.php" method="post">
                    <div class= form-group>
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class= form-group>
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>
            </div>    
</body>
</html>
