<?php

use Core\Helpers\Sanitize;

$url = Sanitize::StripTags($_SERVER['REDIRECT_QUERY_STRING']) ? Sanitize::StripTags($_SERVER['REDIRECT_QUERY_STRING']) : 'index';

define('DS', DIRECTORY_SEPARATOR);
define('BASE_DIR', dirname( __FILE__ ) . DS);
define('URL', $url);
define('APP', '\\App\\Controllers\\');
define('SUFIXO', 'Controller');
define('CONTROLLER404', '\\App\\Controllers\\Erro404'.SUFIXO);
define('TITLE', 'Compcom - Soluções em Informatica');
define('ASSETS', '{
                    "css": [
                        "owl.theme.css",
                        "owl.transitions.css",
                        "owl.carousel.css",
                        "Reset.css",
                        "Conteudo.css",
                        "Footer.css",
                        "Header.css",
                        "Ondeestamos.css",
                        "Orcamento.css"
                    ],
                    "js": [
                        "jquery.min.js",
                        "owl.carousel.js",
                        "Index.js"
                    ]
                  }');

$teste = ASSETS;

$teste2 = json_decode($teste);
$teste3 = json_decode($teste, true);