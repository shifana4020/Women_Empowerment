<?php
session_start();
//$id = $_SESSION['id'];
if (! empty($_SESSION['logged_in'])) {
	# code...
?>
              <?php
			  include("header.php");
			  ?>
        
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center"></h2>
            <!--// main-heading -->

          
    
            <!-- Grids Content -->
            <section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">User Requests</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                           
                                 <th >
                               user details
                                    </th>
									   <th>
                               id proof
                                    </th>
									   <th>
                               crime details
                                    </th>
                                </th><th class="text-center" colspan="2" align="center">
                                    Action
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
                          include '../connect.php';
$sql="select * from crimedetails where  status='Reported'";
$res=mysqli_query($con,$sql);

while($r=mysqli_fetch_array($res))
{
$id=$r['logid'];
$sql1="select * from tbl_reg where  loginid=$id";
$res1=mysqli_query($con,$sql1);

$r1=mysqli_fetch_array($res1);
?>
		<tr><td><?php echo $r1['name'];?><br />
        <?php echo $r1['address'];?><br /><?php echo $r1['email'];?></br><?php echo $r1['phone'];?>
		<?php echo $r1['district'];?><br /><?php echo $r1['pincode'];?></td><td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100" /></td><td>
		
		<?php echo $r['discription'];?><br />on <?php echo $r['crimedate'];?></td>
        		<td><a href="approve.php?id=<?php echo $r1[9];?>"><img src="images/a.jpg" width="80" height="30"></a></td>
                <td><a href="reject.php?id=<?php echo $r1[9];?>"><img src="images/ry.jpg" width="80" height="30"></a></td>
				</tr>
                      <?php
}
?>
				</tbody>
                    </table>
                </div>
                <!--// Grids Info -->
                

           
                                   
           <?php 
		   include("footer.php");
		   ?>
		   <?php
}
else
header('location:../login.php');
?>