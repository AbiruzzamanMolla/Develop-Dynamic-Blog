<?php include "../lib/session.php";
Session::checkLogin();
?>
<?php include "../config/config.php"; ?>
<?php include "../lib/Database.php"; ?>
<?php include "../helpers/format.php"; ?>
<?php
$db = new Database(); //initilaizing Database object
$fm = new Format(); //initilizing formate object
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$username = $fm->validation($_POST['username']); //reciving username and validating
			$password = $fm->validation($_POST['password']); //reciving password validating 

			$username = mysqli_real_escape_string($db->link, $username); //checking db
			$password = mysqli_real_escape_string($db->link, $password);

			$query = "SELECT * FROM tbl_user WHERE username = '$username' AND pass = '$password'";
			$result = $db->select($query);
			if($result != false){
				$value = mysqli_fetch_assoc($result); //retriving data from database
				$row   = mysqli_num_rows($result);
				$username = $value['username'];
				$userid = $value['id'];
				if($row > 0){ //initilizing session as global
					Session::set("login", true);
					$_SESSION['username'] = $username;
					$_SESSION['userid'] = $userid;
					// Session::set("username",  $username);
					// Session::set("userid",  $userid);
					header("Location:index.php");

				} else {
					echo "<span style='color:red;font-size:20px;'>User NOT FOUND.</span>";
				}
			} else {
				echo "<span style='color:red;font-size:20px;'>Username and Password not matched.</span>";
			}

		}
		?>

		<form action="" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Login Page</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>