<?php include ('contactserver.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online diary</title>
    <?php require_once 'helper/script_style.php';?>
    
</head>
<body class="bg">
<?php include 'components/header.php';?> 
<div class="background">
        <div class="bgimg">
                <div class="header">
                    <h3>Contact us</h3>
                </div>
    <form action="#" id="login-form" method="POST">
    <div class="form-group">
            <p class="label">
                <span>Name</span>
                <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Enter Name" value="" required>
            </p>
        </div>
        <div class="form-group">
            <p class="label">
                <span>Email</span>
                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Enter Email" value="" required>
            </p>
        </div>
        <div class="form-group">
            <p class="label">
                <span>Mobile no.</span>
                <input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Enter Mobile no." value="" required>
            </p>
        </div>
        <div class="form-group">     
            <input type="submit" name="send-submit" class="btn btn-outline-primary" id="send-submit" tabindex="4" class="form-control btn btn-send" value="Send">
        </div>
    </form> 
</div>
    <?php include 'components/footer.php';?> 
</body>
</html>