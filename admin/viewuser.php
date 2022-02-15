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
                    <h4 class="tittle-w3-agileits mb-4">User Requests</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th class="text-center">
                                    Address
                                   
                                </th>
								 <th class="text-center">
                                 Email
                                    
                                </th>
								 <th class="text-center">
                               Phone
                                    
                                </th>
								<th class="text-center">
                                    District
                                    
                                </th>
                                <th class="text-center">
                                   Pincode
                                    
                                </th>
								<th class="text-center">
                                 Gender
                                   
                                </th><!--<th class="text-center" colspan="2" align="center">
                                    Action
                                    
                                </th>-->
                            </tr>
                        </thead>
                        <tbody>
                           
                          <?php
                          include '../connect.php';
						  $rs = mysqli_query($con,"SELECT * FROM tbl_login WHERE status='0' and type1='user' " );
						  while($row1=mysqli_fetch_assoc($rs))
   			{
        	$logid=$row1['loginid'];
    
        	$cs = mysqli_query($con,"SELECT * FROM tbl_reg WHERE loginid='$logid' " );
  
                while($row=mysqli_fetch_assoc($cs))
                {
                   
                    echo "<tr><td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['district'] . "</td>";
                    echo "<td>" . $row['pincode'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
					//echo "<td>" . "<a id=approve href='approve.php?id=$logid'> Approve</a>". "</td>";
                    //echo "<td>" . "<a id=reject href='reject.php?id=$logid'> Reject</a>". "</td>";
                    echo "</tr>";
                }
               
            }
             echo "</table>";
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