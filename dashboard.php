<?php include('include/header.php');  ?>
<?php include('include/navbar.php');  ?>

<?php include('include/config.php');  ?>



<h2>User Dasboard</h2>

<?php

$uname=$_SESSION['user'];

$sql="select * from user where username='$uname'";

$res1=mysqli_query($conn,$sql);

$row1=mysqli_fetch_assoc($res1);
//print_r($row1);

 $uid=$row1['id'];

//fetching post related to logged in user(id)

$sql="select * from post where id='$uid'";

$res2=mysqli_query($conn,$sql);

?>


<div class="container">
	  <div class="row">
	  	 <div class="col-md-10-offset-md-1">

  <!----table start---------->
<table class="table">
            <thead class="black white-text">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Heading</th>
                <th scope="col">Subheading</th>
                <th scope="col">Description</th>
                <th scope="col">Createdate</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>


            <tbody>

            	<?php
                 $i=1;
            	while($row2=mysqli_fetch_assoc($res2))
            	{

            	?>


                <tr>
                <th scope="row"><?php echo $i;?></th>
                 <td><?php echo$row2['head'];?></td>
                <td><?php echo$row2['subhead'];?></td>
                <td><?php echo$row2['des'];?></td>
                <td><?php echo$row2['createdate'];?></td>
                <td><a href="edit.php?rid=<?php echo $row2['pid'];?>">Edit</a></td>
                <td><a href="delete.php?rid=<?php echo $row2['pid'];?>">Delete</a></td>

                </tr>

            <?php

              $i++;
              }

            ?>
      
 </tbody>        
</table>





<!-----table en---------->
	  	 </div>
	  	</div>
	  </div>



   <?php include('include/footer.php');  ?>

