<?php
session_start();

if (!isset($_SESSION['carts'])) {
	$_SESSION['carts'] = [];
}
// cart empty
$_SESSION['carts'] =[];
echo json_encode ($_SESSION['carts']);