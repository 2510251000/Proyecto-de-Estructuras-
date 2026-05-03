# Proyecto de Estructuras - App de Noticias

App web de noticias con arquitectura MVC. Permite crear, ver, editar y eliminar noticias.

## Integrantes
- David: Backend (PHP + SQLite + MVC)
- Sebas: Frontend (HTML + JavaScript)

## Tecnologías
- Frontend: HTML + JavaScript puro
- Backend: PHP
- Base de datos: SQLite (se crea automáticamente)
- Servidor: PHP incluido

## Cómo correr el proyecto

1. Tener PHP instalado
2. Clonar el repositorio:
   git clone https://github.com/2510251000/Proyecto-de-Estructuras-.git
3. Abrir terminal en la carpeta del proyecto
4. Ejecutar:
   php -S localhost:8000
5. Abrir el navegador en:
   http://localhost:8000

## Estructura del proyecto

Proyecto-de-Estructuras-/
├── backend/
│   ├── configuracion/
│   │   └── basedatos.php          <- Conexión SQLite
│   ├── modelos/
│   │   └── Noticia.php            <- Modelo MVC
│   ├── controladores/
│   │   └── NoticiaControlador.php <- Controlador MVC
│   └── api/
│       └── noticias.php           <- API REST
├── frontend/
│   ├── index.html                 <- Ver noticias
│   ├── crear.html                 <- Crear noticia
│   └── editar.html                <- Editar noticia
├── index.php                      <- Redirección al frontend
└── noticias.db                    <- Base de datos (se crea sola)

## Funcionalidades
- Ver todas las noticias
- Crear una noticia nueva
- Editar una noticia existente
- Eliminar una noticia

## Notas
- No necesita instalar base de datos, SQLite se crea automático
- No necesita frameworks ni librerías externas
- Todo corre con un solo comando: php -S localhost:8000
