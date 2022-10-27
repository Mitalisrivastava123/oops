<?php session_start() ?>
<?php include 'config.php'; ?>
<?php require_once('addcart.php'); ?>

<?php
if(isset($_POST['x']))
{
 $m1 = $_POST['x'];
$obj4 = new Cart();
$obj4->function3($m1);
}

?>