<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <!-- <script src="js/test.js"></script> -->
    <!-- <script src="js/jquery-1.12.1.min.js"></script> -->

  </head>
<body>
<div class="page d-flex">
  <div class="sidebar bg-black p-20 p-relative c-white">
    <h3 class="p-relative txt-c mb-25">Hannah</h3>
    <ul>
        <li>
        <a class= "active d-flex align-center fs-14 c-white rad-6 p-10" href="index.php">
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
              <i class="fa fa-home fa-lg"></i>
            </span>
            <div class="key p-relative">Dashboard</div>
          </div>
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Search" />
          </div>
        </div>

        <div class="wrapper d-grid gap-20">
          <!-- Start Welcome Widget -->
          <div class="one">
            <div class="welcome p-20 bg-white rad-10 txt-c-mobile block-mobile">
              <div id="line">
                
              </div>
          </div>
        </div>

    <div class="two">
      <div class="tickets p-20 bg-white rad-10">
        <div class="target mt-0">
            <h5 class="mt-0 mb-20s">Targets</h5>
               <!-- <div class="border"></div> -->
            <div class="target-row mb-20 green center-flex">
              <div class="details">
                <span class="fs-14 c-grey">Won</span>
                <span class="d-block mt-5 mb-10 fw-bold">$20.000</span>
                <div class="progress p-relative">
                  <span class="bg-green green" style="width: 80%">
                    <span class="bg-green">80%</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="target-row mb-20 blue center-flex">
              <div class="details">
                <span class="fs-14 c-grey">Sales</span>
                <span class="d-block mt-5 mb-10 fw-bold">$10.000</span>
                <div class="progress p-relative">
                  <span class="bg-blue blue" style="width: 90%">
                    <span class="bg-blue">90%</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="target-row mb-20 red center-flex">
              <div class="details">
                <span class="fs-14 c-grey">Lose</span>
                <span class="d-block mt-5 mb-10 fw-bold">$7.000</span>
                <div class="progress mb-10 p-relative">
                  <span class="bg-red red" style="width: 50%">
                    <span class="bg-red">50%</span>
                  </span>
                </div>
              </div>
            </div>
          <div class="search-items">
                <h5 class="mt-0 mb-20">Avilable Product</h5>
                <div class="items d-flex space-between pt-15 pb-15">
                  <span>Computer</span>
                  <span class="fs-13 bg-green c-white btn-shape">220</span>
                </div>
                <div class="items d-flex space-between pt-15 pb-15">
                  <span>Phone</span>
                  <span class="bg-green c-white btn-shape fs-13">180</span>
                </div>
                <div class="items d-flex space-between pt-15 pb-15">
                  <span>Desktop</span>
                  <span class="bg-green c-white btn-shape fs-13">160</span>
                </div>
                <div class="items d-flex space-between pt-15 pb-15">
                  <span>labtop</span>
                  <span class="bg-green c-white btn-shape fs-13">145</span>
                </div>
            </div>
         </div>
        <div class="quick-draft mt-20">
          <h5 class="mt-0 mb-25">Quick Idea</h5>
           <form>
            <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text" placeholder="Name" />
            <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text" placeholder="Title" />
            <textarea class="text d-block mb-20 w-full p-15 b-none bg-eee rad-6" placeholder="Your Idea"></textarea>
            <input class="save d-block fs-14 bg-green c-white b-none w-fit btn-shape" type="submit" value="Save" />
          </form>
        </div>
      </div>
    </div>
       <div class="three">
        <div class="welcom bg-white p-20 rad-10 txt-c-mobile block-mobile">
          <div class="card">
            <div class="card-inner txt-c">
              <i class="fa-solid fa-home fa-2x mt-0 c-grey"></i>
              <span class="d-block fw-bold c-grey fs-25 mt-10">2240</span>
              <p class="text-primary mt-10 c-grey fs-15">PRODUCTS</p>
            </div>
          </div>
        </div>
       </div>

       <div class="four">
        <div class="welcom bg-white p-20 rad-10">
          <div class="card">
            <div class="card-inner txt-c">
            <i class="fa-solid fa-bag-shopping fa-2x mt-0 c-grey"></i>
             <span class="d-block mt-10 c-grey fs-25 fw-bold">1190</span>
              <p class="text-primary mt-10 c-grey fs-15">SALES ORDER</p>
            </div>
          </div>
        </div>
      </div>

        <div class="five">
          <div class="welcom bg-white p-20 rad-10 txt-c-mobile block-mobile">
            <div class="card">
              <div class="card-inner txt-c">
              <i class="fa-solid fa-cart-flatbed fa-2x mt-0 c-grey"></i>
              <span class="d-block mt-10 c-grey fs-25 fw-bold">1540</span>
                <p class="text-primary mt-10 c-grey fs-15">INVENTORY</p>
               
              </div>
               
            </div>
          </div>
      </div>

      <div class="six">
          <div class="charts-card p-20 space-between bg-white rad-10 txt-c-mobile block-mobile">
             <div>
               <h5  class="m-0 txt-c">Top 5 Product</h5>
             </div>
             <div id="bar-chart"></div>
          </div>
      </div>
      <div class="seven">
          <div class="charts-card p-20 space-between bg-white rad-10 txt-c-mobile block-mobile">
              <div>
                <h5  class="m-0 txt-c">Parchase and Sales Order</h5>
            </div>
          <div id="area-charts">

          </div>
        </div>
      </div>
    </div>
