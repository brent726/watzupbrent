<!DOCTYPE HTML>
<html lang="en-US">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
          <title> Midterm 1 HDD</title>
          <!--for background-->
          <link rel="icon" href="../style/images/brent.jpg"/>
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
	  <form action="" method="POST">

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
	    <header class="entry-header">
	    
	    </header>
	    <!-- .entry-header -->
	    
	    <div class="entry-content">

		<form action="" method="POST">
			</center>
				Enter 4 digit number : <input type="text" name="number" ><br><br>
				<input type="submit">
			</center>
		</form>
		<?php

			echo "<br><br>The next number is: ";
			if($_POST)
			{
			$number = $_POST["number"];
			$result = array_unique(permute($number));
			sort($result);
			$arrlength = count($result);
			for($x = 0; $x < $arrlength; $x++) {
					if($number == $result[$x])
					{
						if($x == $arrlength-1)
						{
							echo $result[$x];
						}
						else
						{
							echo $result[$x+1];
						}
					}
				}
			
			}

		?>
		<?php
			function permute($str) {
			/* If we only have a single character, return it */
			if (strlen($str) < 2) 
			{
				return array($str); 
			} 
			/* Initialize the return value */ 
			$permutations = array(); 
			/* Copy the string except for the first character */ 
			$tail = substr($str, 1); 
			/* Loop through the permutations of the substring created above */ 
			foreach (permute($tail) as $permutation) { 
				/* Get the length of the current permutation */ 
				$length = strlen($permutation); 
				/* Loop through the permutation and insert the first character of the original string between the two parts and store it in the result array */ 
				for ($i = 0; $i <= $length; $i++) { 
					$permutations[] = substr($permutation, 0, $i) . $str[0] . substr($permutation, $i); 
				} 
				}
					/* Return the result */ 
					return $permutations; 
				} 
		?>

	 <div class="clear"></div>

  </div>
    <!-- .entry-content -->
    
  </article>
  <!-- end article -->
  

  
  </div><!-- #content -->
</div><!-- #primary -->


</div><!-- #main -->
	<div id="site-generator">
            Copyright 2016 - Brent Matthew Yap
          </div>
	</body>
</html>
