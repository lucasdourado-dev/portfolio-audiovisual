<?php
    $activePage = 'sobre';
    $cssPage = 'sobre.css';
    $titlePage = ' — Sobre';

    require_once __DIR__ . '/../includes/header.php';
    require_once __DIR__ . '/../includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <section id="intro-container">
        <div id="page-title" class="intro-blur">
            <div>SOBRE MIM</div>
        </div>
        <div id="swipe-up">
            <span class="intro-blur"></span>
        </div>
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
                Desde pequeno, o desenho sempre fez parte da minha vida. Durante a pandemia, aos 14 anos, comecei a transformar meus escudos e camisas de futebol em projetos digitais, ainda utilizando o Canva. Foi nesse período que criei minha página de design no Instagram, onde tive a oportunidade de compartilhar trabalhos e trocar experiências com designers de diferentes partes do mundo. <br> <br>
                Com o tempo, meu interesse por identidade visual foi além do universo esportivo e passou a abranger o design como um todo. Também comecei a colaborar com a minha igreja local, desenvolvendo logotipos e peças gráficas para cultos e eventos. Buscar referências, estudar novas abordagens e observar diferentes estilos tornou-se um hábito que mantenho até hoje, inclusive em relação a web design. <br> <br>
                Minha trajetória começou no Canva, evoluiu para o Inkscape — ferramenta na qual desenvolvi grande parte dos meus projetos — e, mais recentemente, passei a trabalhar com o pacote Adobe, ampliando minhas possibilidades criativas e aperfeiçoando meu processo de criação. <br>
            </div>

        </div>

        <div class="about-categories hidden-scroll">
            <div class="about-categories-title">FOTO</div>
            <div class="about-categories-text">
                Meu primeiro contato com o audiovisual foi através do vídeo. Inspirado por criadores de conteúdo de viagem e pela estética cinematográfica de suas produções, despertei o interesse por contar histórias por meio das imagens. Como havia uma câmera em casa sem uso, aproveitei a oportunidade para começar a fotografar e aprender de forma autodidata. <br> <br>
                A fotografia foi o meu primeiro ministério na igreja, onde encontrei uma maneira de servir e contribuir com aquilo que fazia. Ao longo desse período, participei da cobertura de diversos eventos, desenvolvendo meu olhar, minha técnica e a sensibilidade para registrar momentos de forma autêntica. <br> <br>
                Buscando ampliar minha experiência, também realizei trabalhos como freelancer, incluindo casamentos civis, ensaios, e outros eventos. Cada projeto foi uma oportunidade de evoluir, experimentar diferentes estilos e consolidar minha identidade como fotógrafo.
            </div>
        </div>

        <div class="about-categories hidden-scroll">
            <div class="about-categories-title">VÍDEO</div>
            <div class="about-categories-text">
                Embora o vídeo tenha aparecido menos até aqui, ele sempre foi o meu principal objetivo. Acredito que a experiência adquirida com design e fotografia foi essencial para desenvolver um olhar mais apurado sobre composição, narrativa e estética — fundamentos que hoje aplico na produção audiovisual. <br> <br>
                Minha experiência prática ainda está em construção. Até o momento, desenvolvi projetos utilizando o Adobe Premiere com filmagens feitas por celular e câmera, enquanto me preparo para investir no equipamento ideal e elevar a qualidade das minhas produções. <br> <br>
                Foi recentemente que decidi direcionar meus esforços de forma definitiva para essa área. Desde então, tenho acelerado meu processo de aprendizado, buscando evoluir constantemente em técnica, linguagem e criatividade para transformar essa paixão na minha principal forma de expressão. <br> <br>
                Também possuo um anseio pessoal a longo prazo de produzir conteúdo cinematográfico cristão de alta qualidade, com o intuito de espalhar o Palavra do Evangelho por meio do meu olhar.
            </div>
        </div>

        <div class="about-categories hidden-scroll">
            <div class="about-categories-title">PORTFÓLIO</div>
            <div class="about-categories-text">
                Este portfólio reúne os principais projetos e experiências que marcaram a minha trajetória em design, fotografia e produção audiovisual. Mais do que uma vitrine do meu trabalho, ele representa minha evolução, meus interesses e a forma como enxergo a criatividade como ferramenta para comunicar ideias e contar histórias. <br> <br>
                Além de apresentar minhas produções, este site também faz parte do meu processo de aprendizado. Foi desenvolvido por mim utilizando HTML, CSS, PHP e JavaScript, unindo meu interesse pelo desenvolvimento web à construção de um espaço que representa minha identidade profissional.
            </div>
        </div>
    </section>

</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/sobre.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../includes/footer.php';
?>