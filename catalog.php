<?php

session_start();

//DB Connection
require_once './lib/connect.php';

function getTitle()
{
	echo "Catalog Page";
}

include "./partials/head.php";

// Request data from DB

$items_sql = 'SELECT * FROM items';
$items = mysqli_query($conn,$items_sql);

//test if it returns int(n) where n >= 1;
// var_dump($items);

?>

</head>
<body>

	<?php include "./partials/header.php"; ?>

	<main class="wrapper">
		
		<h1 class="text-center">Catalog Page</h1>

		<div class="container">
			<div class="grid catalog">
				<?php 
					while($item = mysqli_fetch_assoc($items)){

						echo ' <div class="card catalog-item">
						<img class="card-img-top" src="' .$item['image_path']. '" alt="Card image cap">
						<div class="card-body">
						<h5 class="card-title">' .$item['product_name']. '</h5>
						<p class="card-text">' .$item['description']. '</p>
						<a href="item.php?id='.$item['id'].'" class="btn btn-primary">View Details</a>
						<button type="button" class="btn btn-default">Buy Me</button>
						</div>
						</div> ';
					}
				?>
			</div>
		</div>

	</main>  <!-- /.wrapper -->

	<?php include "./partials/footer.php"; ?>

<?php include "./partials/foot.php"; ?>