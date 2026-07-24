<?php
    $cssPage = 'veranopolis.css';
    $cssExpo = 'design-expo.css';

    require_once __DIR__ . '/../../includes/header.php';
    require_once __DIR__ . '/../../includes/menu.php';
?>
<div class="transition-entering"></div>
<main>
    <section id="expo-container">
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/veranopolis/1.png" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/veranopolis/2.png" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/veranopolis/3.png" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/veranopolis/4.png" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/veranopolis/5.png" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/veranopolis/6.png" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/veranopolis/7.png" alt="">
        </div>
        
    </section>
    <div id="overview">
        <div id="overview-description">
            <div id="description-title">Veranópolis ECRC / 2023</div>
            <div id="description-text">
                O Veranópolis Esporte Clube Recreativo e Cultural, conhecido apenas por Veranópolis e cujo acrônimo é VEC, é um clube brasileiro de futebol, sediado na cidade de Veranópolis, no estado do Rio Grande do Sul. <br>
                Esse foi meu primeiro projeto com apresentação mais completo, disponível no <a href="https://www.behance.net/gallery/190014681/Veranopolis-ECRC-Redesign-de-Escudo" target="_blank" rel="noopener noreferrer" id="be-account">behance</a>.
            </div>
        </div>
        <div id="overview-tools">
            <div>Ferramentas</div>
            <ul>
                <li>- Inkscape</li>
            </ul>
        </div>
    </div>
</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/design.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../../includes/footer.php';
?>