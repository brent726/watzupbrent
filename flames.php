<!DOCTYPE HTML>
<html lang="en-US">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
          <title> Watz Up Brent!</title>
          <!--for background-->
          <link rel="icon" href="style/images/brent.jpg"/>
          <link rel="stylesheet" type="text/css" href="style.css" media="all" />
          <link rel="stylesheet" type="text/css" href="style/css/view.css" media="all" />
          <!--for nav bar-->
          <!--link rel="stylesheet" type="text/css" href="style/type/marketdeco.css" media="all" />
          <!--for intro text font-->
          <link rel="stylesheet" type="text/css" href="style/type/merriweather.css" media="all" />

      </head>

	<body>

	<div id="page" class="hfeed">
      <div id="wrapper">
      <header id="branding" role="banner">


       <img src="style/images/skyline.jpg" alt="skyline" />
       
        <nav id="access" class="access" role="navigation">
              <div id="menu" class="menu">
              	<ul id="tiny">
      				<li><a href="index.html">HOME</a>
      				<li><a href="profile.html">PORTFOLIO</a></li>
      				<li><a href="schedule.html">SCHEDULE</a></li>
              <li><a href="activities.html">ACTIVITIES</a></li>
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

			<p><strong>Boy: </strong></P>
			<input type="text" name ="name1" required></input>
			<p><strong>Girl: </strong></P>
			<input type="text" name ="name2" required></input>
			<input type="submit" name ="submit" required></input>
	</form>
	
	<?php
		@$name1=$_POST['name1'];
		@$name2=$_POST['name2'];
		@$submit=$_POST['submit'];

		//$flames=array(f,l,a,m,e,s);

		$name1=strtolower($name1);
		$name2=strtolower($name2);
		$tempName1=$name1;
		$tempName2=$name2;
		for($i=0;$i<strlen($name1);$i++)
		{
			for($j=0;$j<strlen($name2);$j++)
			{
				if($tempName1[$i]==$tempName2[$j]&&$tempName1[$i]!=' ')
				{
					$name1[$i]=$name2[$j]='/';
				}
			
			}

		}
		$count=0;
		
		for($i=0;$i<strlen($name1);$i++)
		{
				if($name1[$i]=='/')
				{
					$count++;
				}
		}

		for($j=0;$j<strlen($name2);$j++)
		{
				if($name2[$j]=='/')
				{
					$count++;
				}
		}
		

		$flameCount=$count%6;

		switch($flameCount)
		{
			case 0: $status="SWEETHEARTS";
			break;
			case 1: $status="FRIENDS";
			break;
			case 2: $status="LOVERS";
			break;
			case 3: $status="ADMIRERS";
			break;
			case 4: $status="MARRIED";
			break;
			case 5: $status="ENEMIES";
			break;
		}
		if($_POST)
		{
				
				echo "<br><strong>status: $status</strong>";
		}
		
		
	
	?>

    

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