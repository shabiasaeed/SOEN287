

<!-----------------------------------------------HTML-------------------------------------------------------------->


<!DOCTYPE html>
<html>

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit User Profile</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
   <!--Custom CSS -->
    <link rel="stylesheet" href="css/EditUserBackstore.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

<!------------------------------ INCLUDING MY PHP FILE------------------------>

<?php

include 'page10_ADD.php';

?>

<div class="wrapper">
	<!--  Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="mainpage"><h3>ConUmart</h3></a>
        </div>

        <ul class="list-unstyled components">

             <li>
                <a href="page9.php">&#128100; Users</a>
            </li>
            <li>
                <a href="p7.php">&#128270; Products</a>
            </li>            
            <li>
                <a href="order_list_p11.php">&#128221; Orders</a>
            </li>
            <li>
                <a href="#">&#128161; Feedback</a>
            </li>
             <li>
                <a href="#">&#128202; Sales</a>
            </li>
             <li>
                <a href="#">&#128178; Promotions</a>
            </li>
             <li>
                <a href="#">&#128179; Coupons</a>
            </li>
             <li>
                <a href="#">&#128195; Invoices</a>
            </li>
             <li>
                <a href="#">&#128109; Employees</a>
            </li>
             <li>
                <a href="#">&#128295; Manager</a>
            </li>

        </ul>
    </nav> 

    <!-- Page Content  -->
    <div id="content">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-12">
                   	<div class="card"  style="background-color: #999999; color: #fff; text-align:center; font-size: 30px;">
                    	<div class="card-header" >
							Back-Store Management
						</div>
					</div>			
					<div class="Profile-Settings">
						<h4 class="Profile-title"> Profile Settings </h4>

								
						<div class="col-lg-8">
							<div class="card2">
								<form class= "pinfo-form" method="post" action=""> 

								<input type="hidden" name="Id" value="<?php echo getNewId() ?>">

								<?php
								 	if(count($errors)>0) {
								 echo '<ul>';
			 					foreach($errors as $e){
								 echo '<li style="color:#B22222; font-weight:bold" >' .$e. '</li>';
								 }
			 						echo '</ul>';
								 }
							  ?>
									<div class="card-body">
												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">First Name *</h6>
													</div>
													<div class="col-sm-9">
														<input
														 type="text" 
														class= "form-control" 
														name= "firstname" 
														placeholder="First Name"   
														> 
													</div>
												</div>
							
												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Last Name *</h6>
													</div>
													<div class="col-sm-9">
														<input 
														type="text" 
														class="form-control" 
														name= "lastname"
														placeholder="Last Name"
														 >
													</div>
												</div>
							
							
												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Email *</h6>
													</div>
													<div class="col-sm-9">
														<input 
														type="text" 
														class="form-control" 
														name= "emailaddress" 
														placeholder="example@gmail.com"
														> 
													</div>
												</div>
							
                          	  					<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Password *</h6>
													</div>
													<div class="col-sm-9">
														<input 
														type="password" 
														class="form-control" 
														name="pwd"
														placeholder="Password" 
														> 
													</div>
												</div>
							
					
												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Phone Number</h6>
													</div>
													<div class="col-sm-9">
														<input 
														type="tel" 
														class="form-control" 
														name="phonenumber"
														placeholder="Phone number" 
														> 
													</div>
												</div>

												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Address</h6>
													</div>
													<div class="col-sm-9">
														<input 
														type="text" 
														class="form-control"  
														name="addressline"
														placeholder="Address Line"
														> 
													</div>
												</div>

												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Appartment number</h6>
													</div>
													<div class="col-sm-9">
														<input 
														type="text" 
														class="form-control"  
														name="apptnum"
														> 
													</div>
												</div>


												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">City</h6>
													</div>
													<div class="col-sm-9">
														<input 
														type="text" 
														class="form-control" 
														name="city"
														placeholder="City"
														> 
													</div>
												</div>
							
												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Province</h6>
													</div>
													<div class="col-sm-9">
														<input 
														type="text" 
														class="form-control" 
														name="province"
														placeholder="Province"
														> 
													</div>
												</div>
							
												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Country</h6>
													</div>
													<div class="col-sm-9">
														<input 
														type="text" 
														class="form-control"  
														name="country"
														placeholder="Country"
														> 
													</div>
												</div>

												<div class="row mb-3">
													<div class="col-sm-3">
														<h6 class="mb-0">Postal Code</h6>
													</div>
													<div class="col-sm-9">
														<input 
														type="text" 
														class="form-control" 
														name="postalcode"
														placeholder="Postal Code"
														> 
													</div>
												</div>
							
							
												<div class="row mb-3">
													<div class="col-sm-3"></div>
														<div class="col-sm-9">
															<a href="page9.html"> <input type="submit" value="Save Changes" name="savebutton"></a>
														</div>
												</div>
									 </div>
								</form>

							 </div>
                   		</div>

                	</div>
				</div>
		    </div>
        </div>	
   </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>