
<?php
/**
 * Casoo um metodo do sistema
 * não for permitido sera mostrado
 * a menssagem:
 * "Method Not Allowed Here"
 */
header( 'Content-Type: application/json; charset=UTF-8' );
echo json_encode( [ 'message' => 'Method Not Allowed Here' ] );
die();