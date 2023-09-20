<?php 

require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$buscador = new Buscador(
    new Client(
        ['base_uri' => 'https://www.alura.com.br/',
    ]), 
    new Crawler()
);
$cursos = $buscador->buscar('cursos-online-data-science');

foreach ($cursos as $curso) {
    echo "$curso <br>";
}