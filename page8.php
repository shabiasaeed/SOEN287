
<!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Edit properties</title>
    <link rel="stylesheet" href="css/EditProperties.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  </head>
  <?php
  include 'page8_ADD.php';
?>
  <div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <a href="mainpage">
          <h3>ConUmart</h3>
        </a>
      </div>

      <ul class="list-unstyled components">

        <li>
          <a href="page9.php">👤 Users</a>
        </li>
        <li>
          <a href="p7.php">🔎 Products</a>
        </li>
        <li>
          <a href="order_list_p11.php">📝 Orders</a>
        </li>
        <li>
          <a href="#">💡 Feedback</a>
        </li>
        <li>
          <a href="#">📊 Sales</a>
        </li>
        <li>
          <a href="#">💲 Promotions</a>
        </li>
        <li>
          <a href="#">💳 Coupons</a>
        </li>
        <li>
          <a href="#">📃 Invoices</a>
        </li>
        <li>
          <a href="#">👭 Employees</a>
        </li>
        <li>
          <a href="#">🔧 Manager</a>
        </li>

      </ul>
    </nav>
    <div id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="background-color: #999999; color: #fff; text-align: center; font-size: 30px;">
                            <div class="card-header" >
              Back-Store Management
          </div>
          </div>	

          <div class="product-Details">

							<h4 class="Product-Details"> Edit product details </h4>
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
                  <h6 class="mb-0">Category</h6>
                </div>
                <div class="col-sm-9">
                <input id="category" name="category"  value= "<?php  echo $product['category']?>">

                  </div>
                </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <h6 class="mb-0">Product Name</h6>
                </div>
                <div class="col-sm-9">
                <input id="name" name="name" type="text"  value= "<?php  echo $product['name']?>">
                  </div>
                </div>


                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Brand Name</h6>
                  </div>
                  <div class="col-sm-9">
                  <input id="brand" name="brand" type="text"  value= "<?php  echo $product['brand']?>">
                    </div>
                  </div>



                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Product Description</h6>
                    </div>
                    <div class="col-sm-9">
                      <textarea id="description" name="description" style="height:200px"
                      value= "<?php  echo $product['description']?>"> 
                      </textarea>
                
                    </div>
                      </div>

                    <div class="row mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Product ID</h6>
                      </div>
                      <div class="col-sm-9">
                      <input id="id" name="id" type="text"
                      value= "<?php  echo $product['id']?>"> 
                     
                      
                        </div>
                      </div>


                      <div class="row mb-3">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Stock Quantity </h6>
                        </div>
                        <div class="col-sm-9">
                        <input id="qInStock" name="qInStock" type="number"
                        value= "<?php  echo $product['qInStock']?>"
                        >

                          </div>
                            </div>


                        <div class="row mb-3">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Product Weight </h6>
                          </div>
                           <div class="col-sm-9">

                          <input id="weight" name="weight" type="number"
                          value= "<?php  echo $product['weight']?>"
                          >

                               </div>
                                  </div>


                       <div class="row mb-3">
                     <div class="col-sm-3">
                 <h6 class="mb-0">Price</h6>
              </div>
                  <div class="col-sm-9">
                <input id="price" name="price" type="text" value= "<?php  echo $product['price']?>">
                    </div>
  </div>
  <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Sale</h6>
								</div>
								<div class="col-sm-9">

                 <label class="container">Yes
                    <input type="checkbox" checked="checked" name="isOnSale" value= "<?php  echo $product['isOnSale']?>">
                    <span class="checkmark"></span>
                  </label>

                  <label class="container">No
                    <input type="checkbox" name = " isOnSale" value= "<?php  echo $product['isOnSale']?>" >
                    <span class="checkmark"></span>
                  </label> <br>

                  </div>
                  <div class="row mb-3">
                								<div class="col-sm-3">
                									<h6 class="mb-0">Sale's last day</h6>
                								</div>
                								<div class="col-sm-9">
                									  <input type="date" id="offerExpiry" name="offerExpiry" value= "<?php  echo $product['offerExpiry']?>" >
                								</div>
                							</div>
                              <div class="row mb-3">
              								<div class="col-sm-3">
              									<h6 class="mb-0"> Sale items minimum quantity</h6>
              								</div>
              								<div class="col-sm-9">
              								  <input id="saleQuantity" name="saleQuantity" type="number" value= "<?php  echo $product['saleQuantity']?>">
              								</div>
              							</div>

                            <div class="row mb-3">
              <div class="col-sm-3">
                <h6 class="mb-0">Sale price for minimum quantity</h6>
              </div>
              <div class="col-sm-9">
                <input id="salePrice" name="salePrice" type="text"  value= "<?php  echo $product['salePrice']?>">
              </div>
            </div>
            <div class="row mb-3">
            								<div class="col-sm-3">
            									<h6 class="mb-0">Price per weight</h6>
            								</div>
            								<div class="col-sm-9">
            								  <input id="pricePerWeight" name="pricePerWeight" type="text" value= "<?php  echo $product['pricePerWeight']?>" >
            								</div>
            							</div>
                          <div class="row mb-3">
              								<div class="col-sm-3">
              									<h6 class="mb-0">Product images</h6>
              						 		</div>
              								<div class="col-sm-9">
                                              <input type="text" id="image" name="image" value= "<?php echo "img/".$product['image']?>" >
                                                        								</div>
              							</div>


                  <br>

                  <div class="row mb-3">
													<div class="col-sm-3"></div>
														<div class="col-sm-9">
															<a href="p7.php"> <input type="submit" value="Save Changes" name="savebutton"></a>
														</div>
												</div>
									 </div>
                </form>






          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>

