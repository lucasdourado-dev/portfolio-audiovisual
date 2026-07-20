<?php
    if (!isset($activePage)) {
        // Pega a URI atual e remove query strings (ex: ?v=123)
        $rawUri = $_SERVER['REQUEST_URI'] ?? '';
        $currentUri = parse_url($rawUri, PHP_URL_PATH) ?? '';

        // Se o $basePath estiver definido e não for vazio, remove do início da URI
        if (!empty($basePath) && strpos($currentUri, $basePath) === 0) {
            $currentUri = substr($currentUri, strlen($basePath));
        }

        // Garante que a URI limpa comece com /
        $currentUri = '/' . ltrim($currentUri, '/');

        // Identifica a página ativa
        if (strpos($currentUri, '/pages/design') !== false || strpos($currentUri, '/design-categories') !== false) {
            $activePage = 'design';
        } elseif (strpos($currentUri, '/pages/foto') !== false || strpos($currentUri, '/foto-categories') !== false) {
            $activePage = 'foto';
        } elseif (strpos($currentUri, '/pages/video') !== false) {
            $activePage = 'video';
        } elseif (strpos($currentUri, '/pages/sobre') !== false) {
            $activePage = 'sobre';
        } elseif (strpos($currentUri, '/pages/contato') !== false) {
            $activePage = 'contato';
        } elseif (strpos($currentUri, '/index.php') !== false || $currentUri === '/' || $currentUri === '') {
            $activePage = 'home';
        }
    }
?>
<header>
    <div id="overlay"></div>
    <div class="top-bar">
        <p class="logo">MENU</p>
        <button class="menu-toggle">
            <span></span>
            <span></span>
        </button>
    </div> 
    <nav class="menu">
        <ul>
            <li class="menu-itens <?= ($activePage ?? '') === 'home' ? 'active-page' : '' ?>">
                <a href="<?= $basePath; ?>/index.php">HOME</a>
            </li>
        </ul>
        <ul>
            <li class="menu-itens <?= ($activePage ?? '') === 'foto' ? 'active-page' : '' ?>">
                <a href="<?= $basePath; ?>/pages/foto.php">FOTO</a>
            </li>
            <li class="menu-itens <?= ($activePage ?? '') === 'video' ? 'active-page' : '' ?>">
                <a href="<?= $basePath; ?>/pages/video.php">VIDEO</a>
            </li>
            <li class="menu-itens <?= ($activePage ?? '') === 'design' ? 'active-page' : '' ?>">
                <a href="<?= $basePath; ?>/pages/design.php">DESIGN</a>
            </li>
        </ul>
        <ul>
            <li class="menu-itens <?= ($activePage ?? '') === 'sobre' ? 'active-page' : '' ?>">
                <a href="<?= $basePath; ?>/pages/sobre.php">SOBRE</a>
            </li>
            <li class="menu-itens <?= ($activePage ?? '') === 'contato' ? 'active-page' : '' ?>">
                <a href="<?= $basePath; ?>/pages/contato.php">CONTATO</a>
            </li>
        </ul>
    </nav>
</header>