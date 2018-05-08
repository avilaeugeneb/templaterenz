<?php

session_start();

//DB Connection
require_once './lib/connect.php';

if(isset($_GET['id'])){	
	$item_id= $_GET['id'];

	$item_sql = "
	SELECT i.image_path,i.product_name,i.description,i.price,c.name 
	FROM items i 
	JOIN categories c 
	ON i.category_id=c.id 
	WHERE i.id='$item_id'";

	$item = mysqli_query($conn,$item_sql) or die(mysqli_error($conn));

}

function getTitle()
{
	echo "Item Page";
}

include "./partials/head.php";

?>

</head>
<body>

	<?php include "./partials/header.php"; ?>

	<main class="wrapper">
		<div class="container">
			<div class="grid items">
				<?php
					foreach($item as $column){
						extract($column);
						echo "<h1>".$product_name."</h1>";
						echo "<div> <h3>Beer Type</h3>" 
							.$name. 
							"</div>";
						echo '<div>
							<img class="img-fluid" src="' .$image_path. '" alt="image">
							</div>';	
						echo "<div> <h3>Description</h3>" 
							.$description. 
							"</div>";
					}
				?>
			</div>
		</div>

	</main>  <!-- /.wrapper -->

	<?php include "./partials/footer.php"; ?>

<?php include "./partials/foot.php"; ?>