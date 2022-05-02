<?php
    include "productfunctions.php";
    $products=getProducts();
?>
<!DOCTYPE html>
<html lang="en">
    <body>
        

    </body>
</html>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add or Edit Products</title>


    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!--Custom CSS -->
    <link rel="stylesheet" href="Page7-sidebar.css">
    <link rel="stylesheet" href="Page7-main.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
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

                <?php
                    session_start();
        
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {          
            echo "Welcome " . $_SESSION['email'] . "!";
        }
        ?>

        <!-- redirects back to login page and cancels session-->
        <a href='logout.php'>Logout</a>


                    <div class="card"  style="background-color: #999999; color: #fff; text-align: center; font-size: 30px;" class="card-header">
                            Back-Store Management
                        </div>
                        <div class="card-body">

                            <div class="d-flex justify-content-between my-3">


                                <ul class="nav nav-tabs" style="border-color: #000000;">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="page9.php">Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="p7.php">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="order_list_p11.php">Orders</a>
                                    </li>
                                </ul>

                                <form class="d-flex">
                                    <input class="form-control me-2 search-font-size" style="width: 200px" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success search-font-size" type="submit" style="background-color: #000000; color: #fff; border-color: transparent;">Search</button>
                                </form>
                            </div>
                            <div class="table-container">
                            <table class="table-of-products">
                              <thead class="thead-infos">
                                <tr>
                                  <th class="th-infos">Product Name</th>
                                  <th class="th-infos">Product Brand</th>
                                  <th class="th-infos">Product ID</th>
                                  <th class="th-infos">Product Description</th>
                                  <th class="th-infos">Product Images</th>
                                  <th class="th-infos">Quantity in Stock</th>
                                  <th class="th-infos">Weight/Size</th>
                                  <th class="th-infos">Price</th>
                                  <th class="th-infos">Item on Sale?</th>
                                  <th class="th-infos">Sale's Last Day</th>
                                  <th class="th-infos">Sale Price's Minimum Quantity</th>
                                  <th class="th-infos">Sale Price for Minimum Quantity</th>
                                  <th class="th-infos">Price per Weight/Size</th>
                                  <th class="th-infos">Modifications</th>
                                </tr>
                              </thead>
                              <tbody class="tbody-products">
                              <?php foreach($products as $product) : ?>
                                <tr>
                                    <td class="td-products"><?php echo $product['name'] ?></td>
                                    <td class="td-products"><?php echo $product['brand'] ?></td>
                                    <td class="td-products"><?php echo $product['id'] ?></td>
                                    <td class="td-products"><?php echo $product['description'] ?></td>
                                    <td class="td-products">
                                            <div class="product-images-container">
                                                <img src="<?php echo $product['image'] ?>" alt="" width="50" height="50" />
                                                <a href="page8-EditProducts.php?id=<?php echo $product['id'] ?>"><button class="alternate-product-image-button">Others</button></a>
                                            </div>
                                        </td>
                                    <td class="td-products"><?php echo $product['qInStock'] ?></td>
                                    <td class="td-products"><?php echo $product['weight'] ?></td>
                                    <td class="td-products"><?php echo $product['price'] ?></td>
                                    <td class="td-products"><?php echo $product['isOnSale'] ?></td>
                                    <td class="td-products"><?php echo $product['offerExpiry'] ?></td>
                                    <td class="td-products"><?php echo $product['saleQuantity'] ?></td>
                                    <td class="td-products"><?php echo $product['salePrice']?></td>
                                    <td class="td-products"><?php echo $product['pricePerWeight'] ?></td>
                                    <td class="td-products">
                                            <div class="button-container">
                                            <a href="page8-EditProducts.php?id=<?php echo $product['id'] ?>"><button class="edit-delete-buttons"><i class="fas fa-edit"></i></button></a>
                                            <a href="Page8_DELETE.php?id=<?php echo $product['id'] ?>"><button class="edit-delete-buttons"><i class="fas fa-trash-alt"></i></button></a>
                                            </div>
                                        </td>
                                </tr>
                                <?php endforeach;;?>
                              </tbody>
                            </table>
                          </div>
                          <a href="page8.php"><button class="btn btn-outline-secondary" type="submit" style="background-color: #000000; color: #fff; border-color: transparent;">Add</button></a>
                        <a href="p7.php"><button class="btn btn-outline-secondary" type="submit" style="background-color: #000000; color: #fff; border-color: transparent; margin-left: 0.5em;">Save</button></a>
                       

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
