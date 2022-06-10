<?php
/*
 * Conexão para uso restrito da pagina de calendario
 * 
 */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'agenda');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
