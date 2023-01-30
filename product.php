<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
    <!-- <link rel="stylesheet" href="css/font-awesome.css" /> -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <!-- <script src="js/test.js"></script> -->
    <!-- <script src="js/jquery-1.12.1.min.js"></script> -->

  </head>
<body>
<div class="page d-flex">
<div class="sidebar bg-black p-20 p-relative c-white">
    <h3 class="p-relative txt-c">Hannah</h3>
    <ul>
        <li>
        <a class= "d-flex align-center fs-14 c-white rad-6 p-10" href="index.php">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span class="hide-mobile">Dashboard</span>
            </a>
        </li>
        <li>
        <a class= "active d-flex align-center fs-14 c-white rad-6 p-10" href="product.php">
              <i class="fa-regular fa-file fa-fw"></i>
              <span>Product</span>
            </a>
        </li>
        <li>
        <a class= "d-flex align-center fs-14 c-white rad-6 p-10" href="inventory.php">
              <i class="fa-solid fa-cart-flatbed fa-fw"></i>
              <span>Inventory</span>
            </a>
        </li>
        <li>
        <a class= "d-flex align-center fs-14 c-white rad-6 p-10" href="purchase.php">
              <i class="fa-solid fa-diagram-project fa-fw"></i>
              <span>Purchase Order</span>
            </a>
        </li>
        <li>
        <a class= "d-flex align-center fs-14 c-white rad-6 p-10" href="salse.php">
              <i class="fa-solid fa-bag-shopping fa-fw"></i>
              <span >Salse Order</span>
            </a>
        </li>
        <li>
        <a class= "d-flex align-center fs-14 c-white rad-6 p-10" href="reporting.php">
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span >Reporting</span>
            </a>
        </li>
        <li>
        <a class= "d-flex align-center fs-14 c-white rad-6 p-10" href="setting.php">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>Setting</span>
            </a>
        </li>
    </ul>
</div>
    <div class="content w-full">
      <!-- start head -->
      <div class="head p-15 bg-white between-flex">
          <div class="icons d-flex align-center">
            <span class="notification p-relative">
              <i class="fa-regular fa-file fa-fw"></i>
            </span>
            <div class="key p-relative">Product</div>
          </div>
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Search" />
          </div>
        </div>
      <!-- end head -->
      <!-- <h1 class="p-relative">Dashboard</h1> -->
          <!-- Start Welcome Widget -->
        
          <div class="projects p-20 bg-white rad-10 m-20">
            <div class="d-flex space-between ">
          <h2 class="mt-0 mb-20">Product List</h2>
          <p class="mt-0 mb-20 label btn-shape bg-green c-white"><i class="fa fa-plus"></i> Add Product</p>
          </div>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Name</td>
                  <td>Salse Price</td>
                  <td>Cost</td>
                  <td>Quantity</td>
                  <td>Unit Of measure</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> <img src="imgs/team-01.png" alt="" /></td>
                  <td>Desk Pad</td>
                  <td>$5300</td>
                  <td>$1400</td>
                  <td>14</td>
                  <td>Units</td>
                </tr>
                <tr>
                  <td> <img src="imgs/team-01.png" alt="" /></td>
                  <td>Customizable Desk (CONFIG)</td>
                  <td>$8000</td>
                  <td>$7000</td>
                  <td>140</td>
                  <td>Units</td>
                </tr>
                <tr>
                  <td> <img src="imgs/team-01.png" alt="" /></td>
                  <td>Drawer</td>
                  <td>$3400</td>
                  <td>$4400</td>
                  <td>4</td>
                  <td>Units</td>
                </tr>
                <tr>
                  <td> <img src="imgs/team-01.png" alt="" /></td>
                  <td>Individual Workplace</td>
                  <td>$5000</td>
                  <td>$4000</td>
                  <td>4</td>
                  <td>Units</td>
                </tr>
                <tr>
                  <td> <img src="imgs/team-01.png" alt="" /></td>
                  <td>Bolt</td>
                  <td>$100</td>
                  <td>$400</td>
                  <td>10</td>
                  <td>Units</td>
                </tr>
                <tr>
                  <td> <img src="imgs/team-01.png" alt="" /></td>
                  <td>Desk Stand with Screen</td>
                  <td>$12000</td>
                  <td>$11000</td>
                  <td>5</td>
                  <td>Units</td>
                </tr>
                <tr>
                  <td> <img src="imgs/team-01.png" alt="" /></td>
                  <td>Corner Desk Black</td>
                  <td>$4400</td>
                  <td>$4000</td>
                  <td>134</td>
                  <td>Units</td>
                </tr>
                <tr>
                  <td> <img src="imgs/team-01.png" alt="" /></td>
                  <td>Cabinet with Doors</td>
                  <td>$500</td>
                  <td>$900</td>
                  <td>11</td>
                  <td>Units</td>
                </tr>
                <tr>
                  <td> <img src="imgs/team-01.png" alt="" /></td>
                  <td>Chicken Curry Sandwich</td>
                  <td>$300</td>
                  <td>$400</td>
                  <td>140</td>
                  <td>Units</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>




<!-- end wrapp -->
    </div>
</div>
    
</body>
</html>