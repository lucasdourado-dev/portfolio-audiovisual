    <footer>
        <div id="footer-text-container">
            <div class="footer-texts" id="contact-link"><a href="#">Vamos trabalhar juntos!</a></div>
            <div class="footer-texts">&copy; Dourado. Todos os direitos reservados.</div>
        </div>
        <div id="footer-logo">DOURADO</div>
    </footer>
    <div class="transition"></div>

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