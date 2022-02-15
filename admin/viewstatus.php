<?php
session_start();
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
                    <h4 class="tittle-w3-agileits mb-4">New Case Details</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>User Details</th>
								<th>Id Proof</th>
                                <th>Crime Details</th>
                                 <th>Lawyer Details</th>
                                </th><th class="text-center" colspan="2" align="center">
                                   Status
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
                          include '../connect.php';


$sql="select * from crimedetails where  status='Assigned'";
$res=mysqli_query($con,$sql);

while($r=mysqli_fetch_array($res))
{
$id=$r['logid'];
$did=$r['detailid'];
$sql1="select * from tbl_reg where loginid=$id";
$res1=mysqli_query($con,$sql1);
$r1=mysqli_fetch_array($res1);
$sqe="select * from assigncase where  detailid=$did";
$ree=mysqli_query($con,$sqe);
$k=mysqli_fetch_array($ree);
$lid=$k['lawyerid'];
$sg="select * from lawyers where lawyerid=$lid";
$rg=mysqli_query($con,$sg);
$j=mysqli_fetch_array($rg);

?>
		<tr><td><?php echo $r1['name'];?><br />
        <?php echo $r1['address'];?><br /><?php echo $r1['email'];?></br><?php echo $r1['phone'];?>
		<?php echo $r1['district'];?><br /><?php echo $r1['pincode'];?></td><td><img src="../uploads/<?php echo $r['idproof'];?>" width="100" height="100" /></td><td>
		
		<?php echo $r['discription'];?><br />on <?php echo $r['crimedate'];?></td>
		
        		
                <td>
				<?php echo $j['name'];?><br />
				<?php echo $j['email'];?><br />
				<?php echo $j['court'];?> <br />
				</td>
				<td><?php echo $k['status'];?></td>
		</form>		
                      <?php
}
?></tbody>
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