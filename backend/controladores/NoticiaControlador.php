<?php
require_once 'modelos/Noticia.php';

class NoticiaControlador {
    private $noticia;

    function __construct() {
        $this->noticia = new Noticia();
    }

    function listar() {
        return $this->noticia->obtenerTodas();
    }

    function ver($id) {
        return $this->noticia->obtenerUna($id);
    }

    function agregar($titulo, $contenido) {
        $fecha = date("Y-m-d");
        $this->noticia->crear($titulo, $contenido, $fecha);
    }

    function actualizar($id, $titulo, $contenido) {
        $this->noticia->editar($id, $titulo, $contenido);
    }

    function borrar($id) {
        $this->noticia->eliminar($id);
    }
}
?>