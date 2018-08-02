<?php 
include "include/lib.php";
include "include/top.php";
include "include/left.php"; 
	$v = $_GET['v'];
	if($v == 'produk') {
		require_once "include/product.php";
	} elseif ($v == 'cart') {
		require_once "include/cart.php";
	} elseif ($v == 'order') {
		require_once "include/order.php";
	} else {
		require_once "include/home.php";
	}
include "include/bottom.php"; 
?>