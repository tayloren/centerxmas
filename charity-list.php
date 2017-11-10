<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Center Family</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1>Center Family Events Charity List</h1>
</div>
<div id="pages">
  <ul>
    <li><a id="page1" href="index.php">home</a></li>
    <li><a id="page2" href="food-list.php">Food List</a></li>
    <li class="active"><a id="page3" href="charity-list.php">Charity List</a></li>
    <li><a id="page4" href="event-news.php">Event News</a></li>
    <li><a id="page5" href="contact.php">Contact</a></li>
  </ul>
</div>
<div id="content">
  <div id="charity">
  <?php
  include('includes/db.php');
  $query = "SELECT charity_name FROM charity WHERE active='1'";
  $result = mysql_query($query)
    or die ("query sucks");
  while($row = mysql_fetch_array($result))
  {
    extract($row);
      echo "<h3>$charity_name</h3>";
      //Display needs in the ul-->li
      echo "<ul>";
        echo "<li><strong>$item</strong><br>";
	echo "$desc</li>";
  }
  ?>
      </ul>
</div>
</div>
    <div style="clear: both; height: 1px;"></div>
<div id="footer">
  <p>Copyright &copy; 2017 Center Family</p>
</div>
</body>
</html>
