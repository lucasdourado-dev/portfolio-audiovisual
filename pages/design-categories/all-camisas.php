<?php
    $cssPage = 'design-categories.css';
    $titlePage = ' — Design';

    require_once __DIR__ . '/../../includes/header.php';
    require_once __DIR__ . '/../../includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <div id="category-title">CAMISAS</div>

    <section id="category-container">

        <div class="categories" id="category1">
            <a class="categories-links hidden-scroll" id="category-link-1" href="<?= $basePath; ?>/pages/design-expo/cordeiro-de-deus.php">
                <div class="categories-title" id="category1-title">CORDEIRO DE DEUS</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-design/camisa/cordeiro-de-deus/03.png" alt="">
                </div>
            </a>
        </div>

        <div class="categories" id="category2">
            <a class="categories-links hidden-scroll" id="category-link-2" href="<?= $basePath; ?>/pages/design-expo/manto-da-gloria.php">

                <div class="categories-title" id="category1-title">MANTO DA GLÓRIA</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-design/camisa/manto-da-gloria/mobile/capa.png" alt="">
                </div>

            </a>
        </div>

    </section>
</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/design.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../../includes/footer.php';
?>