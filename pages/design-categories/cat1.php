<?php
    $cssPage = 'design-categories.css';
    $basePath = '/portfolio-audiovisual';
    require_once __DIR__ . '/../../includes/header.php';
    require_once __DIR__ . '/../../includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <div id="category-title">IDENTIDADE VISUAL</div>

    <section id="category-container">

        <div class="categories" id="category1">
            <a class="categories-links hidden-scroll" id="category-link-1" href="<?= $basePath; ?>/pages/design-categories/cat1-pages/up.php">

                <div class="categories-title" id="category1-title">Ministério UP</div>
                <div class="categories-subtitle" id="category1-subtitle"></div>

                <div class="categories-preview">
                    <video src="<?= $basePath ?>/assets/media/img-design/id-visual/up/up-motion.mp4" autoplay loop muted playsinline></video>
                </div>

            </a>
        </div>

        <div class="categories" id="category2">
            <a class="categories-links hidden-scroll" id="category-link-2" href="<?= $basePath; ?>/pages/design-categories/cat1-pages/hermanos.php">
                <div class="categories-title" id="category1-title">Hermanos</div>
                <div class="categories-subtitle" id="category2-subtitle"></div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-design/id-visual/hermanos/01.png" alt="">
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