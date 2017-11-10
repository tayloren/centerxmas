<?php
//require_once('../../lib/connections/db.php');
//include('../../lib/functions/functions.php');

//checkLogin('2');

//$getuser = getUserRecords($_SESSION['user_id']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Center Family {event}</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1>Food List</h1>
</div>
<div id="pages">
  <ul>
    <li> <a id="page1" href="index.php">home</a></li>
    <li class="active"><a id="page2" href="food-list.php">Food List</a></li>
    <li><a id="page3" href="charity-list.php">Charity List</a></li>
    <li><a id="page4" href="event-news.php">Event News</a></li>
    <li><a id="page5" href="contact.php">Contact</a></li>
  </ul>
</div>
<div id="content">
  <div id="recent-posts">
      <h3 class="title">Desserts</h3>
      <ul>
        <?php
        include('includes/db.php');
        $query = "SELECT * FROM food WHERE food_type='Dessert'";
        $result = mysql_query($query)
                or die ("query sucks");
        while($row = mysql_fetch_array($result))
        {
                extract($row);
                echo "<li><strong><a href='pinky-swear.php?id=$id'>$food_name</a></strong><br>";
                echo "<small>Brought By: <a href='#' class='category'>No One Yet</a> | <a href='#' class='comment'>Bring It!</a></small></li>";
        }
        ?>
	<li><strong>Bring Other Dessert</strong><br>
	<input type="text" name="otherdessert"> <br> <input type="submit" name="subotherdessert" value="Submit Dessert"></li>
      </ul>
    </div>
    <div id="recent-posts">
      <h3 class="title">Drinks</h3>
      <ul>
	<?php
	include('includes/db.php');
	$query = "SELECT * FROM food WHERE food_type='Drink'";
	$result = mysql_query($query)
		or die ("query sucks");
        while($row = mysql_fetch_array($result))
        {
		extract($row);
		echo "<li><strong><a href='pinky-swear.php?id=$id'>$food_name</a></strong><br>";
		echo "<small>Brought By: <a href='#' class='category'>No One Yet</a> | <a href='#' class='comment'>Bring It!</a></small></li>";
	}
	?>
        <li><strong>Bring Other Drink</strong><br>
        <input type="text" name="otherdrink"> <br> <input type="submit" name="subotherdrink" value="Submit Drink"></li>
      </ul>
    </div>
    <div id="recent-posts">
      <h3 class="title">Side Dishes</h3>
      <ul>
        <?php
        include('includes/db.php');
        $query = "SELECT * FROM food WHERE food_type='Side Dish'";
        $result = mysql_query($query)
                or die ("query sucks");
        while($row = mysql_fetch_array($result))
        {
                extract($row);
                echo "<li><strong><a href='pinky-swear.php?id=$id'>$food_name</a></strong><br>";
                echo "<small>Brought By: <a href='#' class='category'>No One Yet</a> | <a href='#' class='comment'>Bring It!</a></small></li>";
        }
        ?>
        <li><strong>Bring Other Side Dish</strong><br>
        <input type="text" name="othersidedish"> <br> <input type="submit" name="subothersidedish" value="Submit Side Dish"></li>
      </ul>
    </div>
    <div id="recent-posts">
      <h3 class="title">Main Course</h3>
      <ul>
	<?php
        include('includes/db.php');
        $query = "SELECT * FROM food WHERE food_type='Main Course'";
        $result = mysql_query($query)
                or die ("query sucks");
        while($row = mysql_fetch_array($result))
        {
                extract($row);
                echo "<li><strong><a href='food-detail.php?id=$id'>$food_name</a></strong><br>";
		// insert query to get list of people responsable for that dish.
		// SELECT users.id, users.first_name, users.last_name, assn.food_id, assn.user_id FROM users JOIN assn ON users.id=assn.user_id WHERE
                echo "<small>Brought By: No One Yet | <a href='pinky-swear.php?id=$id' class='comment'>Bring It!</a></small></li>";
        }
        ?>
        <li><strong>Bring Other Main Dish</strong><br>
        <input type="text" name="othermaindish"> <br> <input type="submit" name="subothermaindish" value="Submit Main Dish"></li>
      </ul>
    </div>
    <div style="clear: both; height: 1px;"></div>
  </div>
</div>
<div id="footer">
  <p>Copyright &copy; 2017 Center Family</p>
</div>
</body>
</html>
