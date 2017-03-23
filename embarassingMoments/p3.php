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
    <div class="entry-content" >
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

  <body>

    <form action="destroy.php" method="POST">
      <div align="center">
       <input type="submit" name="destroy" value="GET ME OUT"></input>
      </div>
    </form>

    <?php 
      $submit=@$_POST['destroy'];
    ?>

    <div class="clear"></div>

    </div>
    <!-- .entry-content -->
    
  </article>
  <!-- end article -->
  </div><!-- #content -->
</div><!-- #primary -->
    <div class="row-text-center pad-top" align="center">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <img src="3a.jpg" class="img=responsive" alt=""/>
      </div>
    </div>
    <br>
    <div align="center">
      <a href="p1.php" class="button">1</a>
      <a href="p2.php" class="button">2</a>
      <a href="p3.php" class="button">3</a>
    </div>
    <div id="site-generator">
            Copyright 2016 - Brent Matthew Yap
          </div>
  </body>
</html>
