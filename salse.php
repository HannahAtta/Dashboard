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
        <a class= "d-flex align-center fs-14 c-white rad-6 p-10" href="product.php">
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
        <a class= "active d-flex align-center fs-14 c-white rad-6 p-10" href="salse.php">
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
            <div class="key p-relative">Salse</div>
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
          <h2 class="mt-0 mb-20">Salse List</h2>
          <p class="mt-0 mb-20 label btn-shape bg-green c-white"><i class="fa-solid fa-plus fa-fw"></i> Add Product</p>
          </div>
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>Product Name</td>
                  <td>Salse Date</td>
                  <td>Client</td>
                  <td>Price</td>
                  <td>Count</td>
                  <td>Status</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Laptop</td>
                  <td>10 May 2022</td>
                  <td>Ministry</td>
                  <td>$5300</td>
                  <td>7</td>
                  <td>
                    <span class="label btn-shape bg-green c-white">Done</span>
                  </td>
                </tr>
                <tr>
                  <td>Desktop</td>
                  <td>12 Oct 2021</td>
                  <td>Omer Company</td>
                  <td>$1500</td>
                  <td>19</td>
                  <td><span class="label btn-shape bg-blue c-white">In Progress</span></td>
                </tr>
                <tr>
                  <td>Odoo App</td>
                  <td>05 Sep 2021</td>
                  <td>Bouba</td>
                  <td>$800</td>
                  <td>11</td>
                  <td><span class="label btn-shape bg-green c-white">Done</span></td>
                </tr>
                <tr>
                  <td>Website</td>
                  <td>22 May 2021</td>
                  <td>Mahmoud</td>
                  <td>$600</td>
                  <td>1</td>
                  <td><span class="label btn-shape bg-green c-white">done</span></td>
                </tr>
                <tr>
                  <td>Mobile App</td>
                  <td>24 May 2021</td>
                  <td>Sayed</td>
                  <td>$300</td>
                  <td>2</td>
                  <td><span class="label btn-shape bg-red c-white">Rejected</span></td>
                </tr>
                <tr>
                  <td>Arena Application</td>
                  <td>01 Mar 2021</td>
                  <td>Arena Company</td>
                  <td>$2600</td>
                  <td>5</td>
                  <td><span class="label btn-shape bg-green c-white">Done</span></td>
                </tr>
                <tr>
                  <td>Mobile App</td>
                  <td>24 May 2021</td>
                  <td>Sayed</td>
                  <td>$300</td>
                  <td>2</td>
                  <td><span class="label btn-shape bg-red c-white">Rejected</span></td>
                </tr>
                <tr>
                  <td>Arena Application</td>
                  <td>01 Mar 2021</td>
                  <td>Arena Company</td>
                  <td>$2600</td>
                  <td>5</td>
                  <td><span class="label btn-shape bg-green c-white">Done</span></td>
                </tr>
                <tr>
                  <td>Mobile App</td>
                  <td>24 May 2021</td>
                  <td>Sayed</td>
                  <td>$300</td>
                  <td>2</td>
                  <td><span class="label btn-shape bg-red c-white">Rejected</span></td>
                </tr>
                <tr>
                  <td>Arena Application</td>
                  <td>01 Mar 2021</td>
                  <td>Arena Company</td>
                  <td>$2600</td>
                  <td>5</td>
                  <td><span class="label btn-shape bg-green c-white">Done</span></td>
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