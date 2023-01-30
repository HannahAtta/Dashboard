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
        <a class= "active d-flex align-center fs-14 c-white rad-6 p-10" href="reporting.php">
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
              <i class="fa-regular fa-credit-card fa-fw"></i>
            </span>
            <div class="key p-relative">Reporting</div>
          </div>
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Search" />
          </div>
        </div>
      <!-- end head -->
      <div class="Reporting p-20 bg-white rad-10 m-20">
        <div class="p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Reporting</h2>
        </div>
        <div id="line"></div>
      </div>
    </div>
</div>
   
    <script src="dist/apexcharts.js"></script>
      <script>
      var options = {
        series: [{
          // data : data.slice()
          data: [80,80,80,90]
        }],
        chart: {
          id: 'realtime',
          height: 550,
          type: 'line',
        animations: {
          enabled: true,
          easing:'linear',
          dynamicAnimation: {
            speed: 1000
          }
        },
        toolbar: {
          show: false
        },
        zoom: {
          enabled: false
        }
       },
       dataLabels: {
        enabled :false
       },
       stroke: {
        curve: 'smooth'
       },
       title: {
        text: 'Reporting',
        align: 'center'
       },
       markers: {
        size: 0
       },
       xaxis: {
        type: 'datetime',
        // range: XAXISRANGE,
       },
       yaxis: {
        max: 100
       },
       legend: {
        show: false
       },
      };

      var chart = new ApexCharts(document.querySelector("#line"), options);
      chart.render();

      // window.setInterval(function (){
      //   getNewSeries(lastDate, {
      //     min: 10,
      //     max: 90
      //   })
      //   chart.updateSeries([{
      //     data: data
      //   }])
      // }, 1000)

    </script>
</body>
</html>