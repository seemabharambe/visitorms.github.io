 <?php include('include/header.php');  ?>
<?php include('include/navbar.php');  ?>

<?php include('include/config.php');  ?>
<!-----container --row--col-md-4---->

<div class="container py-2">

 <div class="row">

     <div class="col-md-6 offset-md-3">

   

     <!-- Horizontal material form -->
<form method="POST">


	<!-- Grid row -->
  <div class="form-group row">
    <!-- Material input -->
    <label for="inputEmail3MD" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <div class="md-form mt-0">
        <input type="text" class="form-control" id="inputEmail3MD" placeholder="Enter your name" name="name">
      </div>
    </div>
  </div>
  <!-- Grid row -->

  <!-- Grid row -->
  <div class="form-group row">
    <!-- Material input -->
    <label for="inputEmail3MD" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <div class="md-form mt-0">
        <input type="email" class="form-control" id="inputEmail3MD" placeholder="Enter Email" name="email">
      </div>
    </div>
  </div>
  <!-- Grid row -->

  <!-- Grid row -->
  <div class="form-group row">
    <!-- Material input -->
    <label for="inputPassword3MD" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <div class="md-form mt-0">
        <input type="password" class="form-control" id="inputPassword3MD" placeholder="Enter Password" name="pass">
      </div>
    </div>
  </div>
  <!-- Grid row -->

  <!-- Grid row -->
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary btn-md" name="send">Register</button>
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
	echo$n=$_POST['name'];
	echo$uname=$_POST['email'];
	echo$pass=$_POST['pass'];

$sql="insert into user(name,username,password)values('$n','$uname','$pass')";

   $res=mysqli_query($conn,$sql);

   if($res)
   {
   	echo"User Registered Successfully";
   }

else
{
	echo"failed to register";
}
}





?>










<?php include('include/footer.php');  ?>



