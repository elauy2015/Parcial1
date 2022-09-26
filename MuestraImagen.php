<?php
require_once("controllers/img-controllers.php");
if (isset($_GET["num"])) {
    $num = $_GET["num"];
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Pagina 1</title>
    <style>
        h3 {
            color: white;
        }
        h4 {
            font-size: 17px;
            color: rgba(255, 254, 254, 0.5);
        }
    </style>
</head>

<body>
    <div class="login-box3">
        <h2>Programa 1</h2>
        <?php foreach (img_controllers::Mostrar() as $Imagen) { 
            if($Imagen->getId() == $num){ ?>
                <h3>Id de imagen:</h3>
                <h4><?php echo $Imagen->getId() ?></h4>
                <h3>Descripcion:</h3>
                <h4><?php echo $Imagen->getDescripcion() ?></h4>
                <h3>Ruta Local de imagen miniatura:</h3>
                <h4><?php echo $Imagen->getRuta() ?></h4>
                <h3>Imagen miniatura:</h3>
                <img src="<?php echo $Imagen->getRuta() ?>" width="150" height="100">
                <h3>Ruta local imagen grande:</h3>
                <h4><?php echo $Imagen->getRuta() ?></h4>
                <h3>Imagen grande:</h3>
                <img src="<?php echo $Imagen->getRuta() ?>" width="500" height="333">
            <?php } 

        }?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>