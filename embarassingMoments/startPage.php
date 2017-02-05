<html>

	<head>
			<title> Embarassing Moments </title>
	</head>

<body>
	<?php

		$ans=@$_POST['answer'];
		$submit=@$_POST['Submit'];
		echo	"Guess the riddle right: <br>";
		echo    "See H side by side you are inside";
		
		if(strtolower($ans)=="church")
		{
				session_start();
				$_SESSION['username']="watzupbrent";
				$_SESSION['password']="brent";
				
				echo "<br>";
				echo "session is set";
				

				if(isset($_SESSION['username']))
				{
					echo "<br>";
					print_r($_SESSION);
				}
				header("Location:p1.php");
		}
		else 
		{
				if($_POST)
				{
					echo "<br>";
					echo "YOUR ANSWER IS WRONG";
				}
				
		}
	?>
	<form action="" method="POST">
		<br><br>
		<input type="text" name="answer" required></input>
		<br><br>
		<input type="submit" name="Submit" value="ANSWER"required></input>
	</form>
	
	

</body>
</html>



