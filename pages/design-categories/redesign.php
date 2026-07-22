<?php
    $cssPage = 'redesign.css';
    require_once __DIR__ . '/../../includes/header.php';
    require_once __DIR__ . '/../../includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <div id="category-title">REDESIGN DE FUTEBOL</div>
    <div class="category-subtitle">ATUAL / REDESIGN</div>

    <section id="expo-container">

        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/veranopolis.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/sousa.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/bragantino.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/dourados.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/goianesia.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/saobento.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/america.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/fiorentina.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/bordeaux.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/vvv.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/redesign/torino.jpg" alt="">
        </div>
        
    </section>
    <div id="overview">
        <div id="overview-description">
            <div id="description-title">Redesign de Futebol / 2022 - 2024</div>
            <div id="description-text">
                Desde pequeno eu sempre dei uma atenção especial a escudos de futebol, algo que me entretém muito até hoje. <br>
                Esses são alguns redesigns de escudos de futebol que eu fiz nos últimos anos, com o intuito de repaginar o visual de algumas equipes. <br>
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