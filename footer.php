<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer class="footer">
  <div class="container">
    <p class="text-muted">Place sticky footer content here.</p>
  </div>
</footer>

<?php wp_footer(); ?>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/share.js"></script>
</body>
</html>
