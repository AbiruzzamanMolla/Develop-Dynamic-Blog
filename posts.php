<?php include "inc/header.php"; ?>
</div><div class="contentsection contemplete clear">
<div class="maincontent clear">
<?php
	$per_page = 3;
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	} else {
		$page = 1;
	}
	$start_from = ($page-1)*$per_page;
?>
<?php
if(!isset($_GET['cat_id']) || $_GET['cat_id'] == NULL){
	header("Location: 404.php");
} else {
	$cat_id = $_GET['cat_id'];
}
?>
<?php
$query = "SELECT * FROM tbl_post WHERE catid = $cat_id limit $start_from, $per_page"; //selecting database
$post  = $db->select($query);
if ($post) {
	while ($result = $post->fetch_assoc()) {
?>
<div class="samepost clear">
	<h2><a href="post.php?id=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h2>
	<h4><?php echo $fm->formatData($result['date']); ?>, By <a href="#"><?php echo $result['author']; ?></a></h4>
	<a href="#"><img src="admin/upload/<?php echo $result['image']; ?>" alt="post image"/></a>
	<p>
		<?php echo $fm->textShorten($result['body']); ?> </p>
	<div class="readmore clear">
		<a href="post.php?id=<?php echo $result['id']; ?>">Read More</a>
	</div>
</div>
<?php } //end of while loop ?>
<!-- Pagination -->
<?php
$query = "SELECT * FROM tbl_post WHERE catid = $cat_id";
$result = $db->select($query);
$total_rows = mysqli_num_rows($result);
$total_pages = ceil($total_rows/$per_page);
echo "<span class='pagination'><a href='posts.php?page=1&cat_id=$cat_id'>".'First Page'."</a>";
for($i=1; $i<=$total_pages; $i++){
	echo "<a href='posts.php?cat_id=$cat_id&page=".$i."'>".$i."</a>";
}
echo "<a href='posts.php?page=$total_pages&cat_id=$cat_id'>".'Last Page'."</a></span>"; ?>
<!-- Pagination -->
<?php } else{
	header("Location:404.php");
} ?>
</div>
<?php include "inc/sideber.php"; ?>
<?php include "inc/footer.php"; ?>