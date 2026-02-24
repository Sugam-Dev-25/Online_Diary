<?php
require 'connect.php';
session_start();
if($_SESSION['status']=='loggedin')
{
	$email = $_SESSION['user_email'];    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online diary</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php require_once 'helper/script_style.php'; ?>
</head>
<?php include 'navbar.php';?>
<body class="db" onload="enableEditMode()">

<div class="left col-md-11">
	<?php
	if(isset($_GET["viewBtn"]))
	{
		$postid = $_GET["noteID"];
		$sqlquery = "SELECT * FROM usernote WHERE noteId =".$postid;
		$res = mysqli_query($conn,$sqlquery);         
    	$data = mysqli_fetch_assoc($res); 
    	$originalDate = $data['uploadDate'];
		$newDate = date("d-m-Y h:i a", strtotime($originalDate));  
		$title = $data['title'];	
		$txt = $data['noteBody'];
		echo '<h2 class="pageTitle">'.$title.'</h2>';
		echo '<p class="subtitle">Created on '.$newDate.'</p>';
		echo '<div class="form-control viewtab"><div class="viewtabContent"><div class="viewText">'.$txt.'</div></div></div>';
		echo '<form action="#" method="GET">
				<input type="hidden" name="deletenoteID" value="'.$postid.'">
				<input type="submit" name="deleteBtn" value="Delete this note" class="viewBtn" id="delBtn">
				</form>';
	}
	if(isset($_GET["deleteBtn"]))
	{
		$post = $_GET["deletenoteID"];
		$sqlquery = "DELETE FROM usernote WHERE noteID =".$post;
		$res = mysqli_query($conn,$sqlquery);  
		if($res)
		{
			 echo "<script type='text/javascript'>alert('Note Deleted Succesfully!'); window.location='dashboard.php'</script>";
		}
	}
	?>
	
</div>
<div class="right col-md-1">
	<p class="ml15">Welcome 
   	<?php                                                          	
		$email=$_SESSION['user_email'];
    	$sql="SELECT FirstName FROM user WHERE Email='".$email."'";
    	$fname = mysqli_query($conn,$sql);                                
    	while ($row=$fname->fetch_assoc()) {                            	
			echo $row['FirstName'];
  		}                                                   
	?>
	</p>
	
	<a class="logoutBtn" href="welcome.php">Logout</a>

</div>
<?php include 'components/footer.php';?>
</body>
</html>
<script src="javascript/script.js"></script> 

<?php
}
else
{
  header("location:index.php"); 
}

mysqli_close($conn);
?>