<?php 
	require '../lib/user_service.php';
	if(isset($_POST["Submit"])){
		$conn = db_connect();
		$record = getuser($conn, escapeParam($conn, $_POST["User"]), escapeParam($conn, $_POST["Pass"]));
		if($record == null){
			echo ("<p style=\"'color: red;'\"> Tai khoan hoac mat khau khong dung</p>");
		}else{
			echo("co ban ghi");
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#login_form{
			position: absolute;
			top:0;
			left: 0;
			right: 0;
			bottom: 0;
			width: 400px;
			height: 200px;
			margin: auto;
			border: solid 1px #ababab;
		}
		#header_form{
			height: 50px;
			background-color: #bababa;
			
		}
	</style>
</head>
<body>
<div id="login_form">
 	<div id="header_form">
 		Login
 	</div>
 	<div>
 		<table>
 			<form method="post">
 			<tr>
 			<td>
 				<label>User</label>
 			</td>
 			<td>
 				<input type="text" name="User">
 			</td>
 			</tr>
 			<tr>
 			<td>
 				<label>Password</label>
 			</td>
 			<td>
 				<input type="password" name="Pass">
 			</td>
 			</tr>
 			<tr>
 			<td>
 				<input type="button" name="Register" value="Register">
 			</td>
 			<td>
 				<input type="submit" name="Submit">
 			</td>
 			</tr>
 	</form>
 </table>
 	</div>
 </div>
</body>
</html>