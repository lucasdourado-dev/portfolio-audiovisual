<?php
    $cssPage = 'hermanos.css';
    $cssExpo = 'design-expo.css';
    $titlePage = ' — Design';


    require_once __DIR__ . '/../../includes/header.php';
    require_once __DIR__ . '/../../includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <section id="expo-container">

        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/hermanos/01.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/hermanos/02.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/hermanos/001.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/hermanos/03.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/hermanos/04.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/hermanos/05.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/hermanos/06.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/hermanos/07.webp" alt="">
        </div>
        <div class="expo-frames">
            <img src="<?= $basePath ?>/assets/media/img-design/id-visual/hermanos/08.webp" alt="">
        </div>
        
    </section>
    <div id="overview">
        <div id="overview-description">
            <div id="description-title">Hermanos Barbearia / 2025</div>
            <div id="description-text">
                Rebranding realizado como proposta para a barbearia Hermanos, localizada em Curitiba, visando a atualização do visual e melhor adaptação às diferentes aplicações atuais. <br>
                O projeto inclui uma nova logo acompanhada de uma tipografia totalmente autoral, além da confecção de um pattern retirado dos traçados da fonte.
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