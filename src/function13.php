<?php session_start() ?>
<?php include 'config.php'; ?>
<?php require_once('addcart.php'); ?>

<?php
if(isset($_POST['x1']))
{
 $m1 = $_POST['x1'];
$obj5 = new Html\Cart();
$obj5->function4($m1);
}
// defined objects
?>