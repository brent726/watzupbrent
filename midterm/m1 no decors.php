<html>
<head>
	<title> ME1 </title>
</head>
<body>
	<form action="" method="POST">
		Enter 4 digit number : <input type="text" name="number" ><br><br>
		<input type="submit">
	</form>
</center>
</body>
</html>
<?php
	if($_POST)
	{
	$number = $_POST["number"];
	$result = array_unique(permute($number));
	sort($result);
	$arrlength = count($result);
	for($x = 0; $x < $arrlength; $x++) {
		if($number == $result[$x])
		{
			if($x == $arrlength-1)
			{
				echo $result[$x];
			}
			else
			{
			echo $result[$x+1];
			}
		}
	}
	
	}

?>
<?php
function permute($str) {
/* If we only have a single character, return it */
if (strlen($str) < 2) 
{
return array($str); 
} 
/* Initialize the return value */ 
$permutations = array(); 
/* Copy the string except for the first character */ 
$tail = substr($str, 1); 
/* Loop through the permutations of the substring created above */ 
foreach (permute($tail) as $permutation) { 
	/* Get the length of the current permutation */ 
	$length = strlen($permutation); 
	/* Loop through the permutation and insert the first character of the original string between the two parts and store it in the result array */ 
	for ($i = 0; $i <= $length; $i++) { 
		$permutations[] = substr($permutation, 0, $i) . $str[0] . substr($permutation, $i); 
	} 
	}
		/* Return the result */ 
		return $permutations; 
	} 
?>