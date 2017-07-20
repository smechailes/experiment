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
  <label for="example-text-input" class="col-md-2 col-form-label">id</label>
  <div class="col-md-10">
    <input class="form-control" type="number" value="Lenovo vibe p1m" id="example-text-input" name="item">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-md-2 col-form-label">item</label>
  <div class="col-md-10">
    <input class="form-control" type="number" value="Lenovo vibe p1m" id="example-text-input" name="item">
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-md-2 col-form-label">description</label>
  <div class="col-md-10">
    <input class="form-control" type="description" value="smartphone" id="example-text-input" name="item">
  </div>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</form>
</div>


//update into database
<?php 
print_r($_POST); 
$id = $_POST['id'];
$item = $_POST['item'];
$des = $_POST['description'];
  include 'databaseConnect.php';

  $sql= "UPDATE INTO category SET title= '$item', description= '$des'";
  $query = mqsqli_query($conn, $sql); //query bhayo bhayena bhanne kura bascha
if($query){
    echo "Data updated successfully";
  }else{
    echo "Data couldn't be updated at this moment because of " .mysqli_error($conn);
  }
?>


</body>
</html>

