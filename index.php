<?php
require 'connect.php';

if(isset($_POST['login-submit']))
{
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $sql = "SELECT * FROM user WHERE Email='".$email."' AND Password='".$pwd."'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['user_email']=$_POST['email'];
        $_SESSION['user_password']=$_POST['password'];          
        $_SESSION['status']="loggedin";
         
        header("location:dashboard.php");    
    }
    else
    {
        echo "<script type='text/javascript'>alert('Invalid Login Credentials'); window.location='index.php'</script>"; 
    }   
 }


if(isset($_POST['register-submit']))
{
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['userEmail'];
    $p1=$_POST['userPassword'];
    $p2=$_POST['confirm-password'];
    if($p1===$p2)
    {
        $check = "SELECT Email FROM user where Email='".$email."'";
        $result = mysqli_query($conn, $check);
        if (mysqli_num_rows($result) > 0) 
        {
            echo "<script type='text/javascript'>alert('User already exists! Please login to continue.'); window.location='index.php'</script>";
        }
        else
        {
            $sql = "INSERT INTO user (FirstName,LastName,Email,Password) VALUES ('".$fname."','".$lname."','".$email."','".$p1."')";
            if ($conn->query($sql) === TRUE) 
            {
                echo "<script type='text/javascript'>alert('Registration Successful!'); window.location='login.php'</script>";
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    else
    {
        echo "<script type='text/javascript'>alert('Passwords do not match.'); window.location='index.php'</script>";
    }
}
mysqli_close($conn);
?>

