<?php

session_start();

function getTitle()
{
	echo "My Cart Page";
}

include "./partials/head.php";

?>

</head>
<body>

	<?php include "./partials/header.php"; ?>

	<main class="wrapper">
		
		<h1>My Cart Page</h1>

		<?php
			// var_export($_SESSION['cart']);

			foreach ($_SESSION['cart'] as $row => $value) {
				echo "ID: " .$row. " Quantity: " . $value . "<br>"; 
			}
			
		?>

	</main>  <!-- /.wrapper -->

	<?php include "./partials/footer.php"; ?>

<?php include "./partials/foot.php"; ?>