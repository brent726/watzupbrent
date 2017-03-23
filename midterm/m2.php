<!DOCTYPE HTML>
<html lang="en-US">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
          <title> Midterm 2 Morse Code</title>
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

			<form action="" method= "POST">
		  Enter sentence :<br>
		  <input type="text" name="sentence" required> </input>
		  <br><br>
		  <input type="submit" value="Submit" required></input>
	</form> 
	<?php

		if($_POST)
		{
			$sentence 	= strtoupper ($_POST['sentence']);
			$Morse ='';
			$size= strlen($sentence);

			$arr1 = str_split($sentence);
			for($i=0;$i< $size;$i++)
			{
			switch($arr1[$i]){

				case 'A': $Morse = $Morse.'.- ';break;
				case 'B': $Morse = $Morse."-... ";break;
				case 'C': $Morse = $Morse.'-.-. ';break;
				case 'D': $Morse = $Morse.'-.. ';break;
				case 'E': $Morse = $Morse.'. ';break;
				case 'F': $Morse = $Morse.'..-. ';break;
				case 'G': $Morse = $Morse.'--. ';break;
				case 'H': $Morse = $Morse.'.... ';break;
				case 'I': $Morse = $Morse.'.. ';break;
				case 'J': $Morse = $Morse.'.--- ';break;
				case 'K': $Morse = $Morse.'-.- ';break;
				case 'L': $Morse = $Morse.'.-.. ';break;
				case 'M': $Morse = $Morse.'-- ';break;
				case 'N': $Morse = $Morse.'-. ';break;
				case 'O': $Morse = $Morse.'--- ';break;
				case 'P': $Morse = $Morse.'.--. ';break;
				case 'Q': $Morse = $Morse.'--.- ';break;
				case 'R': $Morse = $Morse.'.-. ';break;
				case 'S': $Morse = $Morse.'... ';break;
				case 'T': $Morse = $Morse.'- ';break;
				case 'U': $Morse = $Morse.'..- ';break;
				case 'V': $Morse = $Morse.'...- ';break;
				case 'W': $Morse = $Morse.'.-- ';break;
				case 'X': $Morse = $Morse.'-..- ';break;
				case 'Y': $Morse = $Morse.'-.-- ';break;
				case 'Z': $Morse = $Morse.'--.. ';break;
				case ' ': $Morse = $Morse.'|';break;
				case '0': $Morse = $Morse.'----- ';break;
				case '1': $Morse = $Morse.'.---- ';break;
				case '2': $Morse = $Morse.'..--- ';break;
				case '3': $Morse = $Morse.'...-- ';break;
				case '4': $Morse = $Morse.'....- ';break;
				case '5': $Morse = $Morse.'..... ';break;
				case '6': $Morse = $Morse.'-.... ';break;
				case '7': $Morse = $Morse.'--... ';break;
				case '8': $Morse = $Morse.'---.. ';break;
				case '9': $Morse = $Morse.'----. ';break;
				default:break;
				}
			}

			echo "<br><br>Sentence : $sentence<br><br>";
			echo "Equivalent morse code :<br><br> $Morse <br><br>";

			}
	?>

 
	<div id="site-generator">
            Copyright 2016 - Brent Matthew Yap
          </div>
	</body>
</html>
