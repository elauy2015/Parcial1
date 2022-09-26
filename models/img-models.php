<?php
class img_models{
    private $id;
    private $descripcion;
    private $ruta;
    private $url;

    public function __construct($id,$descripcion,$ruta,$url)
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->ruta = $ruta;
        $this->url = $url;

    }
    public function setId($id){
        $this->id = $id;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setRuta($ruta){
        $this->$ruta = $ruta;
    }
    public function setUrl($url){
        $this->url = $url;
    }
    public function getId(){
        return $this->id;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getRuta(){
        return $this->ruta;
    }
    public function getUrl(){
        return $this->url;
    }
}
?>