</div>
<script src="dist/apexcharts.js"></script>
<script>
      var barChartOptions = {
        series: [{
          data: [10, 8, 6, 4, 2]
        }],
        chart:{
          type: 'bar',
          height: 350,
          toolbar: {
            show: false
          },
        },
        colors: [
          "#246dec",
          "#cc3c43",
          "#367952",
          "#f5b741",
          "#4f35a1"
        ],
        plotOptions: {
          bar:{
            distributed: true,
            borderRadius: 4,
            horizontal: false,
            columnWidth: '40%',
          }
        },
        dataLabels:{
          enabled: false
        },
        legend: {
          show: false
        },
        xaxis: {
          categories: ['laptop', 'phone', 'honitor','headphone','camera' ],
        },
        yaxis:{
          title: {
            text: "count"
          }
        }
      };
      var barChart = new ApexCharts(document.querySelector("#bar-chart"),barChartOptions);
      barChart.render();
    //three
      var areaChartOptions = {
        series: [{
          name : 'Purchase Orders',
          data: [31, 40, 28, 51, 42, 109, 100]
        }, {
          name: 'Sales Orders',
          data : [11, 32, 45, 32, 34, 52, 41]
        }],
        chart:{
          type: 'area',
          height: 350,
          toolbar:{
            show: false,
          },
        },
        colors :["#4f35a1" , "#246dec"],
        dataLabels: {
          enabled:false,
        },
        stroke : {
          curve : 'smooth'
        },
        labels:["Jan","Feb","Mar","Apr","May","Jun","Jul"],
        markers : {
          size: 0
        },
        yaxis: [
        {
          title: {
            text: "Purchase Orders",
          },
        },
        {
          opposite: true,
          title: {
            text: 'Sales Orders',
          },
        },
      ],
      tooltip: {
        shared : true,
        intersect : false,
      }
      };
      var areaChart = new ApexCharts(document.querySelector("#area-charts"),areaChartOptions);
      areaChart.render();

      //four
      var optionline = {
        series : [{
          name : "Product",
          data : [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
        chart : {
          height : 250,
          type : 'line',
          zoom : {
            enabled : false
          }
        },
        dataLabels : {
          enabled : true
        },
        stroke : {
          curve : 'straight'
        },
        title : {
          text : 'Product Trends by Month',
          align: 'center'
        },
        grid: {
          row : {
            colors : ['#f3f3f3', 'transparent'],
            opacity : 0.5
          },
        },
        xaxis : {
          categories : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Aug', 'Sep'],
        }
      };

      var chartline = new ApexCharts(document.querySelector("#line"), optionline);
      chartline.render();

    </script>
</body>
</html>