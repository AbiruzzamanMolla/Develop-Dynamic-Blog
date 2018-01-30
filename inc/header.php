<?php include "config/config.php"; ?>
<?php include "lib/Database.php"; ?>
<?php include "helpers/format.php"; ?>
<?php
$db = new Database(); //initilaizing Database object
$fm = new Format(); //initilizing formate object
?>
<!DOCTYPE html>
<html>
<head>
<?php
	if(isset($_GET['pageid'])){
		$pageid = $_GET['pageid'];
	$query = "SELECT * FROM tbl_page WHERE id = $pageid";
	$pages = $db->select($query);
	if($pages){
		while($result=$pages->fetch_assoc()){ ?>
				<title><?php echo $result['page_title']." - ".TITLE; ?></title>
	<?php } } } elseif (isset($_GET['id'])){
		$postid = $_GET['id'];
	$query = "SELECT * FROM tbl_post WHERE id = $postid";
	$posts = $db->select($query);
	if($posts){
		while($result=$posts->fetch_assoc()){ ?>
				<title><?php echo ucwords($result['title'])." - ".TITLE; ?></title>
	<?php } } } else { ?>
	<title><?php echo $fm->title(); ?> - <?php echo TITLE; ?></title>
	<?php } ?>
	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="blog,cms blog">
	<meta name="author" content="Abir">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css"/>
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>
<body>
	<div class="headersection templete clear">
		<a href="index.php">
			<div class="logo">
			<?php
			 $query = "SELECT * FROM tbl_settings WHERE id = '1'";
			 $blogsettings = $db->select($query);
			if($blogsettings){
				while($result = $blogsettings->fetch_assoc()){
			?>
				<img src="admin/<?php echo $result['logo']; ?>" alt="Logo" />
				<h2><?php echo $result['title']; ?></h2>
				<p><?php echo $result['slogan']; ?></p>
			<?php } } ?>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
			<?php
        $query = "SELECT * FROM tbl_social WHERE id = '1'";
        $social = $db->select($query);
        if($social){
            while($result = $social->fetch_assoc()){
        ?>
				<a href="http://facebook.com/<?php echo $result['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="http://twitter.com/<?php echo $result['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="http://linked.com/<?php echo $result['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="http://plus.google.com/<?php echo $result['googleplus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
			<?php } } ?>
			</div>
			<div class="searchbtn clear">
			<form action="search.php" method="get">
				<input type="text" name="search" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
	<ul><?php
	$path = $_SERVER['SCRIPT_FILENAME'];
	$currentpage = basename($path, '.php');
	?>
		<li><a <?php if($currentpage == 'index'){echo 'id = "active"';} ?> href="index.php">Home</a></li>
		<?php
		$query = "SELECT * FROM tbl_page";
		$pages = $db->select($query);
		if($pages){
			while($result=$pages->fetch_assoc()){ ?>
				<li><a <?php if(isset($_GET['pageid']) && $_GET['pageid'] == $result['id']){echo 'id = "active"';} ?> href='page.php?pageid=<?php echo $result['id']; ?>'><?php echo $result['page_title']; ?></a></li>
		<?php } } ?>
		<li><a <?php if($currentpage == 'contact'){echo 'id = "active"';} ?> href="contact.php">Contact</a></li>
	</ul>
</div>