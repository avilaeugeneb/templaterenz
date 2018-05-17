<?php
session_start();

$id = $_POST['item_id'];
$quantity = $_POST['item_quantity'];

//update the items for session cart
//cart = [{id:quantity}, {id:quantity}] or cart = [3,1,0,5];
$_SESSION['cart'][$id] = $quantity;
$_SESSION['item_count'] = array_sum($_SESSION['cart']);

echo $_SESSION['item_count'];