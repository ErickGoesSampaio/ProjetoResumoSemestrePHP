<?php
include 'topo.php';

//Quando fazer o inicio da sessão mostrará a mensagem de Página Inicial

if($_SESSION['mensagem'] == "") {
    $mensagem = 'Página Inicial';
} else {
    $mensagem = $_SESSION['mensagem'];
}

?>
    <main class="flex-shrink-0">
        <div class="container">
            <p><?= $mensagem; ?></p>
        </div>
    </main>

<?php
include 'footer.php'
?>