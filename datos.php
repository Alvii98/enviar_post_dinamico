<?php 
if(!isset($_POST['nombre']) || !isset($_POST['edad']) || !isset($_POST['pais'])){
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos de POST dinamico</title>
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <div class="container">
    <div class="input-group">
      <h2 for="name"><?php print $_POST['nombre'];?></h2>
    </div>
    <div class="input-group">
      <h2 for="age"><?php print $_POST['edad'];?></h2>
    </div>
    <div class="input-group">
      <h2 for="country"><?php print $_POST['pais'];?></h2>
    </div>
  </div>
</body>
</html>
