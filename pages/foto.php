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
                    <img src="<?= $basePath; ?>/assets/media/img-photo/externo/thumbs/IMG_4080_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/externo/thumbs/IMG_0501_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/externo/thumbs/IMG_8799_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/externo/thumbs/IMG_8949_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/externo/thumbs/IMG_0670_thumb.webp" alt="">
                </div>

            </a>
        </div>

        <div class="categories" id="category2">
            <a class="categories-links hidden-scroll" id="category-link-2" href="<?= $basePath; ?>/pages/foto-categories/casais.php">
                <div class="categories-title" id="category1-title">CASAIS</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/thumbs/IMG_1280_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/thumbs/IMG_7212_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/thumbs/IMG_9713_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/thumbs/IMG_9543_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/casais/thumbs/IMG_0325_thumb.webp" alt="">
                </div>
            </a>
        </div>

        <div class="categories" id="category3">
            <a class="categories-links hidden-scroll" id="category-link-3" href="<?= $basePath; ?>/pages/foto-categories/igreja.php">
                <div class="categories-title" id="category3-title">IGREJA</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/igreja/thumbs/IMG_5542_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/igreja/thumbs/IMG_4300_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/igreja/thumbs/IMG_6275_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/igreja/thumbs/IMG_0268_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/igreja/thumbs/IMG_5597_thumb.webp" alt="">
                </div>
            </a>
        </div>

        <div class="categories" id="category4">
            <a class="categories-links hidden-scroll" id="category-link-4" href="<?= $basePath; ?>/pages/foto-categories/edit.php">
                <div class="categories-title" id="category3-title">EDIT [EXTRA]</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/edit/thumbs/IMG_0357_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/edit/thumbs/IMG_8831_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/edit/thumbs/IMG_9639_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/edit/thumbs/IMG_6306_thumb.webp" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-photo/edit/thumbs/IMG_0164_thumb.webp" alt="">
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



