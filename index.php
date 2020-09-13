
  <?php include('include/header.php');  ?>
<?php include('include/navbar.php');  ?>
<?php include('include/config.php');  ?>


<div class="container">
	<div clas="row">
		<div class=col-md-8">

 
                 <?php 

                 $sql="select * from post order by createdate desc ";
                 $res=mysqli_query($conn,$sql);
                 while($row=mysqli_fetch_assoc($res))
                 {
                 
                 ?>

<!------------card start-------------->
			<div class="card">

 <!-- Card content -->
				<div class="card-body">

                        <!--Heading -->
                        <h4 class="card-title"><?php echo $row['head'];?></h4>
                        <!--  subHeading  -->
                        <h4 class="card-title"><?php echo $row['subhead'];?></h4>
                           <!--  Description  -->
                        
                     <p class="card-text"><?php echo $row['des']?></p>
                        <!-- Button --->
                        <a href="comment.php" class="btn btn-primary">Comment</a> 
                </div>
          </div>



          <hr>      
           <?php

              }
            ?>

          

		</div>
	</div>
</div>












<?php include('include/footer.php'); ?>