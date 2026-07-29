<?php
    $activePage = 'contato';
    $cssPage = 'contato.css';
    $titlePage = ' — Contato';

    require_once __DIR__ . '/../includes/header.php';
    require_once __DIR__ . '/../includes/menu.php';
?>

<div class="transition-entering"></div>
<main>
    <section id="intro-container">
        <div id="page-title">
            <div>FALE COMIGO</div>
        </div>
        <div id="swipe-up">ARRASTE</div>
    </section>

    <div id="contacts">

        <ul class="contacts-lists"  id="contact-1">
            <li class="contact-itens">
                <a href="mailto:seuemail@exemplo.com">MAIL</a>
            </li>
            <li class="contact-itens">
                <a href="https://github.com/lucasdourado-dev/portfolio-audiovisual">GITHUB</a>
            </li>
            <li class="contact-itens">
                <a href="https://www.behance.net/madebydourado">BEHANCE</a>
            </li>
        </ul>

        <ul class="contacts-lists"  id="contact-2">
            <li class="contact-itens">
                <a href="https://www.instagram.com/lucaxdourado/" target="_blank" rel="noopener noreferrer">@PESSOAL</a>
            </li>
            <li class="contact-itens">
                <a href="https://www.instagram.com/shotbydourado/" target="_blank" rel="noopener noreferrer">@CAPTURAS</a>
            </li>
            <li class="contact-itens">
                <a href="https://www.instagram.com/madebydourado/" target="_blank" rel="noopener noreferrer">@DESIGN</a>
            </li>
        </ul>
    </div>

</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/contato.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../includes/footer.php';
?>