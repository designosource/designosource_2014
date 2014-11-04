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

			<div class="section" id="intro">
				<div class="container">
					<h1><?php the_field('tagline'); ?></h1>
				</div>
			</div>

			<div class="section" id="about">
				<div class="container">
					<h2><?php the_field('title_about'); ?></h2>
					<p><?php the_field('text_about'); ?></p>
				</div>
			</div>

			<div class="section" id="hire">
				<div class="container">
					<h3><?php the_field('title_hire'); ?></h3>
					<p><?php the_field('text_hire'); ?></p>

					<ul id="socialCon">
						<li id="twitter">
							<a href="https://twitter.com/designosource">Twitter</a>
						</li>	

						<li id="facebook">
							<a href="https://www.facebook.com/Designosource">Facebook</a>
						</li>

						<li id="linkedIn">
							<a href="https://www.linkedin.com/company/designosource">LinkedIn</a>
						</li>	
					</ul>
				</div>
			</div>

			<div class="section" id="process">
				<div class="container">
					<h2><?php the_field('title_process'); ?></h2>

					<div id="processSteps">
						<a class="active" id="onderzoek" href="#">Onderzoek</a>
						<a id="offerte" href="#">Offerte</a>
						<a id="uitwerking" href="#">Uitwerking</a>
						<a id="oplevering" href="#">Oplevering</a>
						<a id="naService" href="#">Na-service</a>
					</div>

					<p class="active" id="onderzoek"><?php the_field('text_process_part1'); ?></p>
					<p id="offerte"><?php the_field('text_process_part2'); ?></p>
					<p id="uitwerking"><?php the_field('text_process_part3'); ?></p>
					<p id="oplevering"><?php the_field('text_process_part4'); ?></p>
					<p id="naService"><?php the_field('text_process_part5'); ?></p>
				</div>
			</div>

			<div class="section" id="work">
				<div class="container">
					<!--<h2><?php the_field('title_work'); ?></h2>-->

					<?php

					$projects = get_field('projects');

					if($projects)
					{
						echo '<ul id="projects">';

						foreach($projects as $project)
						{
							echo '<li>' . get_the_post_thumbnail( $project->ID, 'thumbnail' ) . 
							'<a href="' . $project->guid . '"></a></li>';
						}

						echo 
						'<li id="projectProposal">
							<div class="projectInfo">
								<h3>Uw project hierbij?</h3>
								<a href="#">Contacteer ons!</a>
							</div>
						</li>';

						echo '</ul>';
					}

					/*
					echo "<pre>";
					print_r($projects);
					echo "</pre>";
					*/

					?>
				</div>
			</div>

			<div class="section" id="team">
				<div class="container">

				<?php $users = get_users( array('role' => 'author') ); ?> 

					<div id="subCon">
						<h2><?php the_field('title_team'); ?></h2>

						<div id="teamMembers">
							<?php
								foreach ( $users as $user ) {
									echo '<a href="#">';
									echo the_author_meta( "first_name", $user->ID );
									echo ' ';
									echo the_author_meta( "last_name", $user->ID );
									echo '</a>';
								}
							?>
						</div>
					</div>

					<div id="member1" class="individualMember active">
						<div class="memberImage"><?php echo get_avatar( $user->ID, 512 ); ?></div>
						<div class="memberProfile">
							<h3>
								<?php the_author_meta( "first_name", $user->ID ) ?>
								<?php the_author_meta( "last_name", $user->ID ) ?>
							</h3>

							<p><?php the_author_meta( "description", $user->ID ) ?></p>

							<ul id="socialCon">
								<li id="twitter"><a href="#">Twitter</a></li>	
								<li id="linkedIn"><a href="#">LinkedIn</a></li>
								<li id="portfolio"><a href="#">Website</a></li>	
							</ul>
						</div>
					</div>

				</div>
			</div>

			<div class="section" id="statistics">
				<div class="container">
					<h2>Statistieken</h2>

					<ul>
						<li>
							<p>Thee</p>
							<h3>94</h3>
						</li>

						<li class="even">
							<p>Koffiekoeken</p>
							<h3>234</h3>
						</li>

						<li>
							<p>Koffie</p>
							<h3>341</h3>
						</li>

						<li class="even">
							<p>Frituur</p>
							<h3>14</h3>
						</li>

						<li class="last">
							<p>Redbull</p>
							<h3>4</h3>
						</li>
					</ul>
				</div>
			</div>

			<div class="section" id="contact">
				<div class="container">
					<h2><?php the_field('title_contact'); ?></h2>

					<div id="fContact">
						<div id="adress">
							<h3>Designosource</h3>
							<p>Lange Ridderstraat</p>
							<p>44 Mechelen</p>
							<p>2800 Belgium</p>
							<p>Tel. 0472 34 97 82</p>
						</div>

						<div id="sponsors">
							<h3>Sponsors</h3>
							<a href="#">Eigendomain.nl</a>
							<a href="#">Thomasmore.be</a>
						</div>
					</div>

					<div id="eContact">
						<form action="#" method="post">
							<div id="mIdentity">
								<label for="name">Voor-en achternaam</label>
								<input type="text" id="name" name="name"></input>

								<label for="email">E-mailadres</label>
								<input type="text" id="email" name="email"></input>
							</div>

							<div id="mContent">
								<label for="message">Bericht</label>
								<textarea id="message" name="comments"></textarea>
							</div>

							<div id="mButton">
								<input type="submit" name="verzenden" value="Verzenden"></input>
							</div>
						</form>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
