<?php
    $cssPage = 'index.css';
    require_once __DIR__ . '/includes/header.php';
?>

<!-- HEADER ESPECÍFICO PARA O HOME -->

<header>
    <nav class="menu">
        <ul>
            <li class="menu-itens active-page"><a href="<?= $basePath; ?>/index.php">HOME</a></li>
        </ul>
        <ul>
            <li class="menu-itens"><a href="./pages/foto.php">FOTO</a></li>
            <li class="menu-itens"><a href="#">VIDEO</a></li>
            <li class="menu-itens"><a href="#">DESIGN</a></li>
        </ul>
        <ul>
            <li class="menu-itens"><a href="#">SOBRE</a></li>
            <li class="menu-itens"><a href="#">CONTATO</a></li>
        </ul>
    </nav>
</header>

<main>
    <p id="year">
        2026
    </p>
    <div id="names">
        <div class="name" id="f-name">LUCAS</div>
        <div class="name" id="main-name">DOURADO</div>
        <div class="name" id="last-name">MARTINS</div>
    </div>
    <button>
        <p id="start-button"> 
            INICIAR
        </p>
    </button>
</main>

<?php 
    $pageJs = "./assets/js/pages/index.js";
    require_once __DIR__ . '/includes/footer.php';
?>
