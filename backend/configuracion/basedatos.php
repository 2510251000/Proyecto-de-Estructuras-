<?php
function conectar() {
    $ruta = __DIR__ . '/../../noticias.db';
    $base = new PDO('sqlite:' . $ruta);
    $base->exec("CREATE TABLE IF NOT EXISTS noticias (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo TEXT,
        contenido TEXT,
        fecha TEXT
    )");
    return $base;
}
?>
