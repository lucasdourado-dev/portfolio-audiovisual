<?php
    $cssPage = 'cordeiro-de-deus.css';
    $cssExpo = 'design-expo.css';
    $titlePage = ' — Design';

    
    require_once __DIR__ . '/../../includes/header.php';
    require_once __DIR__ . '/../../includes/menu.php';
?>
<div class="transition-entering"></div>
<main>
    <section id="expo-container">
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/camisa/cordeiro-de-deus/01.png" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/camisa/cordeiro-de-deus/02.png" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/camisa/cordeiro-de-deus/03.png" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/camisa/cordeiro-de-deus/04.png" alt="">
        </div>
    </section>
    <div id="overview">
        <div id="overview-description">
            <div id="description-title">Cordeiro de Deus</div>
            <div id="description-text">
                Carregando a temática do culto de Gerações da Igreja Batista Bom Retiro, Cordeiro de Deus, fui responsável por idealizar e desenhar a estampa da camisa desse evento.
            </div>
        </div>
        <div id="overview-tools">
            <div>Ferramentas</div>
            <ul>
                <li>- Inkscape</li>
                <li>- Photoshop</li>
            </ul>
        </div>
    </div>
</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/design.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../../includes/footer.php';
?>