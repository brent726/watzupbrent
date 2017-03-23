<?php
// Create connection
$link = mysqli_connect("localhost", "root", "", "phonebook");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

  



// Escape user inputs for security
$id = $_POST["id"];
$firstname =  mysqli_real_escape_string($link, $_POST["firstname"]);
$lastname = mysqli_real_escape_string($link, $_POST["lastname"]);
$gender = mysqli_real_escape_string($link,$_POST["gender"]);
$birthday = $_POST["birthday"];
$contactnum = $_POST["contact"];
$email = mysqli_real_escape_string($link,$_POST["email"]);
$about = mysqli_real_escape_string($link,$_POST["about"]);
// attempt insert query execution
$sql = "UPDATE contactlist set fname='$firstname',lname='$lastname',gender='$gender',bday='$birthday',contact='$contactnum',email='$email',about='$about' where id='$id'";

if(mysqli_query($link, $sql)){

    header("location: index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    header("location : index.php");
}

mysqli_close($link);
?>