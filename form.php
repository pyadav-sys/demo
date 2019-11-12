<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type="text" name="fname">
	<input type="submit"  value="Click">
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	 $myname=$_POST["fname"];
	if(empty($myname)){
		echo "Name is empty";
	}else{
		echo "Your Name Is ".$myname;
	}
}

?>


</body>
</html>


