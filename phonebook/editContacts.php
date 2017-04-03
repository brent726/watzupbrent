<html>
<title> phonebook</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="icon" href="../style/images/brent.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css" media="all" />
<head>
  <center>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2, user-scalable=no" />
          <title>PHONEBOOK</title>
  </center>
</head>

 <div id="page" class="hfeed">
      <div id="wrapper">
    
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
						$link = mysqli_connect("sql311.byethost7.com","b7_19332195","brentmatthewyap726","b7_19332195_phonebook");
						$idErr="";

						if($link === false)
						{
						die("ERROR: Could not connect. " . mysqli_connect_error());
						}
						$ID= $_POST['ID']; 
						$sql = "SELECT * from phonebook WHERE ID =".$ID;
						$result = mysqli_query($link, $sql);
						$row = mysqli_fetch_array($result);
					?>
				
				<div class="modal-body">
					<form action="updateContacts.php" method="post">
						<input type="hidden" name="ID" value = <?php echo $ID ?>><br>
						<input type="text" name="firstname" placeholder="firstname" class="form-control" value = <?php echo "\"".$row['fname']."\"" ?>><br>
						<input type="text" name="middlename" placeholder="middlename" class="form-control" value = <?php echo "\"".$row['mname']."\"" ?>><br>
						<input type="text" name="lastname" placeholder="lastname" class="form-control" value = <?php echo "\"".$row['lname']."\"" ?>><br>
						<select type="combo" name="gender" placeholder="gender" class="form-control">
							<option value="Male" <?php if($row['gender'] == "M") echo "selected" ?>>Male</option>
							<option value="Female" <?php if($row['gender'] == "F") echo "selected" ?>>Female</option>
						</select> <br>
						<input type="number" name="age" placeholder="age" class="form-control" value = <?php echo "\"".$row['age']."\"" ?>><br>
						Birthday<input type="date" name="birthday" class="form-control" value = <?php echo "\"".$row['bday']."\"" ?>><br>
						<input type="email" name="email" placeholder="email address" class="form-control" value = <?php echo "\"".$row['email']."\"" ?>><br>
						<input type="number" name="contact" placeholder="contact #" class="form-control" value = <?php echo "\"".$row['contact']."\"" ?>><br>
						Color: 
						<select type="dropdown" name="color" class="form-control">
							<option value="Blue" <?php if($row['color'] == "Blue") echo "selected" ?>>Blue</option>
							<option value="Green" <?php if($row['color'] == "Green") echo "selected" ?>>Green</option>
							<option value="Pink" <?php if($row['color'] == "Pink") echo "selected" ?>>Pink</option>
							<option value="Red" <?php if($row['color'] == "Red") echo "selected" ?>>Red</option>
							<option value="Violet" <?php if($row['color'] == "Violet") echo "selected" ?>>Violet</option>
							<option value="Black" <?php if($row['color'] == "Black") echo "selected" ?>>Black</option>
						</select> 

						<label for="about">About:</label><br>
						<textarea class="form-control" rows="5" name="about" ><?php echo $row['about'] ?></textarea><br>
						<input class="btn btn-primary" name="submit" type="submit" value="Update Contact">
					</form>
					<a href="index.php" class="btn btn-info">Back</a>
				</div>
	<!-- end of dialog update -->

					
				</div>
			</div>
		</div>
		</div>


	</body>
<div id="site-generator">
            Copyright 2016 - Brent Matthew Yap
          </div>
  </body>

</html>