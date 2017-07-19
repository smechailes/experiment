<html>
<head><title>form</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
</head>
<body>
<h1><center>Items Add</center></h1>

<div class="container">
<form method="POST" action="">
<div class="form-group row">
  <label for="example-text-input" class="col-md-2 col-form-label">Item</label>
  <div class="col-md-10">
    <input class="form-control" type="text" value="Lenovo vibe p1m" id="example-text-input" name="item">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-md-2 col-form-label">Description</label>
  <div class="col-md-10">
    <input class="form-control" type="search" name="description" value="Smartphone" id="example-search-input">
  </div>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</form>
</div>

<?php 
print_r($_POST); 
$item = $_POST['item'];
$des = $_POST['description'];
  include 'databaseConnect.php';

  $sql= "INSERT INTO category SET title= '$item', description= '$des'";
  $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  if($query){
    echo "Data inserted successfully";
  }else{
    echo "Data couldn't be added at this moment because of " .mysqli_error($conn);
  }
?>
</body>
</html>

