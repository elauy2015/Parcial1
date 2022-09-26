<?php
require_once("models/img-models.php");
require_once("utils/img-utils.php");
class img_controllers
{

    public static function Mostrar()
    {
        $Imagen[] = new img_models(1, "Imagen de lugar abandonado", "imgs/img1.jpg","muestraimagen.php?num=1");
        $Imagen[] = new img_models(2, "Imagen casa moderna", "imgs/img2.jpg","muestraimagen.php?num=2");
        $Imagen[] = new img_models(3, "Imagen de lugar inspirador", "imgs/img3.jpg","muestraimagen.php?num=3");
        $Imagen[] = new img_models(4, "Imagen de equipo de fultbol", "imgs/img4.jpg","muestraimagen.php?num=4");
        $Imagen[] = new img_models(5, "Imagen de mujer con bomba de humo", "imgs/img5.jpg","muestraimagen.php?num=5");
        $Imagen[] = new img_models(6, "Imagen de burrito mexicano", "imgs/img6.jpg","muestraimagen.php?num=6");
        $Imagen[] = new img_models(7, "Imagen de gatito durmiendo", "imgs/img7.jpg","muestraimagen.php?num=7");
        $Imagen[] = new img_models(8, "Imagen de oveja", "imgs/img8.jpg","muestraimagen.php?num=8");
        $Imagen[] = new img_models(9, "Imagen de cielo con relampago", "imgs/img9.jpg","muestraimagen.php?num=9");
        
        return $Imagen;
    }
}
