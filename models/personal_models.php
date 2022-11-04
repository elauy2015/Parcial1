<?php
require_once("utils/personal_utilss.php");

class personal_models {
    public $procesador;
    public $disipador;
    public $mother;
    public $ram;
    public $ssd;
    public $grafica;
    public $fuente;
    public $ensamblado;
    
    public function getprocesador() {
        $obj = new personal_utils();
        return $obj->proces($this->procesador);
    }
    public function getdisipador(){
        return $this->disipador;
    }
    public function getmother(){
        $obj = new personal_utils();
        return $obj->mother($this->mother);
    }
    public function getram(){
        $obj = new personal_utils();
        return $obj->ram($this->ram);
    }
    public function getssd(){
        $obj = new personal_utils();
        return $obj->ssd($this->ssd);
    }
    public function getgrafica(){
        $obj = new personal_utils();
        return $obj->grafica($this->grafica);
    }
    public function getfuente(){
        $obj = new personal_utils();
        return $obj->fuente($this->fuente);
    }
    public function getensamblado(){
        return $this->ensamblado;
    }
    public function getpresupuesto(){
        $obj = new personal_utils();
        $presupuesto= $obj->procesprecio($this->procesador)
        +$obj->motherprecio($this->mother)+$obj->ramprecio($this->ram)
        +$obj->ssdprecio($this->ssd)+$obj->graficaprecio($this->grafica)
        +$obj->fuenteprecio($this->fuente);
        return $presupuesto;
    }

    public function obtener($procesador,$disipador,$mother,$ram,$ssd,$grafica,$fuente,$ensamblado)
    {
        $this->procesador = $procesador;
        $this->disipador = $disipador;
        $this->mother = $mother;
        $this->ram = $ram;
        $this->ssd = $ssd;
        $this->grafica = $grafica;
        $this->fuente = $fuente;
        $this->ensamblado = $ensamblado;

    }
}
?>