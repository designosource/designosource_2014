<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package designosource
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="section navsection" id="intro">
				<img src="http://localhost/designosource/wp-content/themes/designosource/assets/thomasmore.png" alt="Thomas More">
				<div class="video-wrapper">
					<video autoplay>
						<source src="<?php echo get_template_directory_uri(); ?>/assets/team_movie.mp4" type="video/mp4">
						<source src="<?php echo get_template_directory_uri(); ?>/assets/team_movie.webm" type="video/webm">
						<source src="<?php echo get_template_directory_uri(); ?>/assets/team_movie.ogv" type="video/ogg">
					</video>
				</div>

				<div id="intro_header" class="container">
					<h1><?php the_field('tagline'); ?></h1>
				</div>
			</div>

			<div class="section navsection" id="about">
				<div class="container">
					<h2><?php the_field('title_about'); ?></h2>
					<p><?php the_field('text_about'); ?></p>
					<img class="img-responsive-tm" src="http://static.thomasmore.be/huisstijl/images/TM_logo_wit_web.jpg" alt="Thomas More">
				</div>
			</div>

			<div class="section" id="hire">
				<div class="container">
					<h3><?php the_field('title_hire'); ?></h3>
					<p><?php the_field('text_hire'); ?></p>

					<ul id="socialCon">
						<li id="twitter">
							<a target="_blank" href="https://twitter.com/designosource">Twitter</a>
						</li>

						<li id="facebook">
							<a target="_blank" href="https://www.facebook.com/Designosource">Facebook</a>
						</li>

						<li id="linkedIn">
							<a  target="_blank" href="https://www.linkedin.com/company/designosource">LinkedIn</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="section navsection" id="process">
				<div class="container">
					<h2><?php the_field('title_process'); ?></h2>

					<div id="processSteps">
						<a class="active" id="onderzoek" href="#"><span class="circle">1</span>Onderzoek</a>
						<a id="offerte" href="#"><span class="circle">2</span>Offerte</a>
						<a id="uitwerking" href="#"><span class="circle">3</span>Uitwerking</a>
						<a id="oplevering" href="#"><span class="circle">4</span>Oplevering</a>
						<a id="naService" href="#"><span class="circle">5</span>Na-service</a>
					</div>


					<p class="active" id="onderzoek"><?php the_field('text_process_part1'); ?></p>
					<p id="offerte"><?php the_field('text_process_part2'); ?></p>
					<p id="uitwerking"><?php the_field('text_process_part3'); ?></p>
					<p id="oplevering"><?php the_field('text_process_part4'); ?></p>
					<p id="naService"><?php the_field('text_process_part5'); ?></p>
				</div>
			</div>

			<div class="section navsection" id="work">
				<div class="container">

					<?php

					$projects = get_field('projects');

					if($projects)
					{
						echo '<ul id="projects">';

						foreach($projects as $project)
						{
							echo '<li><div class="img-overlay"></div>' . get_the_post_thumbnail( $project->ID, 'thumbnail' ) .
							'<a target="_blank" class="btn" href="' . get_post_meta($project->ID, '_url', true) . '">Bekijk project</a></li>';
							/*'<a href="' . $project->guid . '">Bekijk project</a></li>';*/
						}

						echo
						'<li id="projectProposal">
							<div class="projectInfo">
								<h3>Uw project hierbij?</h3>
								<a class="btn" href="#contact">Contacteer ons!</a>
							</div>
						</li>';

						echo '</ul>';
					}

					?>
				</div>
			</div>

			<div class="section navsection" id="team">
				<div class="container">

				<?php $users = get_users( array('role' => 'author') ); ?>

					<h2><?php the_field('title_team'); ?></h2>

					<div id="subCon">
						<div id="teamMembers">
							<ul>
							<?php
								foreach ( $users as $user ) {
									echo '<li><a href="#" id="';
									echo the_author_meta( "first_name", $user->ID );
									echo '">';
									echo the_author_meta( "first_name", $user->ID );
									echo '</a></li>';
								}
							?>
							</ul>
						</div>
					</div>

					<ul id="teamList">
					<?php
						foreach ( $users as $user ) {
							echo '
							<li class="individualMember" id="'.get_the_author_meta( "first_name", $user->ID ).'">
								<div class="memberImage">'.get_avatar( $user->ID, 512 ).'</div>
								<div class="memberProfile">
									<h3>'.get_the_author_meta('first_name', $user->ID).' '.get_the_author_meta('last_name', $user->ID).'</h3>
									<p>'.get_the_author_meta('description', $user->ID).'</p>
									<ul id="socialCon">
										<li id="twitter"><a target="_blank" href="'.get_the_author_meta('twitter_profile', $user->ID).'">Twitter</a></li>
										<li id="linkedIn"><a target="_blank" href="'.get_the_author_meta('linkedin_profile', $user->ID).'">LinkedIn</a></li>';

                                        if(get_the_author_meta('user_url', $user->ID) != null)
                                        {
                                            echo '<li id="portfolio"><a target="_blank" href="'.get_the_author_meta('user_url', $user->ID).'">Website</a></li>';
                                        }
                                        else
                                        {
                                            //niets tonen
                                        }

									echo '</ul>
								</div>
							</li>
							';

							//echo get_the_author_meta('user_url', $user->ID);
						}
					?>
					</ul>

				</div>
			</div>

			<div class="section" id="statistics">
				<div class="container">
					<h2>Statistieken</h2>

					<ul>
						<li>
							<p><?php the_field('stat-col1-title'); ?></p>
							<h3><?php the_field('stat-col1-value'); ?></h3>
						</li>

						<li class="even">
							<p><?php the_field('stat-col2-title'); ?></p>
							<h3><?php the_field('stat-col2-value'); ?></h3>
						</li>

						<li>
							<p><?php the_field('stat-col3-title'); ?></p>
							<h3><?php the_field('stat-col3-value'); ?></h3>
						</li>

						<li class="even">
							<p><?php the_field('stat-col4-title'); ?></p>
							<h3><?php the_field('stat-col4-value'); ?></h3>
						</li>

						<li class="last">
							<p><?php the_field('stat-col5-title'); ?></p>
							<h3><?php the_field('stat-col5-value'); ?></h3>
						</li>
					</ul>
				</div>
			</div>

			<div class="section navsection" id="contact">
				<div class="container">
					<h2><?php the_field('title_contact'); ?></h2>

					<div id="fContact">
						<div id="adress">
							<h3>Designosource</h3>
							<p>Lange Ridderstraat 44</p>
							<p>2800 Mechelen</p>
							<p>België</p>
							<p>Tel. +32 15 36 92 20</p>
						</div>
						<div id="proj">
							<h3>Een project van</h3>
							<img class="img-responsive-tm" src="/wp-content/themes/designosource/assets/thomasmore_oranje.png" alt="Thomas More">
							<a href="http://www.thomasmore.be">www.thomasmore.be</a>
						</div>
						<div id="sponsors">
							<h3>Sponsors</h3>
							<a href="https://www.facebook.com/DiederikCrapsPhotography">Diederik Craps</a>
						</div>
					</div>

					<div id="eContact">
						<?php the_field('contact_form'); ?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
