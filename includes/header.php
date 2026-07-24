<?php
    // SEGUNDA SOLUCAO

    // 1. Detecta o ambiente (Localhost XAMPP vs Servidor de Produção)
    $host = $_SERVER['HTTP_HOST'] ?? '';
    $isLocalhost = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false);

    // 2. Base URL para os links HTML e tags <link> no navegador
    // No XAMPP: /portfolio-audiovisual
    // No Render: '' (vazio)
    $basePath = $isLocalhost ? '/portfolio-audiovisual' : '';

    // 3. Caminho físico completo no sistema de arquivos do servidor para o filemtime()
    $baseDir = $_SERVER['DOCUMENT_ROOT'] . $basePath;

    // Função auxiliar para evitar erros de leitura e gerar o versionamento limpo do CSS
    function getAssetUrl($relativePath, $basePath, $baseDir) {
        $fullPath = $baseDir . $relativePath;
        $version = file_exists($fullPath) ? filemtime($fullPath) : '1.0';
        return $basePath . $relativePath . '?v=' . $version;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dourado</title>
    <!-- CSS GLOBAL -->

    <link rel="stylesheet" href="<?= getAssetUrl('/assets/css/global/fonts.css', $basePath, $baseDir); ?>">
    <link rel="stylesheet" href="<?= getAssetUrl('/assets/css/global/variables.css', $basePath, $baseDir); ?>">
    <link rel="stylesheet" href="<?= getAssetUrl('/assets/css/global/reset.css', $basePath, $baseDir); ?>">
    <link rel="stylesheet" href="<?= getAssetUrl('/assets/css/global/menu.css', $basePath, $baseDir); ?>">
    <link rel="stylesheet" href="<?= getAssetUrl('/assets/css/global/sections.css', $basePath, $baseDir); ?>">
    <link rel="stylesheet" href="<?= getAssetUrl('/assets/css/global/footer.css', $basePath, $baseDir); ?>">
    <link rel="stylesheet" href="<?= getAssetUrl('/assets/css/global/transition.css', $basePath, $baseDir); ?>">
    
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css"
    />
    
    <?php if (isset($cssExpo)): ?>
        <link rel="stylesheet" href="<?= getAssetUrl('/assets/css/pages/' . $cssExpo, $basePath, $baseDir); ?>">
    <?php endif; ?>
    
    <?php if (isset($cssPage)): ?>
        <link rel="stylesheet" href="<?= getAssetUrl('/assets/css/pages/' . $cssPage, $basePath, $baseDir); ?>">
    <?php endif; ?>

    <link rel="icon" type="image/png" href="<?= getAssetUrl('/assets/media/img-design/favicon.png', $basePath, $baseDir); ?>">

</head>
<body>