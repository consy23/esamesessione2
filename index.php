<?php
// Leggi il contenuto del file JSON
$jsonData = file_get_contents('dati.json');

// Decodifica il JSON in un array associativo
$dati = json_decode($jsonData, true);

// Verifica se la richiesta è stata fatta con un parametro di pagina
$pagina = isset($_GET['index.html']) ? $_GET['index.html'] : 'home';

// Ottieni i dati specifici per la pagina richiesta
$titolo = $dati[$pagina]['titolo'];
$contenuto = $dati[$pagina]['contenuto'];
?>