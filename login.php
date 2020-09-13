 
<?php
 //session_start();
 //session_regenerate_id(); 
?>

 <?php include('include/header.php');  ?>
<?php include('include/navbar.php');  ?>

<?php include('include/config.php');  ?>
<!-----container --row--col-md-4---->

<div class="container py-2">

 <div class="row">

     <div class="col-md-6 offset-md-3">

   <h2>User Login</h2>

     <!-- Horizontal material form -->
     <hr>
<form method="POST">


	<!-- Grid row -->
  <div class="form-group row">
    <!-- Material input -->
    <label for="inputEmail3MD" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <div class="md-form mt-0">
        <input type="text" class="form-control" id="inputEmail3MD" placeholder="Enter your name" name="uname">
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
      <button type="submit" class="btn btn-primary btn-md" name="send">Login</button>
    </div>
  </div>
  <!-- Grid row -->
</form>
<!-- Horizontal material form --></div>




 </div>



</div>
  




<?php

if(isset($_POST['send']))
{
	$uname=$_POST['uname'];
	
	$pass=$_POST['pass'];



  //$md5pass=md5($pass);  //security



$sql="select * from user where  username='$uname' and password='$pass'";

   $res=mysqli_query($conn,$sql);
   

   echo$n=mysqli_num_rows($res);


   if($n==1)
   {
     

       $_SESSION['user']=$uname;
       echo '<script type="text/javascript">'; 
       echo 'window.location.href = "dashboard.php";';
       echo '</script>';
   }

else
{
	echo"Invalid Username and password";
}
}





?>










<?php include('include/footer.php');  ?>



