<?php
include('includes/db.php');
$pid = $_GET['pid'];
$query = "SELECT * FROM posts WHERE pid=$pid";
$result = mysql_query($query)
	or die("query sucks");
$row = mysql_fetch_array($result);
	extract($row)
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Center Family Event Site</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1><a href="/centerxmas/">home</a> | read the whole post <?php echo $post_title; ?></h1>
</div>
<div id="content">
  <div id="colOne">
    <div id="latest-post">
      <h2 class="title"><?php echo $post_title; ?></h2>
      <div class="story"> <img src="images/img14.jpg" alt="" width="180" height="135" class="image" />
        <p><em><strong>I <?php echo "STATE YOUR NAME"; ?></a></strong></em> promise to bring <?php echo "<b>$food_name</b>"; ?> to the Center Family Christmas Party and Charity Drive.</p>
	<p>If there are questions or comments about the site, contact Nick. If there are questions or comments about an event, contact LaNae.</p>
	<p>Remember, if you sign up to bring something, please bring what you promised and not something different.</p>
      </div>
    </div>
    <?php include('includes/recent_posts.php'); ?>
    <div style="clear: both; height: 1px;"></div>
  </div>
</div>
<div id="footer">
  <p>Copyright &copy; 2017 Center Family</p>
</div>
</body>
</html>
