<!DOCTYPE HTML>
<html lang="en-US">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
          <title> Watz Up Brent!</title>
          <!--for background-->
          <link rel="icon" href="style/images/brent.jpg"/>
          <link rel="stylesheet" type="text/css" href="style.css" media="all" />
          <!--link rel="stylesheet" type="text/css" href="style/css/view.css" media="all" />
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

			

			<p><strong>ROW: </strong></p>
			<input type="number" name ="row" required></input>
			<p><strong>COLUMN: </strong></p>
			<input type="number" name ="col" required></input>
			<input type="submit" name ="submit" value="Plot"required></input>
	</form>
	
	<?php
	@$rowValue=$_POST['row'];
	@$colValue=$_POST['col'];
	@$submit=$_POST['submit'];

	echo "<table border=10>";
	echo "<tr>";

	for($row=1;$row<=$rowValue;$row++)
	{
		

		for($col=1; $col<=$colValue;$col++)
		{

			if($col>$row)
			{
				if($bgcolorValue=='#FF0000')
				{
					$bgcolorValue='#00FF00';
				}
				else if($bgcolorValue=='#00FF00')
				{
					$bgcolorValue='#FF0000';
				}
				$mul=$col*$row;
					echo "<td bgcolor=$bgcolorValue>$mul</td>";
			}
			else if($col==$row)
			{

				if(($row*$col%2)==0)
				{
					$bgcolorValue='#FF0000';
				}
				else 
				{
					$bgcolorValue='#00FF00';
				}
				for($tempCol=1;$tempCol<=$col;$tempCol++)
				{
					$mul=$tempCol*$row;
					echo "<td bgcolor=$bgcolorValue>$mul</td>";
				}
				
			}	
		}
		echo "</tr>";
	}
	echo "</table>";
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