    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css1/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url();?>assets/css1/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url();?>assets/css1/style.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/scss1/mdb.lite.scss" rel="stylesheet">
<div class="container-fluid">	<!-- graphic area in html -->
<br>
<br>
<h4 align="center">Alumni Insight</h4>
<br>
<h5 align="center">Total Number of users: <?php echo $data?></h5>
<br>
<div class="container" align="center">
<canvas id="myChart" style="max-width: 700px;"></canvas>
</div>

</head>


<body>
 
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script type="text/javascript">

  var ctx = document.getElementById("myChart").getContext('2d');

 
  


  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun",'Jul','Aug','Sep','Oct','Nov',
      'Dec'],
     
      datasets: [{
        label: 'Number of Users',
        data: [<?php echo $data3[0]['user_count']?>,<?php echo $data3[1]['user_count']?>,<?php echo $data3[2]['user_count']?>,<?php echo $data3[3]['user_count']?>,<?php echo $data3[4]['user_count']?>,<?php echo $data3[5]['user_count']?>,<?php echo $data3[6]['user_count']?>,<?php echo $data3[7]['user_count']?>,<?php echo $data3[8]['user_count']?>,<?php echo $data3[9]['user_count']?>,<?php echo $data3[10]['user_count']?>,<?php echo $data3[11]['user_count']?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          'rgba(255,99,132,1)',
          
        ],
        borderWidth: 2
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {

            beginAtZero: true,
              userCallback: function(label, index, labels) {
                     // when the floored value is the same as the value we have a whole number
                     if (Math.floor(label) === label) {
                         return label;
                     }

                 },

          }

        }]
      }
    }
  });

</script>





    <script type="text/javascript" src="<?php echo base_url();?>assets/js1/mdb.js"></script>