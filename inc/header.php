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
	<title>PHP OOP Blog Project based  learning</title>
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
				<a href="http://facebook.com/asliabir" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="http://twitter.com/asliabir" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="http://linked.com/asliabir" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="http://plus.google.com/asliabr" target="_blank"><i class="fa fa-google-plus"></i></a>
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
	<ul>
		<li><a id="active" href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</div>
