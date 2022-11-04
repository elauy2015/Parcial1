<?php
require_once("models/personal_models.php");
$obj = new personal_models();

if (isset($_GET["terminos"])) {
    $terminos = $_GET["terminos"];
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Pagina Personal</title>
    <style>
        h2 {
            font-size: 25px;
            color: black;
        }
        h5 {
            color: black;
        }

        h4 {
            text-decoration: none;
            font-size: 25px;
            color: white;
        }
        p{
            text-decoration: none;
            font-size: 20px;
            color: white;
        }
        h5 {
            line-height : 25px;
            text-decoration: none;
            font-size: 14px;
            color: white;
        }
    </style>

    
</head>

<body>
    <?php
    if (!isset($_GET["terminos"])) {
        ob_start();
    ?>

        <div class="login-box">
            <h2>Configura tu PC</h2>
            <form action="pagina2.php" method="post" name="CreateForm">
                <h5>Seleccione el procesador</h5>
                <select class="form-control form-control-sm" name="procesador" required>
                    <option value="" selected>Elige...</option>
                    <option value="0">celeron g5905 50$</option>
                    <option value="1">Pentium Gold g6400 65$</option>
                    <option value="2">i3 12100f 125$</option>
                    <option value="3">i5 12400 225$</option>
                    <option value="4">i7 12700f 350$</option>
                    <option value="5">i9 12900 600$</option>
                </select> 
                <h5>Desea agregar un disipador?</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disipador" id="inlineRadio1" value="Con Disipador">
                    <label class="form-check-label" for="inlineRadio1">
                        <h5>Si</h5>
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="disipador" id="inlineRadio2" value="Sin Disipador">
                    <label class="form-check-label" for="inlineRadio2">
                        <h5>No</h5>
                    </label>
                </div> 
                <h5>Seleccione la mother board</h5>
                <select class="form-control form-control-sm" name="mother" required>
                    <option value="" selected>Elige...</option>
                    <option value="0">h610mh 95$</option>
                    <option value="1">b660mx 100$</option>
                    <option value="2">z690 xt 325$</option>
                </select> 
                <h5>Seleccione la Ram</h5>
                <select class="form-control form-control-sm" name="ram" required>
                    <option value="" selected>Elige...</option>
                    <option value="0">8 GB 2666mhz 25$</option>
                    <option value="1">8 GB 3200mhz 30$ </option>
                    <option value="2">16 GB 2666mhz 50$</option>
                    <option value="3">16 GB 3200mhz 60$ </option>
                    <option value="4">32 GB 2666mhz 100$</option>
                    <option value="5">32 GB 3200mhz 120$ </option>
                </select> 
                <h5>Almacenamiento</h5>
                <select class="form-control form-control-sm" name="ssd" required>
                    <option value="" selected>Elige...</option>
                    <option value="0">ssd 120gb 25$</option>
                    <option value="1">ssd 240gb 35$</option>
                    <option value="2">ssd 500gb 50$</option>
                    <option value="3">ssd 1 TB 100$</option>
                </select> 
                <h5>Tarjeta Gráfica</h5>
                <select class="form-control form-control-sm" name="grafica" required>
                    <option value="" selected>Elige...</option>
                    <option value="0">Gt 1030 100$</option>
                    <option value="1">Gtx 1650 200$</option>
                    <option value="2">Gtx 1660 super 250$</option>
                    <option value="3">Rtx 3050 300$</option>
                    <option value="4">Rtx 3060 450$</option>
                    <option value="5">Rtx 3070 550$</option>
                    <option value="6">Rtx 3080 800$</option>
                    <option value="7">Rtx 3090 1100$</option>
                </select> 

                <h5>Fuente de Poder</h5>
                <select class="form-control form-control-sm" name="fuente" required>
                    <option value="" selected>Elige...</option>
                    <option value="0">450w 80 plus bronce 35$</option>
                    <option value="1">500w 80 plus bronce 45$</option>
                    <option value="2">650 80 plus oro 70$</option>
                    <option value="3">750w 80 plus oro 85$</option>
                    <option value="4">1000w 80 plus platinium 120$</option>
                </select> 
                <h5>Desea el servicio de ensamblado?</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ensamblado" id="inlineRadio1" value="Ensamblado">
                    <label class="form-check-label" for="inlineRadio1">
                        <h5>Si</h5>
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ensamblado" id="inlineRadio2" value="Sin Ensamblar">
                    <label class="form-check-label" for="inlineRadio2">
                        <h5>No</h5>
                    </label>
                </div> 
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="invalidCheck2" name="terminos" required>
                        <label class="form-check-label" for="invalidCheck2">
                            <h5>Estoy de acuerdo con asignarle la máxima ponderación al estudiante Cristian Bula</h5>
                        </label>
                    </div>
                </div>
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <input type="submit" value="Submit" style="background:none; border-width:0px; color:White; text-decoration:none;">

                </a>


                <?php

                if ($_POST) {
                    $procesador = $_POST["procesador"];
                    $disipador = $_POST["disipador"];
                    $mother = $_POST["mother"];
                    $ram = $_POST["ram"];
                    $ssd = $_POST["ssd"];
                    $grafica = $_POST["grafica"];
                    $fuente = $_POST["fuente"];
                    $ensamblado = $_POST["ensamblado"];
                    $terminos = $_POST["terminos"];
                    header('Location: Pagina2.php?terminos='. Md5($terminos) . '&procesador='. $procesador . '&disipador='. $disipador. '&mother='. $mother. '&ram='. $ram. '&ssd='. $ssd.
                     '&grafica='. $grafica. '&fuente='. $fuente. '&ensamblado='. $ensamblado);
                    
                }
                ?>
            <?php
            #No se ha enviado el formulario
            #-----------------------------------------------------------------------------------------------------------------------------
            #Se envio el formulario
            #-----------------------------------------------------------------------------------------------------------------------------
        } else {
            
                $procesador = $_GET["procesador"];
                $disipador = $_GET["disipador"];
                $mother = $_GET["mother"];
                $ram = $_GET["ram"];
                $ssd = $_GET["ssd"];
                $grafica = $_GET["grafica"];
                $fuente = $_GET["fuente"];
                $ensamblado = $_GET["ensamblado"];
                $obj->obtener($procesador, $disipador, $mother, $ram, $ssd, $grafica, $fuente, $ensamblado);
            ?>
                <div class="login-box">
                    <h2>Usted eligio una Computadora con:</h2>
                    <h4>Procesador: <?php echo $obj->getprocesador();?></h4>
                    <h4>Disipador: <?php echo $obj->getdisipador();?></h4>
                    <h4>Mother: <?php echo $obj->getmother();?></h4>
                    <h4>Ram: <?php echo $obj->getram();?></h4>
                    <h4>Ssd: <?php echo $obj->getssd();?></h4>
                    <h4>Grafica: <?php echo $obj->getgrafica();?></h4>
                    <h4>Fuente: <?php echo $obj->getfuente();?></h4>
                    <h4>Servicio: <?php echo $obj->getensamblado();?></h4>
                    <h4>Presupuesto Total: <?php echo $obj->getpresupuesto();?>$</h4>
                    <form action="#">
                    <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <input type="submit" value="Volver" style="background:none; border-width:0px; color:White; text-decoration:none;">

                </a>
                    </form>
                </div>
            <?php

    }
            ?>

            </form>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>