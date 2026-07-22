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
    <p id="legend"> 
        PORTFÓLIO PESSOAL
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
