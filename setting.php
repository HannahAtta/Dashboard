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
        <a class= "active d-flex align-center fs-14 c-white rad-6 p-10" href="setting.php">
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
              <i class="fa-solid  fa-gear fa-fw"></i>
            </span>
            <div class="key p-relative">Setting</div>
          </div>
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Search" />
          </div>
        </div>
      <!-- end head -->
      <!-- <h1 class="p-relative">Dashboard</h1> -->
          <!-- Start Welcome Widget -->
      <div class="settings-page m-20 d-grid gap-20">
      <div class="p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">General Info</h2>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="first">First Name</label>
              <input
                class="b-none border-ccc p-10 rad-6 d-block w-full"
                type="text"
                id="first"
                value="hanna"
                disabled
              />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-5" for="last">Last Name</label>
              <input
                class="b-none border-ccc p-10 rad-6 d-block w-full"
                id="last"
                type="text"
                value="atta"
                disabled
              />
            </div>
            <div>
              <label class="fs-14 c-grey d-block mb-5" for="email">Email</label>
              <input
                class="email b-none border-ccc p-10 rad-6 w-full mr-10"
                id="email"
                type="email"
                value="hanna@nn.sa"
                disabled
              />
            </div>
          </div>
                    <!-- Start Settings Box -->
            <div class="p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Chang Info</h2>
            <div class="sec-box mb-15 between-flex">
              <div>
                <span>Password</span>
                <p class="c-grey mt-5 mb-0 fs-13">Last Change On 25/10/2021</p>
              </div>
              <a class="button bg-green c-white btn-shape" href="#">Change</a>
            </div>
            <div class="sec-box mb-15 between-flex">
              <div>
                <span>Full Name</span>
                <p class="c-grey mt-5 mb-0 fs-13">Chang your name</p>
              </div>
              <a class="button bg-green c-white btn-shape" href="#">Change</a>
            </div>
            <div class="sec-box between-flex">
              <div>
                <span>Email</span>
                <p class="c-grey mt-5 mb-0 fs-13">Chang your Email</p>
              </div>
              <a class="bg-eee c-black btn-shape" href="#">Change</a>
            </div>
          </div>
          <!-- End Settings Box -->
          <!-- Start Settings Box -->
           <!-- Start Settings Box -->
           <div class="widgets-control p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Widgets Control</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Hide/Show Widget</p>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="one" checked />
              <label for="one">Point Of Sale</label>
            </div>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="two" />
              <label for="two">Drop Shiping</label>
            </div>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="three" checked />
              <label for="three">Manufacturing</label>
            </div>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="four" checked />
              <label for="four">Delivery Order</label>
            </div>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="five" />
              <label for="five">Internal Transfer</label>
            </div>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="six" checked />
              <label for="six">Scrap Order</label>
            </div>
          </div>
          <!-- End Settings Box -->
          <div class="p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Inventory Control</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Control The Inventory If There Is Maintenance</p>
            <div class="mb-15 between-flex">
              <div>
                <span>Inventory One</span>
                <p class="c-grey mt-5 mb-0 fs-13">Open/Close Inventory And Type The Reason</p>
              </div>
              <div>
                <label>
                  <input class="toggle-checkbox" type="checkbox" checked />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
            <div class="mb-15 between-flex">
              <div>
                <span>Inventory Two</span>
                <p class="c-grey mt-5 mb-0 fs-13">Open/Close Inventory And Type The Reason</p>
              </div>
              <div>
                <label>
                  <input class="toggle-checkbox" type="checkbox" checked />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
            <div class="mb-15 between-flex">
              <div>
                <span>Inventory Three</span>
                <p class="c-grey mt-5 mb-0 fs-13">Open/Close Inventory And Type The Reason</p>
              </div>
              <div>
                <label>
                  <input class="toggle-checkbox" type="checkbox" checked />
                  <div class="toggle-switch"></div>
                </label>
              </div>
            </div>
          </div>
      </div>
<!-- end wrapp -->

    </div>
</div>
    
</body>
</html>