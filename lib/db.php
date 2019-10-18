
<?php 
	require('conf.php');

	function db_connect(){
		global $conf;
		$conn = mysqli_connect($conf["host"], $conf["user"], $conf["password"], $conf["db"]) or die("cannot connect to db: " . mysqli_connect_error());
		mysqli_set_charset($conn, "utf8");

		return $conn;
	}
	
	function db_query($conn, $query){
		$result = mysqli_query($conn, $query);
		if(!$result){
			die("Error excute query: " . mysqli_error($conn));
		}
		return $result;
	}

	function db_single($conn, $query){
		$result = mysqli_query($conn, $query);
		//$row = mysqli_fetch_assoc($result);
		return $result;
	}

	function db_close($conn){
		mysqli_close($conn);
	}

	function escapeParam($conn, $value){
		return mysqli_real_escape_string($conn, $value);
	}

 ?>