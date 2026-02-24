<?php include ('index.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Online diary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php require_once 'helper/script_style.php'; ?>
</head>
<body class="bg">
<?php include 'components/header.php';?> 
<div class="background">
        <div class="bgimg">
                <div class="header">
                    <h3>Login</h3>
                </div>
    <form action="#" id="login-form" method="POST">
        <div class="form-group">
            <p class="label">
                <span>Email</span>
                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Enter Email" value="" required>
            </p>
        </div>
        <div class="form-group">
            <p class="label">
                <span>Password</span>
                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Enter Password" required>
            </p>
        </div>
        <div class="form-group">     
            <input type="submit" name="login-submit" class="btn btn-outline-warning" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
        </div>
    </form> 
</div>
<?php include 'components/footer.php';?>
</body>
</html>