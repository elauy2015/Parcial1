<?php

class personal_utils{

    public function proces($i){
        $proces = ["Celeron g5905","Pentium Gold g6400",
        "I3 12100f","I5 12400","I7 12700f","I9 12900"];
        $valor = $proces[$i];
        return $valor;
    }
    public function procesprecio($i){
        $procesprecio = array(50,65,125,225,350,600);
        $valor = $procesprecio[$i];
        return $valor;
    }
    public function mother($i){
        $proces = ["h610mh","b660mx","z690 xt"];
        $valor = $proces[$i];
        return $valor;
    }
    public function motherprecio($i){
        $procesprecio = array(95,100,325);
        $valor = $procesprecio[$i];
        return $valor;
    }
    public function ram($i){
        $proces = ["8 GB 2666mhz","8 GB 3200mhz",
        "16 GB 2666mhz","16 GB 3200mhz","32 GB 2666mhz","32 GB 3200mhz"];
        $valor = $proces[$i];
        return $valor;
    }
    public function ramprecio($i){
        $procesprecio = array(25,30,50,60,100,120);
        $valor = $procesprecio[$i];
        return $valor;
    }
    public function ssd($i){
        $proces = ["ssd 120gb","ssd 240gb","ssd 500gb","ssd 1 TB"];
        $valor = $proces[$i];
        return $valor;
    }
    public function ssdprecio($i){
        $procesprecio = array(25,35,50,100);
        $valor = $procesprecio[$i];
        return $valor;
    }
    public function grafica($i){
        $proces = ["Gt 1030","Gtx 1650",
        "Gtx 1660 super","Rtx 3050","Rtx 3060","Rtx 3070","Rtx 3080","Rtx 3090"];
        $valor = $proces[$i];
        return $valor;
    }
    public function graficaprecio($i){
        $procesprecio = array(100,200,250,300,450,550,800,1100);
        $valor = $procesprecio[$i];
        return $valor;
    }
    public function fuente($i){
        $proces = ["450w 80 plus bronce","500w 80 plus bronce",
        "650 80 plus oro","750w 80 plus oro","1000w 80 plus platinium"];
        $valor = $proces[$i];
        return $valor;
    }
    public function fuenteprecio($i){
        $procesprecio = array(35,45,70,85,120);
        $valor = $procesprecio[$i];
        return $valor;
    }
    
}
?>