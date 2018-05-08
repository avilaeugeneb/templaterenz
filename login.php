<?php

session_start();

function getTitle()
{
	echo "Log In Page";
}

include "./partials/head.php";

?>

</head>
<body>

	<?php include "./partials/header.php"; ?>

	<main class="wrapper register">
		<h1>Login Page</h1>
		<div class="col-md-6 offset-md-3">
			<form action="./lib/login_user.php" method="POST" id="registerform">
				<div class="form-group">
					<label for="username">Username: </label>
					<input type="text" name="username" id="login_username" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password: </label>
					<input type="password" name="password" id="login_password" class="form-control" required minlength="8">
				</div>
				<div class="form-group">
					<button type="submit" name="submit" id="login" class="btn btn-danger">Log In</button>
					<span id="errormsg">
						<?php 
							if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
								echo $_SESSION['msg'];
								session_unset();
								session_destroy();
							}
						?>
					</span>
				</div>
			</form>
		</div>
	</main>  <!-- /.wrapper -->

	<?php include "./partials/footer.php"; ?>

<?php include "./partials/foot.php"; ?>