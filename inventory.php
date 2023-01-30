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
        <a class= "active d-flex align-center fs-14 c-white rad-6 p-10" href="inventory.php">
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
              <i class="fa-solid fa-cart-flatbed fa-fw"></i>
            </span>
            <div class="key p-relative">Inventory</div>
          </div>
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Search" />
          </div>
        </div>
      <!-- end head -->
      <!-- <h1 class="p-relative">Dashboard</h1> -->
          <!-- Start Welcome Widget -->
        <div class="inventory-page d-grid m-20 gap-20">
          <div class="inventory bg-white rad-6 p-20 p-relative">
            <div class="txt-c">
              <h4 class="m-0">Receipts</h4>
              <p class="c-grey fs-13 mt-5 mb-0">YourCompany</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>99 Waiting </span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>15 Late </span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>25 Back Orders </span>
              </div>
              <span class="vip fw-bold c-orange">Mean</span>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Last update 02/10/2021</span>
              <div>
                <a class="bg-green c-white btn-shape" href="profile.html">visit</a>
                <a class="bg-red c-white btn-shape" href="#">Updata</a>
              </div>
            </div>
          </div>
          <div class="inventory bg-white rad-6 p-20 p-relative">
            <div class="txt-c">
              <h4 class="m-0">Dropship</h4>
              <p class="c-grey fs-13 mt-5 mb-0">YourCompany</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>0 Waiting </span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>0 Late </span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>0 Back Orders </span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Last update 02/10/2021</span>
              <div>
                <a class="bg-green c-white btn-shape" href="profile.html">visit</a>
                <a class="bg-red c-white btn-shape" href="#">Updata</a>
              </div>
            </div>
          </div>
          <div class="inventory bg-white rad-6 p-20 p-relative">
            <div class="txt-c">
              <h4 class="m-0">Manufacturing</h4>
              <p class="c-grey fs-13 mt-5 mb-0">YourCompany</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>9 Waiting </span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>0 Late </span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>0 Back Orders </span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Last update 02/10/2021</span>
              <div>
                <a class="bg-green c-white btn-shape" href="profile.html">visit</a>
                <a class="bg-red c-white btn-shape" href="#">Updata</a>
              </div>
            </div>
          </div>
          <div class="inventory bg-white rad-6 p-20 p-relative">
            <div class="txt-c">
              <h4 class="m-0">PoS Orders</h4>
              <p class="c-grey fs-13 mt-5 mb-0">YourCompany</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>9 Waiting </span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>0 Late </span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>88 Back Orders </span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Last update 02/10/2021</span>
              <div>
                <a class="bg-green c-white btn-shape" href="profile.html">visit</a>
                <a class="bg-red c-white btn-shape" href="#">Updata</a>
              </div>
            </div>
          </div>
          <div class="inventory bg-white rad-6 p-20 p-relative">
            <div class="txt-c">
              <h4 class="m-0">Delivery Orders</h4>
              <p class="c-grey fs-13 mt-5 mb-0">YourCompany</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>22 Waiting </span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>105 Late </span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>0 Back Orders </span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Last update 02/10/2021</span>
              <div>
                <a class="bg-green c-white btn-shape" href="profile.html">visit</a>
                <a class="bg-red c-white btn-shape" href="#">Updata</a>
              </div>
            </div>
          </div>
          <div class="inventory bg-white rad-6 p-20 p-relative">
            <div class="txt-c">
              <h4 class="m-0">Internal Transfers</h4>
              <p class="c-grey fs-13 mt-5 mb-0">YourCompany</p>
            </div>
            <div class="icons fs-14 p-relative">
              <div class="mb-10">
                <i class="fa-regular fa-face-smile fa-fw"></i>
                <span>19 Waiting </span>
              </div>
              <div class="mb-10">
                <i class="fa-solid fa-code-commit fa-fw"></i>
                <span>165 Late </span>
              </div>
              <div>
                <i class="fa-regular fa-newspaper fa-fw"></i>
                <span>250 Back Orders </span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Last update 02/10/2021</span>
              <div>
                <a class="bg-green c-white btn-shape" href="profile.html">visit</a>
                <a class="bg-red c-white btn-shape" href="#">Updata</a>
              </div>
            </div>
          </div>
        </div>
         
<!-- end wrapp -->
    </div>
</div>
    
</body>
</html>