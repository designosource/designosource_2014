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
							echo '<li>' . get_the_post_thumbnail( $project->ID, 'thumbnail' ) . '<a href="#"></a></li>';
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

					<div id="subCon">
						<h2><?php the_field('title_team'); ?></h2>

						<div id="teamMembers">
							<a class="active" id="member1" href="#">Member1</a>
							<a id="member2" href="#">Member2</a>
							<a id="member3" href="#">Member3</a>
							<a id="member4" href="#">Member4</a>
							<a id="member5" href="#">Member5</a>
							<a id="member6" href="#">Member6</a>
							<a id="member7" href="#">Member7</a>
							<a id="member8" href="#">Member8</a>
							<a id="member9" href="#">Member9</a>
							<a id="member10" href="#">Member10</a>
							<a id="member11" href="#">Member11</a>
							<a id="member12" href="#">Member12</a>
							<a id="member13" href="#">Member13</a>
							<a id="member14" href="#">Member14</a>
							<a id="member15" href="#">Member15</a>
							<a id="member16" href="#">Member16</a>
							<a id="member17" href="#">Member17</a>
						</div>
					</div>

					<div id="member1" class="individualMember active">
						<div class="memberImage"></div>
						<div class="memberProfile">
							<h3>Member 1</h3>

							<p>
								<span class="profilePreview">
									Member 1 is dit en dat en 
									heeft gestudeerd op de 
									Thomas More Hogeschool te 
									Mechelen.
								</span>

								<span>
									Lorem ipsum dolor sit amet, consectetur adipiscing 
									elit. Sed tempus elementum placerat. Pellentesque a 
									tortor lacinia, vulputate sem eget, lobortis quam. 
								</span>

								<span>
									Etiam tellus mauris, mattis eget augue consectetur, 
									fringilla molestie dui. Quisque eget velit libero. Duis 
									suscipit lectus in dolor semper vestibulum eu ac elit. 
								</span>
							</p>

							<ul id="socialCon">
								<li id="twitter">
									<a href="#">Twitter</a>
								</li>	

								<li id="linkedIn">
									<a href="#">LinkedIn</a>
								</li>

								<li id="portfolio">
									<a href="#">Website</a>
								</li>	
							</ul>
														
						</div>
					</div>

					<div id="member2" class="individualMember">
						<div class="memberImage"></div>
						<div class="memberProfile">
							<h3>Jessica Doe</h3>

							<p>
								<span class="profilePreview">
									Jessica is dit en dat en 
									heeft gestudeerd op de 
									Thomas More Hogeschool te 
									Mechelen.
								</span>

								<span>
									Lorem ipsum dolor sit amet, consectetur adipiscing 
									elit. Sed tempus elementum placerat. Pellentesque a 
									tortor lacinia, vulputate sem eget, lobortis quam. 
								</span>

								<span>
									Etiam tellus mauris, mattis eget augue consectetur, 
									fringilla molestie dui. Quisque eget velit libero. Duis 
									suscipit lectus in dolor semper vestibulum eu ac elit. 
								</span>
							</p>

							<ul id="socialCon">
								<li id="twitter">
									<a href="#">Twitter</a>
								</li>	

								<li id="linkedIn">
									<a href="#">LinkedIn</a>
								</li>

								<li id="portfolio">
									<a href="#">Website</a>
								</li>	
							</ul>
														
						</div>
					</div>

					<div id="member3" class="individualMember">
						<div class="memberImage"></div>
						<div class="memberProfile">
							<h3>Jessica Doe</h3>

							<p>
								<span class="profilePreview">
									Jessica is dit en dat en 
									heeft gestudeerd op de 
									Thomas More Hogeschool te 
									Mechelen.
								</span>

								<span>
									Lorem ipsum dolor sit amet, consectetur adipiscing 
									elit. Sed tempus elementum placerat. Pellentesque a 
									tortor lacinia, vulputate sem eget, lobortis quam. 
								</span>

								<span>
									Etiam tellus mauris, mattis eget augue consectetur, 
									fringilla molestie dui. Quisque eget velit libero. Duis 
									suscipit lectus in dolor semper vestibulum eu ac elit. 
								</span>
							</p>

							<ul id="socialCon">
								<li id="twitter">
									<a href="#">Twitter</a>
								</li>	

								<li id="linkedIn">
									<a href="#">LinkedIn</a>
								</li>

								<li id="portfolio">
									<a href="#">Website</a>
								</li>	
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
