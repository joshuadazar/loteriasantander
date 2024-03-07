    <footer class="footer">
        <!-- Your footer content goes here -->
        <p class="footer__copyright">Todos los derechos reservados &copy; <?php echo date('Y'); ?></p>
        <p class="footer__last-updated">Última actualización: <?php echo get_the_modified_date(); ?></p>
    </footer>
    <?php include 'patterns/govco-header.php'; ?>
    <?php wp_footer(); ?>

</body>
</html>