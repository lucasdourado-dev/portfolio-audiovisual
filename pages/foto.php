<?php
    $activePage = 'foto';
    $cssPage = 'foto.css';
    require_once __DIR__ . '/../includes/header.php';
    require_once __DIR__ . '/../includes/menu.php';
?>

<main>
    <section id="intro-container">
        <div id="page-title">FOTO</div>
        <div id="swipe-up">^</div>
    </section>

    <section id="category-container">

        <div class="categories" id="category1">
            <a class="categories-links hidden-scroll" id="category-link-1" href="<?= $basePath; ?>/pages/foto-categories/cat1.php">

                <div class="categories-title" id="category1-title">Externo</div>
                <!-- <div class="categories-subtitle" id="category1-subtitle">Ambientes externos e natureza</div> -->

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/externo/IMG_4080.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/externo/IMG_0501.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/externo/IMG_8799.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/externo/IMG_8949.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/externo/IMG_0670.jpg" alt="">
                </div>

            </a>
        </div>

        <div class="categories" id="category2">
            <a class="categories-links hidden-scroll" id="category-link-2" href="<?= $basePath; ?>/pages/foto-categories/cat2.php">
                <div class="categories-title" id="category1-title">Casais</div>
                <!-- <div class="categories-subtitle" id="category2-subtitle">Casamentos civis e ensaios fotográficos</div> -->

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/IMG_1280.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/IMG_7212.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/IMG_9713.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/IMG_9543.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/IMG_0325.jpg" alt="">
                </div>
            </a>
        </div>

        
    </section>
</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/foto.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../includes/footer.php';
?>



