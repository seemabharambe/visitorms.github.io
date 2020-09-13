
 <?php include('include/header.php');  ?>
<?php include('include/navbar.php');  ?>

<?php include('include/config.php');  ?>

<?php

echo$recid=$_GET['rid'];


$sql="delete from post where pid='$recid'";

$res3=mysqli_query($conn,$sql);

//$n=mysqli_num-_rows($res3);

If($res3)
{
	header('location:dashboard.php');

}


else
{
	echo"Not able to delete";
}

?>













 <?php include('include/footer.php');  ?>
