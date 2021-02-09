<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scehdule Dashboard</title>

  <!-- font awesome font link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- css style link -->
  <link rel="stylesheet" href="/my_schedule/css/reset.css">
  <link rel="stylesheet" href="/my_schedule/css/style.css">
  <link rel="stylesheet" href="/my_schedule/css/media.css">

  <!-- script file load  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
  <script src="/my_schedule/js/custom.js"></script>
  <script src="/my_schedule/js/piechart.js"></script>
</head>
<body>
  <!-- All contents are wrap inside wrap class -->
  <div class="wrap">
    <header>
      <div class="center headerWrap">
        <span class="hollow"></span>
        <h1>Scehdule Dashboard</h1>
        <div class="mIcon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>
    <!-- container -->
    <div class="center">
      <div class="container">
        <div class="item">
          <section class="graph-circle">
            <div class="circle-graph-container">
              <div class="circle-graph easyPieChart" data-percent="60">
                <p>60%</p>
              </div>
            </div>
            <p class="totalTit">Total Process Rates</p>
          </section>
        </div>
        <div class="item subPfBar">
          <div class="pfImg">
            <i class="fa fa-database"></i>
          </div>
          <div class="pfContents">
            <h3>Database Project</h3>
            <p>Progress Rate : <b class="rateNum">90</b>%  |  Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class="pfBar"></span>
            </div>
          </div>
        </div>
        <div class="item subPfBar">
          <div class="pfImg">
            <i class="fa fa-thermometer-half"></i>
          </div>
          <div class="pfContents">
            <h3>API Project</h3>
            <p>Progress Rate : <b class="rateNum">70</b>%  |  Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class="pfBar"></span>
            </div>
          </div>
        </div>
        <div class="item subPfBar">
          <div class="pfImg">
            <i class="fa fa-clone"></i>
          </div>
          <div class="pfContents">
            <h3>Renewal Project</h3>
            <p>Progress Rate : <b class="rateNum">30</b>%  |  Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class="pfBar"></span>
            </div>
          </div>
        </div>
        <div class="item subPfBar">
          <div class="pfImg">
            <i class="fa fa-bar-chart-o"></i>
          </div>
          <div class="pfContents">
            <h3>Web pranning Project</h3>
            <p>Progress Rate : <b class="rateNum">10</b>%  |  Last Update : <b>2021-02-09</b></p>
            <div class="pfBarBox">
              <span class="pfBar"></span>
            </div>
          </div>
        </div>
        <div class="item"></div>
      </div>
    </div>
    <footer></footer>
  </div>
</body>
</html>