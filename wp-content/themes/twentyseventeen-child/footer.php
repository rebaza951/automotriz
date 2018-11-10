<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->
		<footer>
			<div id="suscripcion">				
				<suscribete></suscribete>			
			</div>
			<div class="container">
				<div class="center_foot row">
					<div class="col-sm-12 col-md-5 columnas_f col-xs-12">
						<div class="info_footer">
							<h2>SKF AUTOMOTRIZ</h2>
						Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
						</div>
					</div>
					<div class="col-sm-4 col-md-2 col-xs-12">
						<div class="info_footer">
							<h2>TELÉFONOS</h2>
							<div class="datos">
								<div>
									(57)1 651 12 34 <br>
									(57)1 636 12 45<br>
									678 890 432 
								</div>
							</div>
						</div>
					</div>
					<div class=" col-sm-4 col-md-3 correo col-xs-12">
						<div class="info_footer">
							<h2>CORREOS</h2>
							<div class="datos">
								<div>
									skf@skf.com<br>
									productos@skf.com<br>
									empresa@skf.com
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-2 col-xs-12">
						<div class="info_footer">
							<h2>SÍGUENOS</h2>
							<div class="redes">
								<a href="javascript:;"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Facebook</span></a>
								<a href="javascript:;"><i class="fa fa-youtube-play" aria-hidden="true"></i> <span>Youtube</span></a>
								<a href="javascript:;"><i class="fa fa-linkedin" aria-hidden="true"></i> <span>Linkedin</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="menu_inferior">
					<div class="container_inf">
						<a href="nosotros.php">Nosotros</a>
						<a href="cursos.php">Productos</a>
						<a href="distribuidores.php">Encontrar distribuidores</a>
						<a href="venta.php">Encontrar puntos de venta</a>
						<a href="javascript:;">Novedades</a>
						<a href="javascript:;">Contáctenos</a>
					</div>
				</div>
				<div class="logo_footer"><img src="{{url('img/skf_bottom.png')}}" alt=""></div>
				<div class="franja_bottom"></div>
			</div>
		</footer>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div id="suscripcion">				
				<suscribete></suscribete>			
			</div>
			<div class="container">
				<div class="center_foot row">
					<div class="col-sm-12 col-md-5 columnas_f col-xs-12">
						<div class="info_footer">
							<h2>SKF AUTOMOTRIZ</h2>
						Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.
						</div>
					</div>
					<div class="col-sm-4 col-md-2 col-xs-12">
						<div class="info_footer">
							<h2>TELÉFONOS</h2>
							<div class="datos">
								<div>
									(57)1 651 12 34 <br>
									(57)1 636 12 45<br>
									678 890 432 
								</div>
							</div>
						</div>
					</div>
					<div class=" col-sm-4 col-md-3 correo col-xs-12">
						<div class="info_footer">
							<h2>CORREOS</h2>
							<div class="datos">
								<div>
									skf@skf.com<br>
									productos@skf.com<br>
									empresa@skf.com
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-2 col-xs-12">
						<div class="info_footer">
							<h2>SÍGUENOS</h2>
							<div class="redes">
								<a href="javascript:;"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Facebook</span></a>
								<a href="javascript:;"><i class="fa fa-youtube-play" aria-hidden="true"></i> <span>Youtube</span></a>
								<a href="javascript:;"><i class="fa fa-linkedin" aria-hidden="true"></i> <span>Linkedin</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wrap">


				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
