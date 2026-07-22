<?php
    $activePage = 'sobre';
    $cssPage = 'sobre.css';
    $basePath = '/portfolio-audiovisual';
    require_once __DIR__ . '/../includes/header.php';
    require_once __DIR__ . '/../includes/menu.php';
?>

<main>
    <section id="intro-container">
        <div id="page-title">
            <div>SOBRE MIM</div>
        </div>
        <div id="swipe-up">^</div>
    </section>

    <section id="about-container">

        <div id="about-intro" class="hidden-scroll">
            <div id="about-intro-image">
                <img src="<?= $basePath; ?>/assets/media/DSC_0350.jpeg" alt="">
            </div>
            <div id="about-intro-text">
                Entusiasta de audiovisual, nascido no Rio de Janeiro, atualmente cursando 
                Análise e Desenvolvimento de Sistemas na Universidade Federal do Paraná, em Curitiba.
            </div>
        </div>

        <div class="about-categories hidden-scroll">

            <div class="about-categories-title">DESIGN</div>
            <div class="about-categories-text">
                Desde de criança desenhar fazia parte de mim. Na pandemia, aos 14 anos, iniciei a transferir meus escudos e camisas de futebol para o digital, ainda pelo Canva. Foi quando criei minha conta de design no instagram e troquei experiências com outros designers ao redor do mundo. <br>
                Com o passar do tempo, o interesse por identidade visual no geral foi me intrigando cada vez mais, saindo da bolha do esporte. Também iniciei a colaborar na igreja local fazendo logos e artes para culto. É quase um hobbie passar tempo vendo referências sobre. <br>
                Do Canva inicialmente, passei para o Inkscape, onde fiz maior parte das minhas produções, e mais recentemente tenho me adaptado ao pacote Adobe.
            </div>

        </div>

        <div class="about-categories hidden-scroll">
            <div class="about-categories-title">FOTO</div>
            <div class="about-categories-text">
                Meu primeiro interesse foi vídeo, assistindo influencers de viagem na internet produzindo conteúdos cinematográficos. Havendo uma câmera em casa que não estava sendo utilizada, comecei a tirar fotos e aprender por conta própria.<br>
                Fotografia foi o meu primeiro ministério, onde pude me aperfeiçoar e encontrar pela primeira vez algo que eu pudesse contribuir, participando de vários eventos.<br>
                Também comecei a fazer freelances de casamentos civis, entre outros, com o objetivo de me encontrar na fotografia. 
            </div>
        </div>

        <div class="about-categories hidden-scroll">
            <div class="about-categories-title">VÍDEO</div>
            <div class="about-categories-text">
                O que você menos viu até aqui é minha área de maior interesse. Considero que design e fotografia me ajudaram a ter um bom olhar ao longo do tempo para expandir para a produção de vídeo, que é o meu objetivo desde o início.<br>
                Minha bagagem até hoje são edições ainda bem básicas pelo Premiere com filmagens de celular, e tenho juntado recursos para adquirir uma câmera ideal para produzir com qualidade. <br>
                A decisão de por finalmente mão nesse processo é recente e estou acelerando meu desenvolvimento.
            </div>
        </div>

        <div class="about-categories hidden-scroll">
            <div class="about-categories-title">PORTFÓLIO</div>
            <div class="about-categories-text">
                Esse portfólio tem o objetivo de expor minhas principais atuações e produções ao longo do tempo para conseguir oportunidades de atuação nessas áreas.<br>
                Produzido com HTML, CSS, PHP e Javascript, também como forma de estudo.
            </div>
        </div>
    </section>

</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/sobre.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../includes/footer.php';
?>