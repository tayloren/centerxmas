<?php
include('includes/db.php');
$query = "SELECT * FROM meat";
$result = mysql_query($query)
	or die ("query sucks");
	while($row = mysql_fetch_array($result))
	{
	extract($row);
	echo "$item<br>";
	echo "other stuff here<br>";
	}

?>
