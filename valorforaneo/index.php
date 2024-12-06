<?php 
  require_once("config/db.php");
  $obj = new connect();
  $obj=$obj->PDO();
  $statement = $obj->prepare("select * from categoria");
  $statement->execute();
  $categorias = $statement->fetchAll();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Llaves foraneas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>
    <p style="text-align: center;" class="titulo h1 mt-3">Envio de Formulario</p>
    <div class="container mt-4">
        <form action="store.php" method="post">
            <div class="mb-3">
                <label for="tituloid" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" id="tituloid" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <div class="form-floating">
                <select required name="categoria" class="form-select" id="selectId">
                  <?php foreach($categorias as $categoria): ?>
                    <option value="<?= $categoria[0] ?>"><?= $categoria[1]?></option>
                  <?php endforeach; ?>
                </select>
                <label for="selectId">Seleccione una opcion</label>
              </div>
            </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>