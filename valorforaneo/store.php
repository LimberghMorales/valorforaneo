<?php
  require_once("config/db.php");
  $connect = new connect();
  $PDO=$connect->PDO();
    $titulo =  $_POST["titulo"];
    $categoria =  $_POST["categoria"];
    try {
        $statement = $PDO->prepare("insert into post value (null, :titulo, :categoriaId)");
        $statement->bindParam(":titulo",$titulo);
        $statement->bindParam(":categoriaId",$categoria);
        $statement->execute();
        header("Location:index.php");
    } catch (\Throwable $th) {
        header("Location:index.php?error=1");
    }

?>