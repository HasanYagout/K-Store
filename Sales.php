<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP MySQL Ajax Live Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body>
<h2>My Phonebook</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<ul id="myUL">
    <?php
    include("DB.php");
  
   
    $sql = "SELECT * FROM products WHERE NAME LIKE '%%'";  
    $query = mysqli_query($connect,$sql);
    $data='';
    while($row = mysqli_fetch_assoc($query))
    {

?>
  <li><a href="#"><?php echo $row['NAME'] ?></a></li>
 
  <?php
    }
    ?>
  
  
</ul>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("td");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

</script>
</body>
</html>