<div class="sidebar clear">
<div class="samesidebar clear">
	<h2>Categories</h2>
		<ul>
<?php
	$query = "SELECT * FROM tbl_category"; //selecting database
	$category  = $db->select($query);
	if ($category) {
		while ($result = $category->fetch_assoc()) {
?>
	<li><img src="images/icon-arrow.png" alt="*" height="10px" width="10px"/> <a href="posts.php?cat_id=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a></li>
<?php } } else {
			echo "<li><b>Sorry! NO Category to show!</b></li>";
		} ?></ul>
</div>
<div class="samesidebar clear">
	<h2>Latest articles</h2>
	<?php
$query = "SELECT * FROM tbl_post limit 5"; //selecting database
$recentpost  = $db->select($query);
if ($recentpost) {
	while ($result = $recentpost->fetch_assoc()) {
?>
		<div class="popular clear">
			<h3><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a><h3>
			<a href="post.php?id=<?php echo $result['id']; ?>"><img src="admin/upload/<?php echo $result['image']; ?>" alt="post image"/></a>
			<small><?php echo $fm->textShorten($result['body'], 100); ?></small>
		</div>
	<?php } } else {
		echo "<h3>NO Recent Posts..</h3>";
	} ?>

</div>
</div>