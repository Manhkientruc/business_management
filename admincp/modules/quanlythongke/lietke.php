<!DOCTYPE html>
<html>
<head>
  <style>
    .chart-container {
      width: 1000px;
      height: 300px;
    }
    .chart-row {
      display: flex;
    }
    .chart-row .chart-container {
      margin-right: 50px;
      margin-left: 50px;
      margin-bottom: 50px;
      margin-top: 50px;
    }
    .chart-container p {
      position: absolute;
      left: 18%;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="chart-row">
    <div class="chart-container">
      <canvas id="chart1"></canvas>
      <p>Số lượng sản phẩm đã bán</p>
    </div>
    
    <div class="chart-container">
      <canvas id="chart2"></canvas>
      <p style="position: absolute; left : 67%;">Số lượng sản phẩm tồn kho</p>
    </div>
  </div>
  <div class="chart-row">
    <div class="chart-container">
      <canvas id="chart3"></canvas>
      <p>Số lượng đơn hàng của khách</p>
    </div>
    <div class="chart-container">
      <canvas id="chart4"></canvas>
      <p style="position: absolute; left : 72%;">Doanh thu</p>
    </div>
  </div>

  <script>
    // Dữ liệu thống kê đã bán
    var data1 = {
      labels: ['Máy tính - PC', 'Laptop', 'Điện thoại'],
      datasets: [{
        label: 'Số lượng đã bán',
        data: [120, 65, 179],
        backgroundColor: ['red', 'blue', 'green']
      }]
    };

    // Dữ liệu thống kê tồn kho
    var data2 = {
      labels: ['Máy tính - PC', 'Laptop', 'Điện thoại'],
      datasets: [{
        label: 'Số lượng tồn kho',
        data: [12, 49, 4],
        backgroundColor: ['red', 'blue', 'green']
      }]
    };

    // Dữ liệu thống kê khách hàng
    var data3 = {
      labels: ['Hiền Mama', 'Khách hàng B', 'Khách hàng C', 'Khách hàng D'],
      datasets: [{
        label: 'Số lượng đơn hàng',
        data: [12, 2, 3, 1, 4, 2, 5],
        backgroundColor: ['red', 'blue', 'green','yellow']
      }]
    };

    // Dữ liệu thống kê doanh thu
    var data4 = {
      labels: ['Quý 1', 'Quý 2', 'Quý 3', 'Quý 4'],
      datasets: [{
        label: 'Doanh thu',
        data: [0, 0, 0, 890000000],
        backgroundColor: ['red', 'blue', 'green','RED']
      }]
    };

    var ctx1 = document.getElementById('chart1').getContext('2d');
    new Chart(ctx1, {
      type: 'bar',
      data: data1,
      options: {
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              stepSize: 10
            }
          }
        },
        plugins: {
          legend: {
            display: false
          }
        },
        indexAxis: 'x',
        barPercentage: 0.3
      }
    });

    // Tạo biểu đồ cột thống kê tồn kho
    var ctx2 = document.getElementById('chart2').getContext('2d');
    new Chart(ctx2, {
      type: 'bar',
      data: data2,
      options: {
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              stepSize: 10
            }
          }
        },
        plugins: {
          legend: {
            display: false
          }
        },
        indexAxis: 'x',
        barPercentage: 0.3
      }
    });

    // Tạo biểu đồ cột thống kê khách hàng
    var ctx3 = document.getElementById('chart3').getContext('2d');
    new Chart(ctx3, {
      type: 'bar',
      data: data3,
      options: {
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              stepSize: 10
            }
          }
        },
        plugins: {
          legend: {
            display: false
          }
        },
        indexAxis: 'x',
        barPercentage: 0.3
      }
    });

    // Tạo biểu đồ cột thống kê doanh thu
    var ctx4 = document.getElementById('chart4').getContext('2d');
    new Chart(ctx4, {
      type: 'bar',
      data: data4,
      options: {
        scales: {
          y: {
            beginAtZero: true,
            ticks: {
              stepSize: 10
            }
          }
        },
        plugins: {
          legend: {
            display: false
          }
        },
        indexAxis: 'x',
        barPercentage: 0.3
      }
    });
  </script>
</body>
</html>