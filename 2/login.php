<?php 
        require('config.php');
        session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<?php 
                if(isset($_POST['login'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $sql = "SELECT * FROM users WHERE user = '$user' and pass = '$pass'";
                    $result = $conn->query($sql);
                    $check = $result->num_rows;
                    if($check == 1){
                        $_SESSION['user'] = $user;
                    }else{
                        echo "<div class='alert alert-danger text-center' role='alert'>
                        Sai tai khoan hoac mat khau !
                    </div>";
                    }
                   
                }
            ?>
    <div class="header text-center">
        <?php 
            if(isset($_SESSION['user'])){
                echo "<h3>Welcome ".$_SESSION['user']."</h3>";
            }else{
                echo "<h3>Login</h3>";
            }
        ?>
        <hr>
    </div>
    <div class="container">
        <div class="row">   
            <div class="col-lg-8 offset-lg-2">
          
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username : </label>
                        <input type="text" name="user" class="form-control" placeholder="Nhap tai khoan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password : </label>
                        <input type="password" name="pass" class="form-control" placeholder="Mat khau">
                    </div>
                    <div class="bl text-center">
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>