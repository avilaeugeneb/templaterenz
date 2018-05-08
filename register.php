<?php

function getTitle()
{
	echo "Register Page";
}

include "./partials/head.php";

?>

</head>
<body>

	<?php include "./partials/header.php"; ?>

	<main class="wrapper register">
		
		<h1>Register Page</h1>
		<div class="col-md-6 offset-md-3">
			<form action="./lib/insertuser.php" method="POST" id="registerform">
				<div class="form-group">
					<label for="email">Email: </label><span class="text-danger errorspans" id="mail_avail"></span>
					<input type="email" name="email" id="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="username">Username: </label><span class="text-danger errorspans" id="user_avail"></span>
					<input type="text" name="username" id="username" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password: </label><span class="text-danger errorspans" id="pwlength"></span>
					<input type="password" name="password" id="password" class="form-control" required minlength="8">
				</div>
				<div class="form-group">
					<label for="confirmpw">Confirm Password: </label><span class="text-danger errorspans" id="match"></span>
					<input type="password" name="confirmpw" id="confirmpw" class="form-control" required minlength="8">
				</div>
				<div class="form-group">
					<button type="submit" name="submit" id="register" class="btn btn-danger">Sign Up</button>
				</div>
			</form>
		</div>

	</main>  <!-- /.wrapper -->

	<?php include "./partials/footer.php"; ?>

<?php include "./partials/foot.php"; ?>