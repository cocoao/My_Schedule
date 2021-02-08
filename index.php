<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scehdule Dashboard</title>
  <link rel="stylesheet" href="/my_schedule/css/reset.css">
  <link rel="stylesheet" href="/my_schedule/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
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
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
      </div>
    </div>
  </div>
</body>
</html>