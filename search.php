<<<<<<< HEAD
<?php 
  include("DB.php");
  
   $name = $_POST['name'];
  
   $sql = "SELECT * FROM products WHERE NAME LIKE '%%'";  
   $query = mysqli_query($connect,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
       $data .=  "<tr><td>".$row['ID']."</td><td>".$row['NAME']."</td><td>".$row['IMAGE']."</td></tr>";
       $data .= "<div class='search_con'>
       <div class='row'>
           <div class='col-lg-12'>
               <h1>"; echo $row['NAME']; "</h1>
           </div>
       </div>
   </div>";
   }
    echo $data;
=======
<?php 
  include("DB.php");
  
   $name = $_POST['name'];
  
   $sql = "SELECT * FROM products WHERE NAME LIKE '%%'";  
   $query = mysqli_query($connect,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
       $data .=  "<tr><td>".$row['ID']."</td><td>".$row['NAME']."</td><td>".$row['IMAGE']."</td></tr>";
       $data .= "<div class='search_con'>
       <div class='row'>
           <div class='col-lg-12'>
               <h1>"; echo $row['NAME']; "</h1>
           </div>
       </div>
   </div>";
   }
    echo $data;
>>>>>>> 8642878ea6ec1526af36b7e911105fce4972e334
 ?>