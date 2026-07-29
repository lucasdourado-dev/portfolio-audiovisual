<?php
    $cssPage = 'up.css';
    $cssExpo = 'design-expo.css';
    $titlePage = ' — Design';


    require_once __DIR__ . '/../../includes/header.php';
    require_once __DIR__ . '/../../includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <section id="expo-container">

        <div class="expo-frames" id="video-1">
            <video src="<?= $basePath ?>/assets/media/img-design/id-visual/up/up-motion.mp4" autoplay loop muted playsinline></video>
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/up/black-white.jpg" alt="">
        </div>
        <div class="expo-frames" id="video-2">
            <video src="<?= $basePath ?>/assets/media/img-design/id-visual/up/up-grid.mp4" autoplay loop muted playsinline></video>
        </div>
        <!-- <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/up/wider-screen.png" alt="">
        </div> -->
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/up/verse.png" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/up/iphone-mockup.png" alt="">
        </div>
        
        <div class="expo-frames">
            <div class="expo-frames-posts-block">
                <div class="expo-frames-posts">
                    <img src="<?= $basePath ?>/assets/media/img-design/id-visual/up/post-1.png" alt="">
                </div>
                <div class="expo-frames-posts">
                    <img src="<?= $basePath ?>/assets/media/img-design/id-visual/up/post-2.png" alt="">
                </div>
            </div>
            <div class="expo-frames-posts-block">
                <div class="expo-frames-posts">
                    <img src="<?= $basePath ?>/assets/media/img-design/id-visual/up/post-3.png" alt="">
                </div>
                <div class="expo-frames-posts">
                    <img src="<?= $basePath ?>/assets/media/img-design/id-visual/up/post-4.png" alt="">
                </div>
            </div>
        </div>

        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/up/subway-mockup.png" alt="">
        </div>

    </section>
    <div id="overview">
        <div id="overview-description">
            <div id="description-title">Ministério UP / 2026</div>
            <div id="description-text">
                O Up é o ministério de adolescentes da Igreja Batista Bom Retiro, localizada em Curitiba. Meu objetivo foi desenvolver um visual único para o ministério, trabalhando em uma logo intuitiva e versátil, podendo ser desconstruída para as mais diferentes aplicações e permitindo ampla usabilidade, espalhando sua forma por meio de silhuetas e moldes. <br>
                A logo principal traz a escrita em forma vertical, sendo cortada por uma seta que atravessa as letras, mirando o Alto. <br>
                O desenvolvimento da identidade visual continua em andamento para a melhor comunicação e transmissão do ministério.
            </div>
        </div>
        <div id="overview-tools">
            <div>Ferramentas</div>
            <ul>
                <li>- Inkscape</li>
                <li>- Illustrator</li>
                <li>- Photoshop</li>
                <li>- Premiere</li>
            </ul>
        </div>
    </div>
</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/design.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../../includes/footer.php';
?>