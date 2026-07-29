<?php
    $cssPage = 'manto-da-gloria.css';
    $cssExpo = 'design-expo.css';
    $titlePage = ' — Design';


    require_once __DIR__ . '/../../includes/header.php';
    require_once __DIR__ . '/../../includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <section id="expo-container">

        <div class="expo-frames">
            <picture>
                <source media="(min-width: 768px)" srcset="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/desktop/1.webp">
                <img src="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/mobile/1.webp" alt="">
            </picture>
        </div>
        <div class="expo-frames">
            <picture>
                <source media="(min-width: 768px)" srcset="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/desktop/2.webp">
                <img src="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/mobile/2.webp" alt="">
            </picture>
        </div>
        <div class="expo-frames">
            <picture>
                <source media="(min-width: 768px)" srcset="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/desktop/3.webp">
                <img src="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/mobile/3.webp" alt="">
            </picture>
        </div>
        <div class="expo-frames">
            <picture>
                <source media="(min-width: 768px)" srcset="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/desktop/4.webp">
                <img src="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/mobile/4.webp" alt="">
            </picture>
        </div>
        <div class="expo-frames">
            <picture>
                <source media="(min-width: 768px)" srcset="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/desktop/5.webp">
                <img src="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/mobile/5.webp" alt="">
            </picture>
        </div>
        <div class="expo-frames">
            <picture>
                <source media="(min-width: 768px)" srcset="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/desktop/6.webp">
                <img src="<?= $basePath ?>/assets/media/img-design/camisa/manto-da-gloria/mobile/6.webp" alt="">
            </picture>
        </div>
        
    </section>
    <div id="overview">
        <div id="overview-description">
            <div id="description-title">Manto da Glória 2026</div>
            <div id="description-text">
                O concurso "Manto da Glória" (realizado pelo Coritiba em parceria com sua marca própria, a 1909) é um dos maiores projetos de design colaborativo e engajamento de torcida do futebol paranaense. <br>
                No ano de 2026, decidi participar pondo em prática minha paixão por uniformes de futebol, seguindo a temática de Copa do Mundo do último concurso.
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