<?php
	include_once 'main-header.php'
?>

		<section class="login-form">
			<div class="signup-form-form text-center">
			<h1> Welcome Superuser!  </h1>
			<p> ENTER THE SECRET PASSWORD TO CONTINUE:</p>
			<form action="includes/super-login-inc.php" method="post">
				<input type="password" name="pwd" placeholder="Enter the secret password..."> <br><br>
				<button type="submit" name="submit" class="btn btn-outline-danger">Log In</button>
			</form>
		</div>

		<?php 
			if (isset($_GET["error"])) {
				if ($_GET["error"] == "wrongpass") {
					echo "<br><p align='center'> INVALID CREDENTIALS! </p>";
				}
			}

		?>
		</section>

		</body>
	
