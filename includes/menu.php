<header>
    <div id="overlay"></div>
    <div class="top-bar">
        <p class="logo">D</p>
        <button class="menu-toggle">
            <span></span>
            <span></span>
        </button>
    </div> 
    <nav class="menu">
        <ul>
            <li class="menu-itens <?= (isset($activePage) && $activePage == 'home') ? 'active-page' : '' ?>">
                <a href="<?= $basePath; ?>/index.php">HOME</a>
            </li>
        </ul>
        <ul>
            <li class="menu-itens <?= (isset($activePage) && $activePage == 'foto') ? 'active-page' : '' ?>">
                <a href="<?= $basePath; ?>/pages/foto.php">FOTO</a></li>
            <li class="menu-itens <?= (isset($activePage) && $activePage == 'video') ? 'active-page' : '' ?>">
                <a href="#">VIDEO</a></li>
            <li class="menu-itens <?= (isset($activePage) && $activePage == 'design') ? 'active-page' : '' ?>">
                <a href="#">DESIGN</a></li>
        </ul>
        <ul>
            <li class="menu-itens" <?= (isset($activePage) && $activePage == 'design') ? 'sobre' : '' ?>>
                <a href="#">SOBRE</a></li>
            <li class="menu-itens" <?= (isset($activePage) && $activePage == 'design') ? 'contato' : '' ?>>
                <a href="#">CONTATO</a></li>
        </ul>
    </nav>
</header>