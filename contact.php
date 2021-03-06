<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact Event Administrator</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.6.2.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			$('#contactForm').submit(function(e) {
				contactus();
				e.preventDefault();
			});
		});

	</script>
</head>
<body>
<div id="header">
  <h1>Contact Event Administrator</h1>
</div>
<div id="pages">
  <ul>
    <li><a id="page1" href="index.php">home</a></li>
    <li><a id="page2" href="food-list.php">Food List</a></li>
    <li><a id="page3" href="charity-list.php">Charity List</a></li>
    <li><a id="page4" href="event-news.php">Event News</a></li>
    <li class="active"><a id="page5" href="contact.php">Contact</a></li>
  </ul>
</div>
<div id="content">
  <div id="colOne">
    <div id="latest-post">
      <h2 class="title">Contact Event Administrator</h2>
      <div class="story">
	<p>All fields required.</p>
	<HR/>
	<form id="contactForm" action="contact_submit.php" method="post">
		<table width="auto" border="0" cellspacing="2" cellpadding="0">
			  <tr>
				<td><label class="label" for="name">Your Names:</label></td>
				<td><input onclick="this.value='';" class="input" name="name" type="text" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" size="25" maxlength="50" /></td>
			  </tr>
			  <tr>
				<td><label class="label" for="email">Email Address:</label></td>
				<td><input onclick="this.value='';" class="input" name="email" type="text" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" size="25" maxlength="30"  /></td>
			  </tr>
			  <tr>
				<td><label class="label" for="message">Query/Comment:</label></td>
				<td align="center"><textarea class="input" name="message" cols="25" rows="4"></textarea></td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td>
				<input type="submit" value="Submit" />
				</td>
			  </tr>
			  <tr>
				<td colspan="2"><div id="error">&nbsp;</div></td>
			  </tr>
		</table>
	</form>
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




