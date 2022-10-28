<?php session_start() ?>
<?php include 'config.php'; ?>
<?php require_once('addcart.php'); ?>

<?php
if(isset($_POST['x1']))
{
 $m1 = $_POST['x1'];
$obj3 = new Html\Cart();
$obj3->function2($m1);
}

?>