<?php
    $activePage = 'contato';
    $cssPage = 'contato.css';
    $basePath = '/portfolio-audiovisual';
    require_once __DIR__ . '/../includes/header.php';
    require_once __DIR__ . '/../includes/menu.php';
?>

<main>
    <section id="intro-container">
        <div id="page-title">
            <div>FALE COMIGO</div>
        </div>
        <div id="swipe-up">ARRASTE</div>
    </section>

    <div id="contacts">

        <div class="contacts-categories" id="contact-1">
            <p class="contacts-title">EMAIL</p>
            <ul class="contacts-lists">
                <li class="contact-itens">
                    <a href="">LUCAS9DOURADO@GMAIL.COM</a>
                </li>
            </ul>
        </div>

        <div class="contacts-categories" id="contact-2">
            <p class="contacts-title">INSTAS</p>
            <ul class="contacts-lists">
                <li class="contact-itens">
                    <a href="[https://instagram.com/lucaxdourado](https://instagram.com/lucaxdourado)">PESSOAL</a>
                </li>
                <li class="contact-itens">
                    <a href="">FOTO & VIDEO</a>
                </li>
                <li class="contact-itens">
                    <a href="">DESIGN</a>
                </li>
            </ul>
        </div>
    </div>

</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/contato.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../includes/footer.php';
?>