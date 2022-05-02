<?php
function getOrders()
{
    return json_decode(file_get_contents('OrdersDB.json'), true);
}

$orders=getOrders();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>List of Orders</title>


    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!--Custom CSS -->
    <link rel="stylesheet" href="css_style_sheets/backstore_stylesheet.css">

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
                    <div class="card"  style="background-color: #999999; color: #fff; text-align: center; font-size: 30px;>
                        <div class="card-header">
                            Back-Store Management
                        </div>
                        <div class="card-body">

                            <div class="d-flex justify-content-between my-3">
                                <ul class="nav nav-tabs" style="border-color: #000000;">
                                    <li class="nav-item">
                                        <a class="nav-link" href="page9.php">Users</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="p7.php">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="order_list_p11.php">Orders</a>
                                    </li>
                                </ul>

                                <form class="d-flex">
                                    <input class="form-control me-2" style="width: 300px" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit" style="background-color: #000000; color: #fff; border-color: transparent;">Search</button>
                                </form>
                            </div>

                            <table class="table table-bordered table-hover table-sm">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Account number</th>
                                    <th scope="col">Order number</th>
                                    <th scope="col">Order details</th>
                                    <th scope="col">Order date</th>
                                    <th scope="col">Order total</th>
                                    <th scope="col">Modification</th>
                                </tr>
        
                                <?php foreach ($orders as $order) : //USERS?? ?> 
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <?php
                                        echo $order['accountnumber'];
                                        ?>

                                    </th>
                                    <td>
                                        <?php
                                        foreach ($order['orderdetails'] as $order_details):
                                            echo $order_details['ordernumber'];//ORDER NUMBER
                                        endforeach;;
                                        ?>
                                    
                                    </td>
                                    <td>		
                                        <?php
                                        foreach ($order['orderdetails'] as $order_details):
                                            foreach ($order_details['ordernum'] as $order_num):
                                                foreach($order_num['items'] as $order_items):
                                                    echo $order_items['name'];
                                                    echo ", ";
                                                endforeach;;
                                            endforeach;;
                                        endforeach;;

                                        ?>
									</td>    
                                    <td>
                                        <?php
                                        foreach ($order['orderdetails'] as $order_details):
                                            echo $order_details['orderdate']; //ORDERDATE
                                        endforeach;;
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        foreach ($order['orderdetails'] as $order_details):
                                            echo $order_details['ordertotal']; //ORDERTOTAL
                                        endforeach;;                                        
                                        ?>
                                    </td>
                                    <td>
                                    <!-- PUT THE EDIT ORDER PAGE HERE -->
                                        <a href="page12.php?Id=<?php echo $user['accountnumber']?>"> 
                                            <button type="button" style="background-color: #000000; color: #fff; border-color: #fff;height:40px;width:50px" name="edituserbutton">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>

                                        <!-- //PUT THE DELETE ORDER PAGE HERE -->
                                 <a href="Page12_DELETE.php?Id=<?php echo $user['accountnumber'] ?>"> 
                                        <button type="button" style="background-color: #000000; color: #fff; border-color: #fff;height:40px;width:50px">
                                            <i class="fas fa-trash-alt">    
                                            </i>
                                        </button>
                                    </td>
                                </tr>
                                   
                                </tbody>
                                <?php endforeach;;?>
                            </table>
						
                            <!-- ADD BUTTON -->
							<a href="page12.php"> 
                                <button class="btn btn-outline-secondary" type="submit" style="background-color: #000000; color: #fff; border-color: transparent;">Add</button></a>
							
                            <!-- SAVE BUTTON -->
                            <a href="page12.php">
                                <button class="btn btn-outline-secondary" type="submit" style="background-color: #000000; color: #fff; border-color: transparent; margin-left: 0.5em;">Save</button></a>
						
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