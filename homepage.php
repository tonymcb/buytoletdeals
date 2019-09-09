<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section id="banner" class="slider mt-0 mb-0 home">
	<?php if( have_rows('banner_slides') ): ?>

	<ul class="slides">

	<?php while( have_rows('banner_slides') ): the_row();

		$title = get_sub_field('banner_title');
		$description = get_sub_field('banner_text');
		$button = get_sub_field('banner_button_text');
		$link = get_sub_field('banner_button_link');
		$image = get_sub_field('banner_image');

		?>

		<li class="slide">

			<div class="container">
				<div class="row">

					<div class="banner-text">
						<div>
							<h1><?php echo $title; ?></h1>
							<span><?php echo $description; ?></span>
							<a href="<?php echo $link['url']; ?>" class="btn btn-primary"><?php echo $link['title']; ?></a>
						</div>
					</div>

				</div>

			</div>

			<div class="banner-image">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			</div>

		</li>

	<?php endwhile; ?>

	</ul>

	<?php endif; ?>
</section>

<section class="signup signup--gold mt-0">
	<div class="container">
		<div class="row justify-content-md-center">
		<img src="<?php bloginfo('template_url'); ?>/images/icon-contact.svg" alt="Phone">
		<h5>Sign up & get our newest property listings direct to your inbox</h5>
		<a href="#" class="btn btn-dark">Sign up</a>
		</div>
	</div>
</section>


<section id="deals">

	<div class="container">

	  <div class="row justify-content-md-center">

			<div class="col-12 d-flex justify-content-between align-items-center mb-4 mb-lg-5">
				<h2 class="mb-0">Latest deals</h2>
				<a href="#" class="btn btn-primary">View all</a>
			</div>

	    <div class="col-12 col-md-4">
				<a href="#">
					<div class="card text-left">
					  <div class="card-header">
							<span class="card-offer">5% discount</span>
					    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/content/property-1.jpg" alt="Card image cap">
					  </div>
					  <div class="card-body">
							<ul class="card-text">
								<li class="card-title d-flex justify-content-between pb-3 mb-3"><h5>Gloucester</h5><span>3 Bed Terraced House</span></li>
								<li class="d-flex justify-content-between mb-2"><b>Yield</b><span>7.19%</span></li>
								<li class="d-flex justify-content-between"><b>Returns</b><span>15.23%</span></li>
							</ul>
					  </div>
					  <div class="card-footer">
					    <h4>£77,000</h4>
					  </div>
					</div>
				</a>
	    </div>

	    <div class="col-12 col-md-4">
				<a href="#">
					<div class="card text-left">
					  <div class="card-header">
							<span class="card-offer">5% discount</span>
					    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/content/property-2.jpg" alt="Card image cap">
					  </div>
					  <div class="card-body">
							<ul class="card-text">
								<li class="card-title d-flex justify-content-between pb-3 mb-3"><h5>Gloucester</h5><span>3 Bed Terraced House</span></li>
								<li class="d-flex justify-content-between mb-2"><b>Yield</b><span>7.19%</span></li>
								<li class="d-flex justify-content-between"><b>Returns</b><span>15.23%</span></li>
							</ul>
					  </div>
					  <div class="card-footer">
					    <h4>£77,000</h4>
					  </div>
					</div>
				</a>
	    </div>

	    <div class="col-12 col-md-4">
				<a href="#">
					<div class="card text-left">
					  <div class="card-header">
							<span class="card-offer">5% discount</span>
					    <img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/content/property-3.jpg" alt="Card image cap">
					  </div>
					  <div class="card-body">
							<ul class="card-text">
								<li class="card-title d-flex justify-content-between pb-3 mb-3"><h5>Gloucester</h5><span>3 Bed Terraced House</span></li>
								<li class="d-flex justify-content-between mb-2"><b>Yield</b><span>7.19%</span></li>
								<li class="d-flex justify-content-between"><b>Returns</b><span>15.23%</span></li>
							</ul>
					  </div>
					  <div class="card-footer">
					    <h4>£77,000</h4>
					  </div>
					</div>
				</a>

	    </div>

	  </div><!-- /.row -->

	</div><!-- /.container -->

