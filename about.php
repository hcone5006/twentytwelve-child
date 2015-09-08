<?php
/**
 * Template Name: About
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<!-- custom html content here -->

			<!-- start of max width div -->
			<div class="max-width">

				<div class="narrow-width">

					<div class="white-border team">

						<h3>Our Team</h3>
						<div class="thumb">
							<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/04/Movie_Film_Still_Photographer_09.jpg">
						</div>

						<div class="info">

							<h4>John Smith | Marketing Manager</h4>
							<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Minions ipsum bappleees belloo! Belloo! Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do.</p>

						</div>
						<div class="thumb">
							<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/04/Movie_Film_Still_Photographer_09.jpg">
						</div>

						<div class="info">

							<h4>John Smith | Marketing Manager</h4>
							<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Minions ipsum bappleees belloo! Belloo! Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do.</p>
						
						</div>

						<div class="thumb">
							<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/04/Movie_Film_Still_Photographer_09.jpg">
						</div>
						
						<div class="info">
						
							<h4>John Smith | Marketing Manager</h4>
							<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Minions ipsum bappleees belloo! Belloo! Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do.</p>
						</div>

						<div class="thumb">
							<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/04/Movie_Film_Still_Photographer_09.jpg">
						</div>
						
						<div class="info">
						
							<h4>John Smith | Marketing Manager</h4>
							<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Minions ipsum bappleees belloo! Belloo! Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do.</p>
						
						</div>

						<div class="thumb">
							<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/04/Movie_Film_Still_Photographer_09.jpg">
						</div>

						<div class="info">
						
							<h4>John Smith | Marketing Manager</h4>
							<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Minions ipsum bappleees belloo! Belloo! Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do.</p>
						
						</div>

						<div class="button"> GET INVOLVED</div>

					</div>


				</div>

				<div class="narrow-width">

					<div class="white-border">
						
						<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/04/Movie_Film_Still_Photographer_09.jpg">
						<h3>John Smith | Director</h3>
						<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Jiji tulaliloo hana dul sae daa chasy potatoooo chasy la bodaaa gelatooo baboiii</p>
					
					</div>

					<div class="white-border">
						
						<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/04/Movie_Film_Still_Photographer_09.jpg">
						<h3>John Smith | Director</h3>
						<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Jiji tulaliloo hana dul sae daa chasy potatoooo chasy la bodaaa gelatooo baboiii</p>
					
					</div>

					<div class="white-border partners">

						<h3>Our Partners</h3>
						<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Jiji tulaliloo hana dul sae daa chasy potatoooo chasy la bodaaa gelatooo baboiii ti aamoo! Po kass aaaaaah ti aamoo! Poulet tikka masala bananaaaa wiiiii. Wiiiii ti aamoo! Me want bananaaa</p>
						<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Jiji tulaliloo hana dul sae daa chasy potatoooo chasy la bodaaa gelatooo baboiii ti aamoo! Po kass aaaaaah ti aamoo! Poulet tikka masala bananaaaa wiiiii. Wiiiii ti aamoo! Me want bananaaa</p>
						<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Jiji tulaliloo hana dul sae daa chasy potatoooo chasy la bodaaa gelatooo baboiii ti aamoo! Po kass aaaaaah ti aamoo! Poulet tikka masala bananaaaa wiiiii. Wiiiii ti aamoo! Me want bananaaa</p>

						<div class="button">Become a partner</div>

					</div>

					<div class="white-border">
						
						<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/04/Movie_Film_Still_Photographer_09.jpg">
						<h3>John Smith | Director</h3>
						<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Jiji tulaliloo hana dul sae daa chasy potatoooo chasy la bodaaa gelatooo baboiii</p>
					
					</div>

				</div>

				<div class="narrow-width">

					<div class="white-border ">
						
						<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/04/Movie_Film_Still_Photographer_09.jpg">
						<h3>Our Vision</h3>
						<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Jiji tulaliloo hana dul sae daa chasy potatoooo chasy la bodaaa gelatooo baboiii ti aamoo! Po kass aaaaaah ti aamoo! Poulet tikka masala bananaaaa wiiiii. Wiiiii ti aamoo! Me want bananaaa</p>
						<p>Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa! Poulet tikka masala tulaliloo. Jiji tulaliloo hana dul sae daa chasy potatoooo chasy la bodaaa gelatooo baboiii ti aamoo! Po kass aaaaaah ti aamoo! Poulet tikka masala bananaaaa wiiiii. Wiiiii ti aamoo! Me want bananaaa</p>
						
						<div class="button">SUBMIT</div>
					
					</div>

					<div class="white-border">

						<h3>FAQ</h3>
						<ul class="faq">

							<li>
								<p><strong>Q</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>
								<p><strong>A</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>
								<p><strong>Q</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>
								<p><strong>A</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>
								<p><strong>Q</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>
								<p><strong>A</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>
								<p><strong>Q</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>
								<p><strong>A</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>

								<p><strong>Q</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>
								<p><strong>A</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>

								<p><strong>Q</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

							<li>
								<p><strong>A</strong>  Minions ipsum bappleees belloo! Belloo! Aaaaaah baboiii underweaaar bee do bee do bee do. Gelatooo hana dul sae me want bananaaa!</p>
							</li>

						</ul>

					</div>


				</div>



			</div>
			<!-- end of max-width div -->

			<div class="full-width sponsors">

				<div class="title-bar">
					<div>
						<h2>SPONSORS</h2>
					</div>
				</div>
				<div class="sponsors-inner">
					
					<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/05/Window-Film-Company-logo-4d778bf81542d.png">
					<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/05/Window-Film-Company-logo-4d778bf81542d.png">
					<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/05/Window-Film-Company-logo-4d778bf81542d.png">
					<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/05/Window-Film-Company-logo-4d778bf81542d.png">
					<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/05/Window-Film-Company-logo-4d778bf81542d.png">
					<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/05/Window-Film-Company-logo-4d778bf81542d.png">
					<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/05/Window-Film-Company-logo-4d778bf81542d.png">
					<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/05/Window-Film-Company-logo-4d778bf81542d.png">
					<img src="http://filmdev.webdevandseo.eu/wp-content/uploads/2015/05/Window-Film-Company-logo-4d778bf81542d.png">

				</div>
			</div>
			<!-- end of custom html content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<!-- <?php get_sidebar( 'front' ); ?> -->
<?php get_footer(); ?>