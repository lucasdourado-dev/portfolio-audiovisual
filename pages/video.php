<?php
    $activePage = 'video';
    $cssPage = 'video.css';
    $basePath = '/portfolio-audiovisual';
    require_once __DIR__ . '/../includes/header.php';
    require_once __DIR__ . '/../includes/menu.php';
?>

<main>
    <section id="intro-container">
        <div id="page-title">
            <div>VIDEO</div>
        </div>
        <div id="swipe-up">ARRASTE</div>
    </section>

    <section id="category-container">

        <div class="categories hidden-scroll" id="category1">

            <!-- <div class="categories-title" id="category1-title">Camera Roll</div> -->

            <div class="categories-preview">
                <iframe src="https://player.vimeo.com/video/1210805196?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="camera-roll"></iframe>
                    <script src="https://player.vimeo.com/api/player.js"></script>
            </div>

        </div>
        
    </section>

</main>

<?php
    $pageJs = $basePath . '/assets/js/pages/video.js';
    $menu = $basePath . '/assets/js/global/menu.js';
    require_once __DIR__ . '/../includes/footer.php';
?>