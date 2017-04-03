<?php
// Create connection
$link = mysqli_connect("sql311.byethost7.com","b7_19332195","brentmatthewyap726","b7_19332195_phonebook");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

  

// Escape user inputs for security
$contact_id = $_POST['ID']; 
// attempt insert query execution
$sql = "DELETE from phonebook WHERE ID = '$contact_id'";

if(mysqli_query($link, $sql)){

    header("location: index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    header("location : index.php");
}

mysqli_close($link);
?>