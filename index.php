<?php
$error ='';

if(isset($_POST['submit'])){
if(empty($_POST['name']) || empty($_POST['pass'])) {
	$error = "User or Password is invalid";
}
else{
	header("location:home.php");
}
}
?>
<!Doctype html>
<html>
	<head>
		<title>index</title>
	</head>
	
	<body>
		<fieldset>
			<h2>Login</h2>
			<form method="POST">
			<h4>UserName:<h4>
			<input type="text" name="name" placeholder="Name">
			
			<h4>Password:<h4>
			<input type="text" name="pass" placeholder="Password">
			<br><br>
			
			<button type="submit" name="submit">Login</button>
		
			
			</form>
		<span>
		<?php 
		
		echo $error;
		?>
		</span>
		</fieldset>
	</body>







</html>

