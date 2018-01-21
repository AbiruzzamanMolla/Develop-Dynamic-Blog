<?php include "inc/header.php"; ?>
<?php
if(!isset($_GET['pageid']) || $_GET['pageid'] == NULL){
	header("Location: 404.php");
} else {
	$id = $_GET['pageid'];
}
?>
<div class="contentsection contemplete clear">
	<div class="maincontent clear">
        <?php
            $query = "SELECT * FROM tbl_page WHERE id = '$id'";
            $pages = $db->select($query);
            if($pages){
                while($result=$pages->fetch_assoc()){ ?>
		<div class="about">
				<h2><?php echo $result['page_title']; ?></h2><br>
				<?php echo $result['page_body']; ?>
		</div>
                <?php } } ?>
</div>
<?php include "inc/sideber.php"; ?>
<?php include "inc/footer.php"; ?>