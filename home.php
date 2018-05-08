<?php

session_start();

if(!isset($_SESSION['current_user'])){
	header('location : ./login.php');
}

function getTitle()
{
	echo "Home Page";
}

include "./partials/head.php";

?>

</head>
<body>

	<?php include "./partials/header.php"; ?>

	<main class="wrapper">
		
		<?php
			echo "<h1>Home Page of ". $_SESSION['current_user'] ."</h1>";
		?>

	</main>  <!-- /.wrapper -->

	<?php include "./partials/footer.php"; ?>

<?php include "./partials/foot.php"; ?>