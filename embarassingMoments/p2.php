<?php

			session_start();

			$username=$_SESSION['username'];
			$password=$_SESSION['password'];
			if(isset($_SESSION['username'])){
				//print_r($_SESSION);
			}
			else{
				header("Location:startPage.php");
			}
		?>

<html>
	<head>
		<title>Embarassing Moments</title>
	</head>
	<body>
		<form action="destroy.php" method="POST">
			<input type="submit" name="destroy" value="GET ME OUT"></input>
		</form>

		<?php 
			$submit=@$_POST['destroy'];
		?>
		<img src="2a.jpg" class="img=responsive" alt=""/>
		<div class="row-text-center pad-top">
			<div class="col-md-4 col-sm-4 col-xs-12">
				
			</div>
		</div>
		<br>
		<a href="p1.php" class="button">1</a>
		<a href="p2.php" class="button">2</a>
		<a href="p3.php" class="button">3</a>
	</body>
</html>
