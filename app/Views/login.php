<?php
	include_once 'main-header.php'
?>

		<section class="login-form">
			<div class="signup-form-form text-center">
			<h2> Welcome! Please Log In to Proceed </h2>
			<form action="includes/login-inc.php" method="post">
				<input type="text" name="uid" placeholder="Enter Username...">
				<input type="password" name="pwd" placeholder="Enter your password...">
				<button type="submit" class="btn btn-outline-danger" name="submit">Log In</button>
			</form>
		</div>
		<?php 
			if (isset($_GET["error"])) {
				if($_GET["error"] == "emptyInput"){
					echo "<p> You forgot to fill in all fields! </p>";
				}
				else if ($_GET["error"] == "wronglogin") {
					echo "<p> Incorrect Information! </p>";
				}
			}

		?>
		</section>
		</body>
	