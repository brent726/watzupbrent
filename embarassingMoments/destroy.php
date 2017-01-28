<?php
	
	session_start();
	echo "deleted session";
	session_destroy();
	sleep(1);
	header("Location:startPage.php");

?>