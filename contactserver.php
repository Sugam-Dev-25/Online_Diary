<?php
require 'connect.php'; 

if(isset($_POST['send-submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
       {
            $sql = "INSERT INTO contact (name,email,mobile) VALUES ('".$name."','".$email."','".$mobile."')";
            if ($conn->query($sql) === TRUE) 
            {
                echo "<script type='text/javascript'>alert('send Successful!'); window.location='contact.php'</script>";
            } 
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

}
mysqli_close($conn);
?>