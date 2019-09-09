<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section id="banner" class="slider mt-0 mb-0">
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


<div class="container mt-5 mb-5">

  <div class="row">

    <div class="col-12">

      <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>

      <?php the_content(); ?>

    </div>

  </div>

</div>

</article>

<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
