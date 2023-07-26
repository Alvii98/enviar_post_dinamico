<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tres Input Alineados</title>
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
