<?php session_start() ?>
<?php include 'config.php'; ?>
<?php require_once('addcart.php'); ?>

<?php
if(isset($_POST['x']))
{
 $m1 = $_POST['x'];
$obj3 = new Cart();
$obj3->function2($m1);
}

?>