<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<?php
        $i=1;
					require 'DB.php';
          $revenu=array();
          $cost=array();
          $date=array();
					 $query = mysqli_query($connect, "SELECT * FROM `sales`") or die(mysqli_error());
           
					while($fetch = mysqli_fetch_array($query)){
            $date[]=$fetch['DATE'];
            $cost[]=$fetch['COST'];
            

          }
				?>
<div class="row">
  <div class="col-lg-8">
 
    <div class="chartBox">
      <input type="date" onchange="startDateFilter(this)" value="2023-05-23" min="2023-05-01" max="2023-05-30">
      <input type="date" onchange="endDateFilter(this)" value="2023-05-23" min="2023-05-01" max="2023-05-30">

    <canvas id="myChart"></canvas>
 
</div>
  </div>
  <div class="col-lg-4">
    <div class="row">
    <div class="col-lg-12">
  <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>

  <div class="col-lg-12">
  <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
    </div>

  </div>
 


 
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>

<script>
const cost=<?php echo json_encode($cost); ?>;
const date=<?php echo json_encode($date); ?>;
const datechart=date.map((day,index)=>{
  let dayjs=new Date(day);
  return dayjs.setHours(0,0,0,0);
});
// setup

 
    const data= {
      labels: datechart,
      datasets: [{
        label: 'Sales',
        data: <?php echo json_encode($cost); ?>,
        borderWidth: 1
      },{
        lebel:'Expenses',
        data:<?php echo json_encode($cost); ?>,
        borderWidth:1
      }]
    };

    
    
  // config
  const config ={
    type: 'bar',
    data,
    options: {
      scales:{
        x:{
          min:'2023-05-01',
          max:'2023-05-30',
          type:'time',
          time: {
            unit:'day'
          }
        },
        y:{
          beginAtZero:true
        }
      }
    }
  };
  // render init block   
  const myChart= new Chart(
    document.getElementById('myChart'),
    config
  );

  function startDateFilter(date){
    const  startDate=new Date(date.value);
    console.log(startDate.setHours(0,0,0,0));
    myChart.config.options.scales.x.min=startDate.setHours(0,0,0,0);
    myChart.update();
  }
</script>
    </body>
</html>