<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package protagomix
 * Template Name: Page d'accueil
 */


get_header();
?>

 <section class="bandeau">
<div class="bandeau-droite"><img class="logobandeau" src="./wp-content/themes/protagomix/template-parts/img/logo-Protagomix.png" alt="protagomix" /></div>
<div class="bandeau-gauche"><img class="logobandeau" src="./wp-content/themes/protagomix/template-parts/img/hip-pop-protagomix.png" alt="protagomix" /></div>
</section>
<section class="recentpostcategories">
 <!-- ajout widget area actus-->
 <?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
 <div id="accueil-widget-area" class="accueil_widget_area" role="complementary">
 <?php dynamic_sidebar( 'accueil-widget-area' ); ?>
 </div>
 <?php endif; ?>
 <!-- fin widget area actus--></section>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php protagomix_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'protagomix' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'protagomix' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_footer(); ?>
