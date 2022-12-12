<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Registry of Inhabitants and Migrants</title>
    <link rel="stylesheet" href="style_website.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Borongan Population', 'Gender'],
          ['Male',     32000],
          ['Female',      38000]
        ]);

        var options = {
          title: 'Gender Ratio'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
  
        function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Barangay', '2020 Population'],
        ['Maypangdan', 5400],
        ['Tabunan', 4700],
        ['Sta. Fe', 3600],
        ['San Saturnino', 2900],
        ['Bugas', 2600]
      ]);

      var options = {
        title: 'Largest Population by Barangay',
        chartArea: {width: '50%'},
        isStacked: true,
        hAxis: {
          title: 'Total Population',
          minValue: 0,
        },
        vAxis: {
          title: 'Barangay'
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
      </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
     google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(line_graph);

function line_graph() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Catholiscism');
      data.addColumn('number', 'Other Christian Denomination');
      data.addColumn('number', 'None Christian Religion');

      data.addRows([
        [0, 0, 0, 0],    [10, 20, 25, 10],   [20, 32, 29, 15],  [30, 39, 29, 18],   [40, 40, 35, 20],  [50, 45, 35, 20],
        [60, 45, 40, 21]
      ]);

      var options = {
        title:'Percentage of Population By Religion',
        hAxis: {
          title: 'Age Group'
        },
        vAxis: {
          title: 'Percentage'
        },
        series: {
          1: {curveType: 'function'}
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div1'));
      chart.draw(data, options);
    }
    </script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Age Group', 'Waray-Waray', 'Bisaya', 'Others'],
          ['10',  3000,1400, 600],
          ['20',  20000,7000,3000],
          ['30',  16000,8000,2000],
          ['40',  7000,2000,1000],
          ['50',  3500,1000,500],
          ['60',  1500,400,100]
        ]);

        var options = {
          title: 'Population by Ethnicity',
          hAxis: {title: 'Age Group',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
    <section class="subheader2"> 
   <div class="sidenav"> 
   <div class="bor1">
            <a href="dashboard.php"><img src="images/Borongan_City_Seal-removebg-preview.png"></a>
        </div>
        <div class="republic">
                    <h1><span style="color:#FFFF"> REPUBLIC OF THE PHILIPPINES</span><BR>
                        <span style="color:#FFFF">CITY OF BORONGAN</span></h1>
        </div>
        <div class="title2">
             <h1>REGISTRATION OF<br>INHABITANTS AND MIGRANTS</h1>
        </div>
        <div class="navlinks">
            <a href="dashboard.php" class="navlinks1"> DASHBOARD</a><br>
            <a href="" class="navlinks2"> SEARCH</a>
        </div>
        <div class="da1">
                <img src="images/da.png">
            </div>
   </div>
        <div class="head">
            <div class="wel">
                <h1>WELCOME</h1>
            </div>
            <div class="bor2">
                <h1>
                <span style="color:#38B524">CITY OF </span>
                <span style="color:#FF2E71">BORONGAN</span>
                </h1>
            </div>
        </div>
        <div id="piechart" class="chart1"></div>
        <div id="chart_div" class="chart2"></div>
        <div id="chart_div1" class="chart3"></div>
        <div id="chart_div2" class="chart4"></div>
    <div class="footerlinks1">
            <div class="visit">
                <h2>VISIT US</h2>
                <p>City Hall<br>Victoria corner Cardona Street, Barangay E,<br>City of Borongan, Eastern Samar, Philippines</p>
            </div>
            <div class="contact">
                <h3>CONTACT US</h3>
                <p>borongancityinfo@gmail.com</p>
            </div>
            <div class="government">
                <h3>GOVERNMENT LINKS</h3>
                
            </div>
            <div class="seal">
                <img src="images/seal.png";
            </div>
            <div class="sealdscrpt">
                 <p>All content is in public domain<br>unless otherwise stated</p>
            </div>
    </div>
</body>
</html>
