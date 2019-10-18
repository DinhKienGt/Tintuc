<?php 
	require 'db.php';

	function getuser($conn, $Nameuser, $pass){
		return db_query($conn, "SELECT * FROM `users` WHERE `UserName` LIKE '$Nameuser' AND `PassWord` LIKE '$pass'");
	}
 ?>