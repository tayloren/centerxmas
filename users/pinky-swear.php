<?php
include('includes/db.php');
$id = $_GET['id'];
$query = "SELECT * FROM food WHERE id=$id";
$result = mysql_query($query)
	or die("query sucks");
$row = mysql_fetch_array($result);
	extract($row)
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
  <h1>Bring <?php echo $food_name; ?></h1>
</div>
<div id="content">
  <div id="colOne">
    <div id="latest-post">
      <h2 class="title">You promise to bring <?php echo $food_name; ?>?</h2>
      <div class="story"> <img src="images/img14.jpg" alt="" width="180" height="135" class="image" />
        <p><em><strong>I <?php echo "STATE YOUR NAME"; ?></a></strong></em> promise to bring <?php echo "<b>$food_name</b>"; ?> to the Center Family Christmas Party and Charity Drive.</p>
	<p>If there are questions or comments about the site, contact Nick. If there are questions or comments about an event, contact LaNae.</p>
	<p>Remember, if you sign up to bring something, please bring what you promised and not something different.</p>
      </div>
    </div>
    <div id="recent-posts">
      <h3 class="title">Recent Posts</h3>
      <ul>
        <li><strong><a href="#">Lorem ipsum dolor sit amet</a></strong><br />
          <small>Filed under <a href="#" class="category">Uncategorized</a> | <a href="#" class="comment">1 Comment &raquo;</a></small></li>
        <li><strong><a href="#">Cras sagittis est laoreet odio</a></strong><br />
          <small>Filed under <a href="#" class="category">Uncategorized</a> | <a href="#" class="comment">1 Comment &raquo;</a></small></li>
        <li><strong><a href="#">Sed pulvinar ornare urna</a></strong><br />
          <small>Filed under <a href="#" class="category">Uncategorized</a> | <a href="#" class="comment">1 Comment &raquo;</a></small></li>
        <li><strong><a href="#">Quisque in dolor non erat</a></strong><br />
          <small>Filed under <a href="#" class="category">Uncategorized</a> | <a href="#" class="comment">1 Comment &raquo;</a></small></li>
        <li><strong><a href="#">Fusce lobortis dui molestie eros</a></strong><br />
          <small>Filed under <a href="#" class="category">Uncategorized</a> | <a href="#" class="comment">1 Comment &raquo;</a></small></li>
        <li><strong><a href="#">Maecenas vel leo nec dui pulvinar</a></strong><br />
          <small>Filed under <a href="#" class="category">Uncategorized</a> | <a href="#" class="comment">1 Comment &raquo;</a></small></li>
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
