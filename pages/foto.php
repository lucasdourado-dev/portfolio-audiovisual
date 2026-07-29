<?php
    $activePage = 'foto';
    $cssPage = 'foto.css';
    $titlePage = ' — Foto';
    require_once __DIR__ . '/../includes/header.php';
    require_once __DIR__ . '/../includes/menu.php';
?>

<main>
    <section id="intro-container">
        <div id="page-title" class="intro-blur">FOTO</div>
        <div id="swipe-up">
            <span class="intro-blur"></span>
        </div>
    </section>

    <section id="category-container">

        <div class="categories" id="category1">
            <a class="categories-links hidden-scroll" id="category-link-1" href="<?= $basePath; ?>/pages/foto-categories/externo.php">

                <div class="categories-title" id="category1-title">EXTERNO</div>

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
            <a class="categories-links hidden-scroll" id="category-link-2" href="<?= $basePath; ?>/pages/foto-categories/casais.php">
                <div class="categories-title" id="category1-title">CASAIS</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/IMG_1280.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/IMG_7212.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/IMG_9713.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/IMG_9543.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/IMG_0325.jpg" alt="">
                </div>
            </a>
        </div>

        <div class="categories" id="category3">
            <a class="categories-links hidden-scroll" id="category-link-3" href="<?= $basePath; ?>/pages/foto-categories/igreja.php">
                <div class="categories-title" id="category3-title">IGREJA</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/igreja/IMG_5542.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/igreja/IMG_4300.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/igreja/IMG_6275.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/igreja/IMG_0268.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/igreja/IMG_5597.jpg" alt="">
                </div>
            </a>
        </div>

        <div class="categories" id="category4">
            <a class="categories-links hidden-scroll" id="category-link-4" href="<?= $basePath; ?>/pages/foto-categories/edit.php">
                <div class="categories-title" id="category3-title">EDIT [EXTRA]</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/edit/IMG_0357.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/edit/IMG_8831.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/edit/IMG_9639.jpeg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/edit/IMG_6306.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/edit/IMG_0164.jpg" alt="">
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



