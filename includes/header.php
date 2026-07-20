<?php
    // Detecta se esta rodando localmente (XAMPP) ou no servidor de producao (Render)
    $isLocalhost = in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1']) 
                   || ($_SERVER['HTTP_HOST'] ?? '') === 'localhost';

    // Se for Localhost (XAMPP), usa a subpasta. Se for Producao (Render), usa caminho relativo da raiz.
    $basePath = $isLocalhost ? '/portfolio-audiovisual' : '';

    // Define a raiz fisica do projeto no servidor para carregar o filemtime sem erros
    $rootDir = dirname(__DIR__);

    
    // $basePath = '/portfolio-audiovisual';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dourado</title>
    <!-- CSS GLOBAL -->
    <link rel="stylesheet" href="<?= $basePath; ?>/assets/css/global/fonts.css?v=<?= filemtime(__DIR__ . '/../assets/css/global/fonts.css'); ?>">
    <link rel="stylesheet" href="<?= $basePath; ?>/assets/css/global/variables.css?v=<?= filemtime(__DIR__ . '/../assets/css/global/variables.css'); ?>">
    <link rel="stylesheet" href="<?= $basePath; ?>/assets/css/global/reset.css?v=<?= filemtime(__DIR__ . '/../assets/css/global/reset.css'); ?>">
    <link rel="stylesheet" href="<?= $basePath; ?>/assets/css/global/menu.css?v=<?= filemtime(__DIR__ . '/../assets/css/global/menu.css'); ?>">
    <link rel="stylesheet" href="<?= $basePath; ?>/assets/css/global/sections.css?v=<?= filemtime(__DIR__ . '/../assets/css/global/sections.css'); ?>">
    <link rel="stylesheet" href="<?= $basePath; ?>/assets/css/global/footer.css?v=<?= filemtime(__DIR__ . '/../assets/css/global/footer.css'); ?>">
    <link rel="stylesheet" href="<?= $basePath; ?>/assets/css/global/transition.css?v=<?= filemtime(__DIR__ . '/../assets/css/global/transition.css'); ?>">
    
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css"
    />
    
    <link rel="icon" type="image/png" href="<?php echo $basePath; ?>/assets/media/img-design/favicon.png">
    <?php if (isset($cssPage)): ?>
        <link rel="stylesheet" href="<?= $basePath; ?>/assets/css/pages/<?= $cssPage; ?>?v=<?= filemtime(__DIR__ . '/../assets/css/pages/' . $cssPage); ?>">
    <?php endif; ?>

</head>
<body>