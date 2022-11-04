<?php
require_once("controllers/img-controllers.php");
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
        h5 {
            color: black;
        }
        h4 {
            text-decoration : none;
            font-size: 14px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
    <div class="login-box2">
        <h2>Programa 1</h2>
        <table class="table table-dark table-striped">
            <tr>
                <th style="text-align: center;">ID</th>
                <th style="text-align: center;">Descripcion</th>
                <th style="text-align: center;">Miniatura</th>
                <th style="text-align: center;">Modal</th>
                <th style="text-align: center;">Pagina</th>
            </tr>
            <?php foreach (img_controllers::Mostrar() as $Imagen) { ?>
                <tr>
                    <th style="text-align: center;"><?php echo $Imagen->getId() ?></th>
                    <td style="text-align: center;"><?php echo $Imagen->getDescripcion() ?></td>
                    <td style="text-align: center;"><img src="<?php echo $Imagen->getRuta() ?>" width="150" height="100"></td> 
                    <td style="text-align: center;">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $Imagen->getId() ?>">
                            Ver 1
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $Imagen->getId() ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $Imagen->getDescripcion() ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="<?php echo $Imagen->getRuta() ?>" width="500" height="333">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td style="text-align: center;">
                    <a href="<?php echo $Imagen->getUrl() ?>" style="text-decoration : none">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                           Ver 2
                        </button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>