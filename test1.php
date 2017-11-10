<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Center Family Test Page</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--
<div id="content">
<div id="recent-posts">
      <h3 class="title">Recent Posts</h3>
</div>
</div>
-->

<div id="content">
  <div id="charity">
      <h3 class="title">NWA ALS Foundation</h3>
      <ul>
        <?php
	include('includes/db.php');
	$query = "SELECT * FROM food WHERE food_type='Dessert'";
	$result = mysql_query($query)
		or die ("query sucks");
	while($row = mysql_fetch_array($result))
	{
                extract($row);
                echo "<li><strong><a href='food-detail.php?id=$id'>$food_name</a> | Need: ($need)</strong><br>";
                echo "<small>Brought By: No One Yet</small></li>";
        }
        ?>
        <li><strong>Bring Other Dessert</strong><br>
        <input type="text" name="otherdessert"> <br> <input type="submit" name="subotherdessert" value="Submit Dessert"></li>
      </ul>
    </div>
</div>
</body>
</html>
