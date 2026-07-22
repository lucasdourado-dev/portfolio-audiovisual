<?php
    $activePage = 'design';
    $cssPage = 'design.css';
    $basePath = '/portfolio-audiovisual';
    require_once __DIR__ . '/../includes/header.php';
    require_once __DIR__ . '/../includes/menu.php';
?>

<main>
    <section id="intro-container">
        <div id="page-title">
            <div>DESIGN</div>
        </div>
        <div id="swipe-up">^</div>
    </section>

    <section id="category-container">

        <div class="categories" id="category1">
            <a class="categories-links hidden-scroll" id="category-link-1" href="<?= $basePath; ?>/pages/design-categories/cat1.php">

                <div class="categories-title" id="category1-title">Identidade Visual</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-design/id-visual/up/iphone-mockup.png" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-design/id-visual/hermanos/06.png" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-design/id-visual/uni/1.jpg" alt="">
                    
                </div>

            </a>
        </div>

        <div class="categories" id="category2">
            <a class="categories-links hidden-scroll" id="category-link-2" href="<?= $basePath ?>/pages/design-categories/cat2.php">
                <div class="categories-title" id="category1-title">Camisas</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-design/camisa/manto-da-gloria/mobile/capa.png" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-design/camisa/cordeiro-de-deus/mobile/03.png" alt="">
                </div>
            </a>
        </div>

        <div class="categories" id="category3">
            <a class="categories-links hidden-scroll" id="category-link-3" href="<?= $basePath ?>/pages/design-categories/redesign.php">
                <div class="categories-title" id="category1-title">Redesign de Futebol</div>

                <div class="categories-preview">
                    <img src="<?= $basePath; ?>/assets/media/img-design/redesign/bordeaux.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-design/redesign/fiorentina.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-design/redesign/bragantino.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-design/redesign/sousa.jpg" alt="">
                    <img src="<?= $basePath; ?>/assets/media/img-design/redesign/torino.jpg" alt="">
                </div>
            </a>
        </div>

        
    </section>
</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/design.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../includes/footer.php';
?>