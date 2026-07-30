<?php
    $activePage = 'home';
    $cssPage = 'index.css';
    require_once __DIR__ . '/includes/header.php';
    require_once __DIR__ . '/includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <div id="names">
        <div class="name" id="f-name">LUCAS</div>
        <div class="name" id="main-name">DOURADO</div>
        <div class="name" id="last-name">MARTINS</div>
    </div>
    <p id="legend"> 
        <span>PORTFÓLIO PESSOAL</span>
        <span id="legend-copy">&copy; 2026 Todos os direitos reservados.</span>
    </p>
</main>

<?php 
    $menu = $basePath . '/assets/js/global/menu.js';
?>

    <div class="transition-leaving"></div>

    <?php if (isset($pageJs)): ?>
        <script src="<?php echo $pageJs; ?>"></script>
    <?php endif; ?>

    <?php if (isset($menu)): ?>
        <script src="<?php echo $menu; ?>"></script>
    <?php endif; ?>

    <script src="<?= $basePath; ?>/assets/js/global/animations.js"></script>

    </body>
</html>
