<?php include 'master/master.php'; ?>

<div class="card-box-widget">
<?php 
                        $sql = "SELECT count(Id_account) as total_member From accounts";
                        $result = mysqli_query($connect,$sql);
                        if ($result) {
                          while ($row = mysqli_fetch_array($result)) {
                    ?>
    <div class="card-item">
        <h5 class="card-item-name card-1"><i class="fas fa-users card-icon"></i>Tổng thành viên</h5>
        <h3 class="card-item-number"><?php echo $row['total_member'] ?></h3>
    </div>
    <?php }}?>
    <?php 
                        $sql1 = "SELECT SUM(orders_detail.Quantity*Price) as total FROM orders,orders_detail 
                        WHERE orders.Id_orders = orders_detail.Id_orders 
                        AND Status = 3";
                        $result1 = mysqli_query($connect,$sql1);
                        if ($result1) {
                          while ($row1 = mysqli_fetch_array($result1)) {
                    ?>
    <div class="card-item">
        <h5 class="card-item-name card-2"><i class="fas fa-coins card-icon"></i>Tổng thu nhập</h5>
        <h3 class="card-item-number"><?=number_format($row1['total'],0,',','.')?>đ</h3>
    </div>
    <?php }}?>
    <?php 
                        $sql3 = "SELECT count(Id_product) as total_product From products";
                        $result3 = mysqli_query($connect,$sql3);
                        if ($result3) {
                          while ($row3 = mysqli_fetch_array($result3)) {
                    ?>
    <div class="card-item">
        <h5 class="card-item-name card-3"><i class="fas fa-layer-group card-icon"></i>Tổng sản phẩm</h5>
        <h3 class="card-item-number"><?php echo $row3['total_product'] ?></h3>
    </div>
    <?php }}?>
</div>
<div class="container" style="width:60%; background-color:#fff; margin-top: 30px">
    <canvas id="myChart"></canvas>
</div>
<script>
    let myChart = document.getElementById('myChart').getContext('2d');
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['2016', '2017', '2018', '2019', '2020', '2021'],
        datasets:[{
          label:'chart',
          data:[
            117594,
            181045,
            153060,
            206519,
            205162,
            245072
          ],
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Biểu đồ doanh thu qua các năm',
          fontSize:25
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>

<?php include 'master/footer.php'; ?>
