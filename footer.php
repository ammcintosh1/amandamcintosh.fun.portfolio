<?php
/**
 * The template for displaying the footer.
 *
 * Please browse readme.txt for credits and forking information
 * Contains the closing of the #content div and all content after
 *
 * @package photoblogster
 */

?>

</div><!-- #content -->

<?php if ( is_active_sidebar( 'footer_widget_left') ||  is_active_sidebar( 'footer_widget_middle') ||  is_active_sidebar( 'footer_widget_right')  ) : ?>
<div class="footer-widget-wrapper">
	<div class="container">

		<div class="row">
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer_widget_left' ); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer_widget_middle' ); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar( 'footer_widget_right' ); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<footer id="colophon" class="footer site-footer">
	<div class="row site-info">
    <div class="summary">
      <h4>&copy; Amanda McIntosh, <?php echo date_i18n(__('Y','photoblogster')); ?></h4>
      <p>I'm a designer, developer, and adventurer</p>
      <p>Based in San Diego, CA</p>
      <p>352-443-2892</p>
      <p>amandamcintoshdesign@gmail.com</p>
    </div>

    <a href="contact.html" class="contact-button">Let's Work Together!</a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
