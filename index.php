<?php include "config/config.php"; ?>
<?php include "lib/Database.php"; ?>
<?php include "helpers/format.php"; ?>
<?php include "inc/header.php"; ?>
<?php
$db = new Database(); //initilaizing Database object
$fm = new Format(); //initilizing formate object
?>
</div><div class="contentsection contemplete clear">
<div class="maincontent clear">
<?php
$query = "SELECT * FROM tbl_post"; //selecting database
$post  = $db->select($query);
if ($post) {
	while ($result = $post->fetch_assoc()) {
?>
<div class="samepost clear">
	<h2><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h2>
	<h4><?php echo $fm->formatData($result['date']); ?>, By <a href="#"><?php echo $result['author']; ?></a></h4>
	<a href="#"><img src="images/<?php echo $result['image']; ?>" alt="post image"/></a>
	<p>
		<?php echo $fm->textShorten($result['body']); ?> </p>
	<div class="readmore clear">
		<a href="post.php?id=<?php echo $result['id']; ?>">Read More</a>
	</div>
</div>
<?php } //end of while loop ?>
<?php } else{
	header("Location:404.php");
} ?>
</div>
<?php include "inc/sideber.php"; ?>
<?php include "inc/footer.php"; ?>