</div>
<footer id="footer" class="blue-bg">

  <div class="container">

    <div class="row">
      <div class="col-12">
        <div id="footer-logo"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/buytoletdeals-logo-white.png" alt="Buy to let deals logo"></a></div>
      </div>
    </div>

	  <div class="row justify-content-md-center">

      <div id="footer-content" class="col-12">

			<div id="find-us">
        <h5>How to find us</h5>
        <?php the_field('footer_address', 'option'); ?>
      </div>

      <div id="useful-links">
        <h5>Useful links</h5>
        <?php if( have_rows('footer_links', 'option') ): ?>

          <?php while( have_rows('footer_links', 'option') ): the_row();
            $link = get_sub_field('footer_link');
          ?>

          <a class="btn btn-link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>

          <?php  endwhile;?>

        <?php endif; ?>
      </div>

      <div id="get-in-touch">
        <h5>Get in touch</h5>

        <?php if( have_rows('footer_contact_info', 'option') ):

      	while( have_rows('footer_contact_info', 'option') ): the_row();

      		// vars
      		$phone = get_sub_field('footer_phone');
          $email = get_sub_field('footer_email');
          $twitter = get_sub_field('twitter_link');
          $instagram = get_sub_field('instagram_link');

      		?>

    			<div class="content">
    				<a href="<?php echo $phone['url']; ?>" class="footer-phone"><?php echo $phone['title']; ?></a>
            <a href="<?php echo $email['url']; ?>" class="footer-email"><?php echo $email['title']; ?></a>
            <a href="<?php echo $twitter['url']; ?>" class="footer-twitter social-icon"></a>
            <a href="<?php echo $instagram['url']; ?>" class="footer-instagram social-icon"></a>
    			</div>


      	<?php endwhile; ?>

      <?php endif; ?>

      </div>

      <div id="investors">
        <h5>Join our exclusive investors group</h5>

        <?php if( have_rows('facebook_investors', 'option') ):

      	while( have_rows('facebook_investors', 'option') ): the_row();

      		// vars
      		$description = get_sub_field('investor_description');
          $link = get_sub_field('investor_link');

      		?>

    			<div class="content">
            <p><?php echo $description; ?></p>
    				<a class="btn btn-secondary" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
    			</div>


      	<?php endwhile; ?>

      <?php endif; ?>

      </div>

    </div>

    </div>

  </div>

  <div id="copyright">
    <div class="container">

      <div class="row">
        <div class="col-12">
          &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        </div>
      </div>

    </div>
  </div>

</footer>
</div>
<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
