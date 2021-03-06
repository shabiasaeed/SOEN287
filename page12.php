<?php
include 'page12ADD.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit User Profile</title>


    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   

   <!--Custom CSS -->
    <link rel="stylesheet" href="./page12.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="index.html"><h3>ConUmart</h3></a>
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

	<div class="order">

        <div class="order-header">
            <h1>Back Store Management</h1>
            <h2>Order Setting</h2>
        </div>

		<div class="order-info">
            <div class="account-num">
                <h3>#Account</h3>
                <p>G932562471</p>
            </div>

            <div class="order-num">
                <h3>#Order</h3>
                <p>100521</p>
            </div>

            <div class="order-date">
			<h3>Order date</h3>
			<p>January 1, 2022</p>
            </div>

            <div class="order-total">
			<h3>Order total</h3>
			<p>12.55$</p>
            </div>
		</div>

		<div class="order-edit">
			<table>
				<tr>
					<th width="20%">Product</th>
					<!-- <th width="10%">Stock</th> -->
					<th width="10%">Item Price</th>
					<th width="10%">Qty</th>
					<!-- <th width="10%">Total</th> -->
                    <th width="10%">Remove</th>
				</tr>


                <!-- <?php 

                //foreach($items as $item){
                    //echo'<tr class="item1">';
                    //echo'<td class="product item1">'.$item['name'].'</td>';
                    //echo'<td class="price item1">'.$item['price'].'</td>';
                    //echo'<td class="quantity item1">';
                        //echo'<input type="number" min="1" value='.$item['quantity'].'>';
                    //echo'</td>';
                    //echo'<!-- <td class="total item1">10$</td> -->';
                    //echo'<td>';
                        //echo'<button>Remove</button>';
                    //echo'</td>';
                    //echo'</tr>';
                //}
                ?>  -->

                <tr class="item1">
                    <td class="product item1">Chicken breast</td>
                    <td class="price item1">1$</td>
                    <td class="quantity item1">
                        <input type="number" min="1" value="3">
                    </td>
                    <td>
                        <button>Remove</button>
                    </td>
                </tr>
                <tr class="item2">
                    <td class="product item2">Potato</td>
                    <td class="price item2">1$</td>
                    <td class="quantity item2">
                        <input type="number" min="1" value="2">
                    </td>
                    <td>
                        <button class="button remove">Remove</button>
                    </td>
                </tr>
			</table>
		</div>

        <div class="end">
            <a href="formAddItem.php"><button display="inline">Add item</button></a>
            <a href="order_list_p11.php"><button display="inline">Save</button></a>
        </div>

	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>