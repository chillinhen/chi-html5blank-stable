</main>	<!-- /main -->		
<!-- footer -->
<footer class="footer" role="contentinfo">
    <?php get_sidebar();?>
    <!-- copyright -->
    <p class="copyright">
        &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
        <a href="https://wordpress.org/" title="WordPress">WordPress</a> &amp; <a href="http://html5reset.org" title="HTML5 Blank">HTML5 Blank</a>.
    </p>
    <!-- /copyright -->
</footer>
<!-- /footer -->

</div>
<!-- /wrapper -->

<?php wp_footer(); ?>

<!-- analytics -->
<?php
$analytics = get_field('analytics', 'option');
if ($analytics):
    ?>
    <script>
    <?php echo strip_tags($analytics); ?>
    </script>
<?php endif; ?>

</body>
</html>
