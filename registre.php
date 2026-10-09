<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escola d'Enginyeria - Registre</title>
  <link rel="stylesheet" href="css/registre.css">
</head>
<body>
  <!--TODO: Show name, degree and menció as the value of the inputs-->
  <h2>Resum del registre</h2>
  <div id="container">
    <div><label>Nom:</label><input type="text" readonly value="<?= $_REQUEST['nom'] ?>"></div>
    <div><label>Grau:</label><input type="text" readonly value="<?= $_REQUEST['grau'] ?>"></div>
    <div><label>Menció:</label><input type="text" readonly value="<?= $_REQUEST['mencio'] ?>"></div>
  </div>

</body>
</html>
