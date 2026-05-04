<?php
function conectar() {
    $base = new PDO('sqlite:noticias.db');
    $base->exec("CREATE TABLE IF NOT EXISTS noticias (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo TEXT,
        contenido TEXT,
        fecha TEXT
    )");
    return $base;
}
?>