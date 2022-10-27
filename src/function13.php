<?php session_start() ?>
<?php include 'config.php'; ?>
<?php require_once('addcart.php'); ?>

<?php
if(isset($_POST['x']))
{
 $m1 = $_POST['x'];
$obj5 = new Cart();
$obj5->function4($m1);
}
?>