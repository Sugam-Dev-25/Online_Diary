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
                    <h3>Register</h3>
                </div>
<form action="#" id="register-form" method="POST">
        <div class="form-group">
            <p class="label">
                <span>First Name</span>
                <input type="text" name="firstname" id="firstname" tabindex="1" class="form-control" placeholder="Enter First Name" value="" required>
            </p>
        </div>
        <div class="form-group">
            <p class="label">
                <span>Last Name</span>
                <input type="text" name="lastname" id="lastname" tabindex="1" class="form-control" placeholder="Enter Last Name" value="" required>
            </p>
        </div>
        <div class="form-group">
            <p class="label">
                <span>Email</span>
                <input type="email" name="userEmail" id="userEmail" tabindex="2" class="form-control" placeholder="Enter Email" value="" required>
            </p>
        </div>
        <div class="form-group">
            <p class="label">
                <span>Password</span>
                <input type="password" name="userPassword" id="userPassword" tabindex="2" class="form-control" placeholder="Enter Password" required>
            </p>
        </div>
        <div class="form-group">
            <p class="label">
                <span>Re-enter Password</span>
                <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
            </p>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-outline-success" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register">
        </div>
      </form>
</div>
<?php include 'components/footer.php';?>
      </body>
      </html>