<!DOCTYPE HTML>
<html lang="en-US">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
          <title> Embarrassing Moments</title>
          <!--for background-->
          <link rel="icon" href="../style/images/brent.jpg"/>
          <!--for formatting and everything else-->
          <link rel="stylesheet" type="text/css" href="../style.css" media="all" />
          <!--link rel="stylesheet" type="text/css" href="style/css/view.css" media="all" />
          <!--for nav bar-->
          <!--link rel="stylesheet" type="text/css" href="style/type/marketdeco.css" media="all" />
          <!--for intro text font-->
          <link rel="stylesheet" type="text/css" href="../style/type/merriweather.css" media="all" />

      </head>

<body>
      <div id="page" class="hfeed">
      <div id="wrapper">
      <header id="branding" role="banner">
      <img src="../style/images/skyline.jpg" alt="skyline" />
        <nav id="access" class="access" role="navigation">
              <div id="menu" class="menu">
              	<ul id="tiny">
              	<li><a href="../index.html">HOME</a>
      				<li><a href="../profile.html">PORTFOLIO</a></li>
      				<li><a href="../schedule.html">SCHEDULE</a></li>
              		<li><a href="../activities.html">ACTIVITIES</a></li>
      			</ul>
      		</div>
        </nav>
      </header>
      <div id="main">
      <div id="primary">
  	<div id="content" role="main">

  	 <!-- begin article -->
    <article class="page hentry">
    <!-- .entry-header -->
    <div class="entry-content" align=center>
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
	</div>
	<br>
	<div id="site-generator">
            Copyright 2016 - Brent Matthew Yap
          </div>
	</body>
</html>



