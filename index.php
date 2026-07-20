<?php
    $activePage = 'home';
    $cssPage = 'index.css';
    require_once __DIR__ . '/includes/header.php';
    require_once __DIR__ . '/includes/menu.php';
?>

<main>
    <div id="names">
        <div class="name" id="f-name">LUCAS</div>
        <div class="name" id="main-name">DOURADO</div>
        <div class="name" id="last-name">MARTINS</div>
    </div>
    <!-- <p id=""> 
        TEXTO EXEMPLO
    </p> -->
</main>

<?php 
    // $pageJs = "./assets/js/pages/index.js";
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/includes/footer.php';
?>
