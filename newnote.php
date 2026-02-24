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
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php require_once 'helper/script_style.php'; ?>
</head>

<body class="db" onload="enableEditMode()">
<?php include 'navbar.php';?>
<div class="left col-md-11">
	<h2 class="pageTitle">Add Your Memory</h2>
	<form action="#" method="POST" class="newNote" id="mainForm">
		<div class="form-group topMenu">
			<input type="text" name="textTitle" id="titleBtn" placeholder="Enter Title" class="form-control"></input>
			<input type="button" onclick="iImage()" value="&#xf03e;" class="fas fa-input" id="addImgBtn">
		</div>

		<textarea style="display:none;" name="TextArea" id="TextArea" cols="100" rows="14"></textarea>
		<iframe src="" name="richTextField" class="iframe form-control"></iframe>
		

		<div class="form-group bottomBtns">
			<a href="dashboard.php" class="btn cancelBtn">Cancel</a>
			<input type="submit" name="createNote" id="createNote" class="btn btn-primary" value="Save" onclick="getText()">
		</div>
	</form>
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

</body>
<script type="text/javascript">
	function enableEditMode()
	{
		richTextField.document.designMode="On";
	}
	function iImage(){
	var imgSrc = prompt('Enter image url', '');
    if(imgSrc != null){
        richTextField.document.execCommand('insertimage', false, imgSrc); 
    }
}
function getText(){
	var theForm = document.getElementById("mainForm");
	theForm.elements["TextArea"].value = window.frames['richTextField'].document.body.innerHTML;
	theForm.submit();
}
</script>
</html>
<script src="javascript/script.js"></script> 

<?php
}
else
{
  header("location:index.php"); 
}
if(isset($_POST["createNote"]))
{
	$title = $_POST["textTitle"];
	$txt = $_POST["TextArea"];
	$date = date("Y/m/d H:i");
	$sqlquery = "INSERT INTO userNote (email,uploadDate,title,noteBody) VALUES ('".$email."','".$date."','".$title."','".$txt."')";
	if ($conn->query($sqlquery) === TRUE) 
    {
        echo "<script type='text/javascript'>alert('Note Saved!'); window.location='dashboard.php'</script>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
mysqli_close($conn);
?>