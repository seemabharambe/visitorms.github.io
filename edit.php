


 <?php include('include/header.php');  ?>
<?php include('include/navbar.php');  ?>

<?php include('include/config.php');  ?>

<?php
 $recid=$_GET['rid'];


$sql="select * from post where pid='$recid'";

$res4=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($res4);

//print_r($row);

?>



<div class="container py-2">

 <div class="row">

     <div class="col-md-6 offset-md-3">

   

     <!-- Horizontal material form -->
<form method="POST">
  <!-- heading -->
  <div class="form-group">
    <label for="inputhead" class="col-sm-2 col-form-label">Heading</label>
    <div class="col-sm-10">
      <div class="md-form mt-0">
        <input type="text" class="form-control" id="inputhead" placeholder="Enter heading" name="head"  value="<?php echo $row['head'];?>">
      </div>

 <!-- heading end -->

<!-- subheading  start-->

<div class="form-group">
    <!-- heading -->
    <label for="inputsubhead" class="col-sm-2 col-form-label">Sub-Heading</label>
    <div class="col-sm-10">
      <div class="md-form mt-0">
        <input type="text" class="form-control" id="inputsubhead" placeholder="Enter sub-heading" name="subhead" value="<?php echo $row['subhead'];?>">
      </div>
<!-- subheading  end-->


<!------------description of the post start---------->

<div class="form-group">
    <label for="texts">Description</label>
    <textarea class="form-control" id="texts" rows="3" name="des" value="<?php echo $row['des'];?>"></textarea>
  </div>




    <!-- Grid row -->
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary btn-md" name="send">UPDATE</button>
    </div>
  </div>
  <!-- Grid row -->
</form>
<!-- Horizontal material form -->


</div>




 </div>



</div>




<?php

if(isset($_POST['send']))
{
	 $h=$_POST['head'];
     $sh=$_POST['subhead'];
     $d=$_POST['des'];

$sql="update post set head='$h',subhead='$sh',des='$d' where pid='$recid'";

$res=mysqli_query($conn,$sql);

if($res)
{
	echo"updated";
}

else
{
	echo"failed";


}
}
?>






 <?php include('include/footer.php');  ?>
