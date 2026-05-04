<?php
require_once __DIR__ . '/../configuracion/basedatos.php';
class Noticia {
    private $base;
    function __construct() {
        $this->base = conectar();
    }
    function obtenerTodas() {
        $consulta = $this->base->query("SELECT * FROM noticias");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
    function obtenerUna($id) {
        $consulta = $this->base->prepare("SELECT * FROM noticias WHERE id = ?");
        $consulta->execute([$id]);
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
    function crear($titulo, $contenido, $fecha) {
        $consulta = $this->base->prepare("INSERT INTO noticias (titulo, contenido, fecha) VALUES (?, ?, ?)");
        $consulta->execute([$titulo, $contenido, $fecha]);
    }
    function editar($id, $titulo, $contenido) {
        $consulta = $this->base->prepare("UPDATE noticias SET titulo = ?, contenido = ? WHERE id = ?");
        $consulta->execute([$titulo, $contenido, $id]);
    }
    function eliminar($id) {
        $consulta = $this->base->prepare("DELETE FROM noticias WHERE id = ?");
        $consulta->execute([$id]);
    }
}
?>
