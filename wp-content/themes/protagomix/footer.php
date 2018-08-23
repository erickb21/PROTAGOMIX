<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package protagomix
 */

?>

	</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="site-info">

        <div class="itemgrid">
            <p> Association Protagomix<br />
                Maison des Associations<br />
                BP FF3 rue des Corroyeurs<br />
                21000 DIJON<br />
                06 68 44 05 18
            </p>
        </div>
        <div class="itemgrid"><p>reseau sociaux</p>
        <p><a href="https://www.instagram.com/explore/locations/406590794/protagomix-crew/">Instagram</a></p>
        <p><a href="https://www.facebook.com/protagomix.crew1/">Facebook</a></p>
        </div>
        <div class="itemgrid"><p>Meta</p></div>
        <div class="itemgrid"><p>mentions</p></div>
    </div><!-- .site-info -->

    <div class="txtaligncenter w100prc paddingall20px fontsize05rem">

        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'protagomix' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'protagomix' ), 'WordPress' );
				?>
        </a>
        <span class="sep"> | </span><?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'protagomix' ), 'protagomix', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
