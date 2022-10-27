<?php session_start() ?>
<?php include 'config.php'; ?>
<?php require_once('addcart.php'); ?>

<?php
if(isset($_POST['x']))
{
 $m1 = $_POST['x'];
 //echo $m1;
$obj2 = new Cart();
$obj2->function1($m1);


}

?>