</section><!-- /#deals -->

<section class="signup signup--blue mb-5">
	<div class="container">
		<div class="row justify-content-md-center">
			 <img src="<?php bloginfo('template_url'); ?>/images/icon-money.svg" alt="Money">
			 <h5>Learn how you can become a successful property investor!</h5>
			 <a href="#" class="btn btn-secondary">Get in touch</a>
		</div>
	</div>
</section>

<section id="why-use-us">

	<div class="container">

		<div class="row justify-content-md-center">

			<div class="col-12">

				<div class="row justify-content-md-left">

					<div class="col-12 col-md-6 mb-5">

						<h2>Why use us?</h2>

						<?php the_field('introduction'); ?>

						<?php if( have_rows('tab') ): ?>

								<ul class="nav nav-pills" id="pills-tab" role="tablist">

									<?php $row = 1; ?>

									<?php while( have_rows('tab') ): the_row();
										$title = get_sub_field('title');
									?>

									<li class="nav-item">

										<a class="nav-link <?php if($row == 1) {echo 'active';}?>" id="<?php echo $title; ?>-tab" data-toggle="tab" href="#<?php echo $title; ?>" role="tab" aria-controls="<?php echo $title; ?>"><?php echo $title; ?></a>

									</li>

									<?php $row++; endwhile;?>

								</ul>

						<?php endif; ?>

						<?php if( have_rows('tab') ): ?>

							<?php $row = 1; ?>

								<div class="tab-content" id="myTabContent">

									<?php while( have_rows('tab') ): the_row();

										$title = get_sub_field('title');
										$content = get_sub_field('content');
										$link = get_sub_field('link');
										$image = get_sub_field('image');

										?>

											<div class="tab-pane fade show <?php if($row == 1) {echo 'active';}?>" id="<?php echo $title; ?>" role="tabpanel" aria-labelledby="<?php echo $title; ?>-tab">

												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="illustration" />

												<p><?php echo $content; ?></p>

												<?php

												$link = get_sub_field('link');

												if( $link ):
													$link_url = $link['url'];
													$link_title = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
													?>
													<a class="btn btn-dark" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

												<?php endif; ?>

											</div>


									<?php $row++; endwhile;?>

								</div>

							<?php endif; ?>

					</div>

				</div>


			</div>

		</div><!-- /.row -->

	</div><!-- /.container -->

</section>

<section id="how-we-work" class="blue-bg mb-md-0">

	<div class="container">

	  <div class="row justify-content-md-center">

			<div class="col-12">

				<h2>How we work</h2>

			</div>

			<?php if( have_rows('how_features') ): ?>

			<ul class="d-md-flex circle-features">

			<?php while( have_rows('how_features') ): the_row();

				$image = get_sub_field('icon');
				$title = get_sub_field('title');
				$description = get_sub_field('text');

				?>

				<li>

					<div class="circle-icon circle-icon--gold">

						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

					</div>

					<h5><?php echo $title; ?></h5>

					<span><?php echo $description; ?></span>

				</li>

			<?php endwhile; ?>

			</ul>

			<?php endif; ?>

		</div>

</section><!-- /#how-we-work -->

<section id="services" class="mt-5 mb-0 mt-md-0">

	<div class="container">

	  <div class="row justify-content-md-center">

			<div class="col-12 col-md-6 pt-md-5 pb-md-5">

				<h2>Our services</h2>

				<p><?php the_field('services_introduction'); ?></p>

				<?php

				$link = get_field('link');

				if( $link ):
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn btn-dark" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

				<?php endif; ?>

			</div>

			<div class="col-12 col-md-6 services mt-5 mt-md-0">

				<?php if( have_rows('services') ): ?>

				<div class="gold">

				<ul>

				<?php while( have_rows('services') ): the_row();?>

					<li>
						<img src="<?php bloginfo('template_url'); ?>/images/icon-white-check.svg" alt="Check"><h5><?php the_sub_field('service'); ?></h5>
					</li>

				<?php endwhile; ?>

				</ul>

				</div>

				<?php endif; ?>

			</div>

		</div>

	</div>

</section>

<div class="entry-content">

</article>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
