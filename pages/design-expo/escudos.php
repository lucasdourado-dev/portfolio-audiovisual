<?php
    $cssPage = 'escudos.css';
    $cssExpo = 'design-expo.css';
    $titlePage = ' — Design';


    require_once __DIR__ . '/../../includes/header.php';
    require_once __DIR__ . '/../../includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <div id="category-title">ESCUDOS DE FUTEBOL</div>
    <!-- <div class="category-subtitle">ATUAL / REDESIGN</div> -->

    <section id="expo-container">

        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/veranopolis.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/sousa.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/dourados.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/bragantino.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/goianesia.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/saobento.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/fiorentina.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/bordeaux.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/torino.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/vvv.webp" alt="">
        </div>
        
    </section>
    <div id="overview">
        <div id="overview-description">
            <div id="description-title">Escudos de Futebol / 2022 - 2024</div>
            <div id="description-text">
                Desde pequeno eu sempre dei uma atenção especial a escudos de futebol, algo que me entretém muito até hoje. <br>
                Esses são alguns redesigns que eu fiz nos últimos anos, com o intuito de repaginar o visual de algumas equipes. <br>
                Você pode ver os detalhes e processos de cada um deles na minha conta de design do <a href="https://www.instagram.com/madebydourado/" target="_blank" rel="noopener noreferrer" id="insta-account">instagram</a>.
            </div>
        </div>
        <div id="overview-tools">
            <div>Ferramentas</div>
            <ul>
                <li>- Inkscape</li>
            </ul>
        </div>
    </div>
        
        
    </section>
</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/foto-cat1.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../../includes/footer.php';