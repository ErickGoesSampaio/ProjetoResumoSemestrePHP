<?php
/**
 * Esta pagia é a solução de logout
 * onde finalizara a sessão do usuário
 * e não o deixara mais logado.
 */
session_start();
session_destroy();
unset($_SESSION['navegacao']);
unset($_SESSION['erro_login']);
header('Location: ../index.php');