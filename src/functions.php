<?php session_start() ?>
<?php include 'config.php'; ?>
<?php require_once('addcart.php'); ?>

<?php

if(isset($_POST['x1']))
{
$m1 = $_POST['x1'];
$obj2 = new Html\Cart();
$obj2->function1($m1);
}

?>