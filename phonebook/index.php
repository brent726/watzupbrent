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
//$link = mysqli_connect("localhost","root","","phonebook");
$idErr="";
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * from phonebook";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
    	echo "<center>";
    	echo "<div class='well well-sm'>";
        echo "<table  class='table table-striped'>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>First name</th>";
                echo "<th>Middle name</th>";
                echo "<th>Last name</th>";
              	echo "<th>Gender</th>";
              	echo "<th>Age</th>";
              	echo "<th>Birth Date (yy/mm/dd)</th>";
              	echo "<th>Email</th>";
                echo "<th>Phone Number</th>";
                echo "<th>Favorite Color</th>";
                echo "<th>About</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            	echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['mname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['bday'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['contact'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
                echo "<td>" . $row['about'] . "</td>";
                echo "<td>
                
                  <form action=\"editContacts.php\" method=\"post\">
                  <input type=\"hidden\" name=\"ID\" value=\"".$row['ID']."\">
                  <input class=\"btn btn-success\" name=\"submit\" type=\"submit\" value=\"Update\">
                  </form>
                  </td>";

            echo "</tr>";
        }
        echo "</table></div></center>";

        // Close result set
        mysqli_free_result($result);
    } else{
        echo "<h2><center>No records on your database found.</h2></center>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);



if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["ID"])){
		$idErr ="id is required";
	}
}
?>


<center><br><br>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addlist">Add contact</button>
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#deletelist">Delete</button>

</center>

<!-- Adding dialog for adding to list -->
<div id="addlist" class="modal fade" role="dialog">
  <div class="modal-dialog">
     
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add to Contacts</h4>
      </div>
      <div class="modal-body">
        <form action="AddtoContacts.php" method="post">
           <input type="text" name="firstname" placeholder="firstname" class="form-control"><br>
           <input type="text" name="middlename" placeholder="middlename" class="form-control"><br>
           <input type="text" name="lastname" placeholder="lastname" class="form-control"><br>

            <select type="combo" name="gender" placeholder="gender" class="form-control">
				   <option value="Male">Male</option>
				   <option value="Female">Female</option>
		    </select> <br>
           <input type="number" name="age" placeholder="age" class="form-control"><br>
            Birthday<input type="date" name="birthday" class="form-control"><br>
            <input type="email" name="email" placeholder="email address" class="form-control"><br>
           <input type="number" name="contact" placeholder="contact #" class="form-control"><br>
           Color: 
            <select type="dropdown" name="color" placeholder="color" class="form-control">
				   <option value="Blue">Blue</option>
				   <option value="Green">Green</option>
				   <option value="Pink">Pink</option>
				   <option value="Red">Red</option>
				   <option value="Violet">Violet</option>
				    <option value="Violet">Black</option>
		    </select> 

           <label for="about">About:</label><br>
  		   <textarea class="form-control" rows="5" name="about"></textarea><br>
  		   <input class="btn btn-primary" name="submit" type="submit" value="Add Contact">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of dialog add -->



<!-- Dialog for deleting-->
<div id="deletelist" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete a contact</h4>
      </div>
      <div class="modal-body">
        <form action="deletecontact.php" method="post">
           <input type="int" name="ID" placeholder="Enter ID of contact to delete" class="form-control"><br>
           <input class="btn btn-primary" name="submit" type="submit" value="Delete">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end of dialog delete -->

<div id="site-generator">
            Copyright 2016 - Brent Matthew Yap
          </div>
  </body>

</html>