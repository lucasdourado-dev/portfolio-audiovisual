<footer>
        <div id="footer-text-container">
            <div class="footer-texts-igreja">Dele, por Ele, para Ele.</div>
            <div class="footer-texts-igreja-copy">&copy; 2026 Todos os direitos reservados.</div>
        </div>
        <div id="footer-logo-igreja">DOURADO</div>
    </footer>
    <div class="transition-leaving"></div>

    <?php if (isset($pageJs)): ?>
        <script src="<?php echo $pageJs; ?>"></script>
    <?php endif; ?>

    <?php if (isset($menu)): ?>
        <script src="<?php echo $menu; ?>"></script>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>
    <script>
      Fancybox.bind("[data-fancybox]", {
        // Suas customizações aqui
        Carousel: {
        navigation: false,
        },
      });
    </script>

    <script src="<?= $basePath; ?>/assets/js/global/animations.js"></script>

    </body>
</html>