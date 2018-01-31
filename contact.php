<?php include "inc/header.php"; ?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$fname = $fm->validation($_POST['firstname']);
	$lname = $fm->validation($_POST['lastname']);
	$email = $fm->validation($_POST['email']);
	$body  = $fm->validation($_POST['body']);

	$fname = mysqli_real_escape_string($db->link, $fname);
	$lname = mysqli_real_escape_string($db->link, $lname);
	$email = mysqli_real_escape_string($db->link, $email);
	$body  = mysqli_real_escape_string($db->link, $body);
	$error = "";
	if(empty($fname)){
		$error = "First name must not be empty!";
		} elseif(empty($lname)){
			$error = "Last name must not empty!";
		} elseif(empty($email)){
			$error = "Email must not be empty!";
		} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = "Email is not validate!";
		} elseif(empty($body)){
			$error = "Message field must not be empty!!";
		} else {
			$query = "INSERT INTO tbl_contect(firstname, lastname, email, body) VALUES('$fname','$lname','$email','$body')";
			$sent_msg = $db->insert($query);
			if($sent_msg){
				$msg = "Message succesfully send!";
			} else {
				$error = "Message not send!";
			}
		}
}
 ?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>Contact us</h2>
				<?php
				if(isset($error)){
					echo "<span style='color:red;'>$error</span>";
				}
				if(isset($msg)){
					echo "<span style='color:red;'>$msg</span>";
				}
				?>
			<form action="contact.php" method="post">
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input type="text" name="firstname" placeholder="Enter first name"/>
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input type="text" name="lastname" placeholder="Enter Last name"/>
					</td>
				</tr>
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input type="text" name="email" placeholder="Enter Email Address"/>
					</td>
				</tr>
				<tr>
					<td>Your Message:</td>
					<td>
					<textarea name="body"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Submit"/>
					</td>
				</tr>
		</table>
	<form>
 </div>

		</div>
		<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Latest articles</h2>
					<ul>
						<li><a href="#">Category One</a></li>
						<li><a href="#">Category Two</a></li>
						<li><a href="#">Category Three</a></li>
						<li><a href="#">Category Four</a></li>
						<li><a href="#">Category Five</a></li>
					</ul>
			</div>
			<?php include "inc/sideber.php"; ?>
			<?php include "inc/footer.php"; ?>