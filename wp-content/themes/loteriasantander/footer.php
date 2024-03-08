    <footer class="footer">
        <!-- Your footer content goes here -->
        <?php include 'partials/social-media-footer.php'; ?>
        <p class="footer__copyright">Todos los derechos reservados &copy; <?php echo date('Y'); ?></p>
        <p class="footer__last-updated">Última actualización: <?php echo get_the_modified_date(); ?></p>
    </footer>
    <?php include 'partials/govco-header.php'; ?>
    <?php wp_footer(); ?>

</body>
</html>