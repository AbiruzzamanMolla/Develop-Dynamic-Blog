<?php include "inc/header.php"; ?>
<?php
if(!isset($_GET['id']) || $_GET['id'] == NULL){
	header("Location: 404.php");
} else {
	$id = $_GET['id'];
}
?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<?php
				$query = "SELECT * FROM tbl_post WHERE id='$id'";
				$post = $db->select($query);
				if($post){
					while($result=$post->fetch_assoc()){
				?>
				<h2><?php echo $result['title']; ?></h2>
				<h4><?php echo $fm->formatData($result['date']); ?>, By <?php echo $result['author']; ?></h4>
				<img src="admin/upload/<?php echo $result['image']; ?>" alt="post image"/>
				<p><?php echo $result['body']; ?> </p>

				<div class="relatedpost clear">
					<h2>Related articles</h2>
					<?php
					$catid= $result['catid'];
					$relatedQuery = "SELECT * FROM tbl_post WHERE catid=$catid ORDER BY rand() limit 6";
					$relatedPost = $db->select($relatedQuery);
					if($relatedPost){
						while($relatedresult = $relatedPost->fetch_assoc()){
						?>	
					<a href="post.php?id=<?php echo $relatedresult['id']; ?>"><img src="admin/upload/<?php echo $relatedresult['image']; ?>" alt="<?php echo $relatedresult['title']; ?>"/></a>
					<?php 	}
					} else {
						echo "<h2>NO RELATED POST FOUND.</h2>";
					}
					 ?>
				</div>
				<?php
					}
				} else {
					header("Location:404.php");
				}
				?>
	</div>
		</div>
<?php include "inc/sideber.php"; ?>
<?php include "inc/footer.php"; ?>