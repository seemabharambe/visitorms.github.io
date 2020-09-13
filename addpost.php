
<?php include('include/header.php');  ?>
<?php include('include/navbar.php');  ?>

<?php include('include/config.php');  ?>




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
        <input type="text" class="form-control" id="inputhead" placeholder="Enter heading" name="head">
      </div>

 <!-- heading end -->

<!-- subheading  start-->

<div class="form-group">
    <!-- heading -->
    <label for="inputsubhead" class="col-sm-2 col-form-label">Sub-Heading</label>
    <div class="col-sm-10">
      <div class="md-form mt-0">
        <input type="text" class="form-control" id="inputsubhead" placeholder="Enter sub-heading" name="subhead">
      </div>
<!-- subheading  end-->


<!------------description of the post start---------->

<div class="form-group">
    <label for="texts">Description</label>
    <textarea class="form-control" id="texts" rows="3" name="des"></textarea>
  </div>




    <!-- Grid row -->
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary btn-md" name="send">ADD-POST</button>
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

	//Extract id from user table

	 $uname=$_SESSION['user'];

	$sql="select * from user where username='$uname'";

	$res1=mysqli_query($conn,$sql);

	$row1=mysqli_fetch_assoc($res1);

	//print_r($row1);

	//echo $row1['id'];

   $uid=$row1['id'];


  $sql="insert into post(id,head,subhead,des,createdate)values('$uid','$h','$sh','$d',now())";


  $res2=mysqli_query($conn,$sql);


  if($res2)
  {
   echo"Post inserted";

  }
  else
  {

   echo"failed";
  }

}



?>





   <?php include('include/footer.php');  ?>
