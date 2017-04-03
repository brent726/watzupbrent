<?php
// Create connection
$link = mysqli_connect("sql311.byethost7.com","b7_19332195","brentmatthewyap726","b7_19332195_phonebook");
//$link = mysqli_connect("localhost","root","","phonebook");
//include 'db.php';
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$ID=  mysqli_real_escape_string($link, $_POST["ID"]);
$firstname =  mysqli_real_escape_string($link, $_POST["firstname"]);
$middlename =  mysqli_real_escape_string($link, $_POST["middlename"]);
$lastname = mysqli_real_escape_string($link, $_POST["lastname"]);
$gender = mysqli_real_escape_string($link,$_POST["gender"]);
$age = $_POST["age"];
$birthday = $_POST["birthday"];
$contactnum = $_POST["contact"];
$color= $_POST["color"];
$email = mysqli_real_escape_string($link,$_POST["email"]);
$about = mysqli_real_escape_string($link,$_POST["about"]);
// attempt insert query execution
$sql = "UPDATE phonebook set fname='$firstname',mname='$middlename', lname='$lastname',gender='$gender',age='$age',bday='$birthday',contact='$contactnum', color='$color',email='$email',about='$about' where ID='$ID'";

if(mysqli_query($link, $sql)){

    header("location: index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    header("location : index.php");
}

mysqli_close($link);
?>