<?php
    $page = "conteudo";
    if(isset($_GET['page']))
    $page = $_GET['page'];

    include_once("partes/topo.php");
    include_once("paginas/{$page}.php");
    include_once("partes/rodape.php");
?>