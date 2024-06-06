<?php

	session_start();

	if(isset($_SESSION["login"])){
		unset($_SESSION["login"]);
	}
	//some com a sessão
	session_destroy();
	header("location:login.php");

?>