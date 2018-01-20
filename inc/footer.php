</div>

	<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
	  <p>&copy; Copyright Training with live project.</p>
	</div>
	<div class="fixedicon clear">
	<?php
        $query = "SELECT * FROM tbl_social WHERE id = '1'";
        $social = $db->select($query);
        if($social){
            while($result = $social->fetch_assoc()){
        ?>
		<a href="http://www.facebook.com/<?php echo $result['facebook']; ?>"><img src="images/fb.png" alt="Facebook"/></a>
		<a href="http://www.twitter.com/<?php echo $result['twitter']; ?>"><img src="images/tw.png" alt="Twitter"/></a>
		<a href="http://www.linkedin.com/<?php echo $result['linkedin']; ?>"><img src="images/in.png" alt="LinkedIn"/></a>
		<a href="http://www.google.com/<?php echo $result['googleplus']; ?>"><img src="images/gl.png" alt="GooglePlus"/></a>
		<?php } } ?>
	</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>