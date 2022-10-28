<?php session_start() ?>
<?php include 'config.php'; ?>
<?php require_once('addcart.php'); ?>

<?php
if(isset($_POST['x1']))
{
 $m1 = $_POST['x1'];
$obj4 = new  Html\Cart();
$obj4->function3($m1);
}
// calling function using object
?>