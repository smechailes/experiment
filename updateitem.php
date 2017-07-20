<html>
<head><title>form</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
</head>
<body>
<h1><center>Items UPdate</center></h1>

<div class="container">
<form method="POST" action=" ">
<div class="form-group row">
  <label for="example-number-input" class="col-md-2 col-form-label">Id of item</label>
  <div class="col-md-10">
    <input class="form-control" type="number" value="1" id="example-number-input" name="id">
  </div>
</div>

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
$id = $_POST['id'];
$item = $_POST['item'];
$des = $_POST['description'];
include 'databaseConnect.php';

$sql= "UPDATE category SET title= '$item', description= '$des' where id= '$id'";
$query = mysqli_query($conn, $sql); //query bhayo bhayena bhanne kura bascha
if($query){
    echo "Data updated successfully";
  }else{
    echo "Data couldn't be updated at this moment because of " .mysqli_error($conn);
  }
?>
</body>
</html>

