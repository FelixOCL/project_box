<?Php

#	include('./php/connect.php');

	$myBox = $_GET['txtBox'];	
	$myDetail = $_GET['txtDetail'];

	$sql = "INSERT INTO pbo_projects('pbo_title', 'pbo_description') 
			  VALUES ('$myBox', '$myDetail')";
			  
	if(mysqli->query($sql) === TRUE)
	{
		mysqli->close($link);
		echo "1";
	}
	else
	{	
		mysqli->close($link);
		echo "0";
	}


?>