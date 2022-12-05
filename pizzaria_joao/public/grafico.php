<?php
include_once('../config.php');
include_once('./template/header.php');
include_once('../process/Pedidos.php');
include_once('../process/Grafico.php');
if($_SESSION['perm']!=1){
    header('Location:../public/login.php');
}
?>
<br>
<br>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="row align-items-center">
    <div class="col-6">
      <h3 style="text-align: center;">Gráfico das Bordas</h3>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Catupiry', <?php echo $_SESSION['bordaCatupiry'] ?>],
          ['Chocolate', <?php echo $_SESSION['bordaChocolate'] ?>],
          ['Cheddar', <?php echo $_SESSION['bordaCheddar'] ?>]
        ]);

        // Set chart options
        var options = {'title':'Bordas mais pedidas',
                       'width':1000,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div1"></div>
    </div>
    <div class="col-6">
      <h3 style="text-align: center;">Gráfico de Massas</h3>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Normal', <?php echo $_SESSION['massaNormal'] ?>],
          ['Temperada', <?php echo $_SESSION['massaTemperada'] ?>],
          ['Integral', <?php echo $_SESSION['massaComum'] ?>]
        ]);

        // Set chart options
        var options = {'title':'Massas mais pedidas',
                       'width':1000,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div2"></div>
    </div>
    <div class="col-6">
      <h3 style="text-align: center;">Gráfico de Sabores</h3>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Calabresa', <?php echo $_SESSION['saborCalabresa'] ?>],
          ['4 Queijos', <?php echo $_SESSION['saborQueijo'] ?>],
          ['Frango com catupiry', <?php echo $_SESSION['saborFrango'] ?>],
          ['Lombinho', <?php echo $_SESSION['saborLombinho'] ?>],
          ['Filé com Cheddar', <?php echo $_SESSION['saborFile'] ?>],
          ['Margherita', <?php echo $_SESSION['saborMarg'] ?>],
          ['Portuguesa', <?php echo $_SESSION['saborPortuguesa'] ?>]
        ]);

        // Set chart options
        var options = {'title':'Sabores mais pedidos',
                       'width':1000,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
      }
    </script>

    <div id="chart_div3"></div>
    </div>
    </div>
  </div> 