<?php
    $cssPage = 'uni.css';
    $cssExpo = 'design-expo.css';

    require_once __DIR__ . '/../../includes/header.php';
    require_once __DIR__ . '/../../includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <section id="expo-container">

        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/uni/1.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/uni/2.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/uni/3.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/uni/4.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/uni/5.jpg" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/uni/6.jpg" alt="">
        </div>
        
    </section>
    <div id="overview">
        <div id="overview-description">
            <div id="description-title">Cross UNI / 2025</div>
            <div id="description-text">
                Criação de logotipo e paleta de cores para o Cross UNI, ministério de universitários da juventude Cross, da Igreja Batista do Bacacheri, em Curitiba.
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