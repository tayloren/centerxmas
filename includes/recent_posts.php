<div id="recent-posts">
      <h3 class="title">Recent Posts</h3>
<?php
include('includes/db.php');
$query = "SELECT * FROM posts WHERE active='1'";
$result = mysql_query($query)
        or die("query sucks for posts");
while($row = mysql_fetch_array($result))
{
        extract ($row);
        echo "<ul>";
        echo "<li><strong><a href='full_post.php?pid=$pid'>$post_title</a></strong><br />";
        echo "<small>Posted on $date</small></li>";
        echo "</ul>";
}
?>
</div>

