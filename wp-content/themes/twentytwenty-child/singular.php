<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->


    <div class="my-container">
        <div class="text-content">
            <div class="header-text">
                <h2 class="tittle-text"><?php echo $field = get_post_meta( 5, 'Заголовок', true );?></h2>
            </div>
            <div class="text-labels">
                <div class="item-labels">
                   <?php echo $field = get_post_meta( 5, 'Левый контент', true );?>
                </div>
                <div class="item-labels">
                    <?php echo $field = get_post_meta( 5, 'Правый контент', true );?>
                </div>
            </div>
        </div>
    </div>
<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
