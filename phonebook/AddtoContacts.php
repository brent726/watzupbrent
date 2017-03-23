<?php
// Create connection
$link = mysqli_connect("localhost", "root", "", "phonebook");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$firstname =  mysqli_real_escape_string($link, $_POST["firstname"]);
$middlename =  mysqli_real_escape_string($link, $_POST["middlename"]);
$lastname = mysqli_real_escape_string($link, $_POST["lastname"]);
$gender = mysqli_real_escape_string($link,$_POST["gender"]);
$age = mysqli_real_escape_string($link,$_POST["age"]);
$birthday = $_POST["birthday"];
$contactnum = $_POST["contact"];
$color= $_POST["color"];
$email = mysqli_real_escape_string($link,$_POST["email"]);
$about = mysqli_real_escape_string($link,$_POST["about"]);
// attempt insert query execution
$sql = "INSERT INTO phonebook (fname,mname,lname,gender,bday,email,contact,color,about) 
		VALUES ('$firstname','$middlename','$lastname','$gender','$birthday','$email','$contactnum','$color','$about')";

if(mysqli_query($link, $sql)){
    echo '<script language="javascript">';
    echo 'alert("Inserted Succesfully")';
    echo '</script>';
    sleep(1);
    header("location: index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>