<?php
	include_once 'superuser-header.php'
?>	<body>	

		<section class="signup-form">
			<div class="signup-form-form text-center">
			<h2> WELCOME SUPERUSER! CREATE AN ACCOUNT HERE </h2>
			<form action="includes/signup-inc.php" method="post">
			<div class="select">
				<select id="type" name="type">
				<option value="" disabled selected>Select Account Type</option>
				  <option value="Faculty">Faculty</option>
				  <option value="Head">Head</option> 
				</select>
			</div>
			<div class="options">
				<br><input type="text" name="fname" placeholder="First Name..."> <br>
				<input type="text" name="lname" placeholder="Last Name..."><br>
				<input type="text" name="email" placeholder="Email..."><br>
				<input type="text" name="uid" placeholder="Username..."><br>
				<input type="password" name="pwd" placeholder="Enter your password..."><br>
				<input type="password" name="pwdrepeat" placeholder="Repeat Password..."><br>
				<button type="submit" name="submit" class="btn btn-outline-danger">Create Account</button>
			</form>
		</div>
		</div>
		<?php 
			if (isset($_GET["error"])) {
				if($_GET["error"] == "emptyInput"){
					echo "<p> You forgot to fill in all fields! </p>";
				}
				else if ($_GET["error"] == "invaliduid") {
					echo "<p> Choose a proper username! </p>";
				}
				else if ($_GET["error"] == "invalidemail") {
					echo "<p> Choose a proper email! </p>";
				}
				else if ($_GET["error"] == "passwordsdontmatch") {
					echo "<p> Passwords doesn't match ! </p>";
				}
				else if ($_GET["error"] == "stmfailed") {
					echo "<p> Something went wrong, try again! </p>";
				}
				else if ($_GET["error"] == "usernametaken") {
					echo "<p> Username already taken! </p>";
				}
				else if ($_GET["error"] == "none") {
					echo "<p> Succesfully Signed Up! </p>";
				}

			}

		?>

		</section>

		



		</body>
	
