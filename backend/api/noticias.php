<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

require_once '../controladores/NoticiaControlador.php';

$controlador = new NoticiaControlador();
$metodo = $_SERVER['REQUEST_METHOD'];
$datos = json_decode(file_get_contents("php://input"), true);
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($metodo == "GET" && !$id) {
    echo json_encode($controlador->listar());
}

if ($metodo == "GET" && $id) {
    echo json_encode($controlador->ver($id));
}

if ($metodo == "POST") {
    $controlador->agregar($datos['titulo'], $datos['contenido']);
    echo json_encode(["mensaje" => "Noticia creada"]);
}

if ($metodo == "PUT") {
    $controlador->actualizar($id, $datos['titulo'], $datos['contenido']);
    echo json_encode(["mensaje" => "Noticia actualizada"]);
}

if ($metodo == "DELETE") {
    $controlador->borrar($id);
    echo json_encode(["mensaje" => "Noticia eliminada"]);
}
?>