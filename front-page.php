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

			<!-- UNUSED WORDPRESS VARIABLES:
		-->

			<div class="section" id="intro">
				<div class="container">
					<!--<h1><?php the_field('tagline'); ?></h1>-->
					<h1>Gepassioneerd door het web, vertalen wij als online creatievelingen uw visie naar een uniek digitaal verhaal.</h1>
				</div>
			</div>

			<div class="section" id="about">
				<div class="container">
					<!--<h2><?php the_field('title_about'); ?></h2>-->
					<h2>Uniek multimediabedrijf</h2>
					<p>
						Designosource werd opgericht in 2011 door enkele 
						ambitieuze docenten van de opleiding Interactive 
						Multimedia Design aan de Thomas More Hogeschool van 
						Mechelen. Deze practice enterprise geeft een team van 
						14 studenten de kans om mee te gaan in het reilen en 
						zeilen van een echt multimedia bureau.
					</p>
				</div>
			</div>

			<div class="section" id="hire">
				<div class="container">
					<h3>Hire us</h3>
					<p>Neem vrijblijvend contact op voor meer informatie!</p>

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

					<p class="active" id="onderzoek">
						In deze fase wordt er een voorbereidende analyse gedaan. Onder andere de doelgroep en de branding worden bepaald. We steken onze creatieve koppen bij elkaar en brainstormen waaruit een uitgebreid plan van aanpak voortvloeit. Dit vormt de basis voor het creëren van uw uniek project.
					</p>

					<p id="offerte">
						Bij de start van elk project volgt er een offerte. Hier wordt uit de doeken gedaan waar uw tijd en geld naartoe gaat aan de hand van omschrijving, plan van uitwerking, tijdsplanning… Uiteindelijk komen we uit op een totale prijsberekening voor het project.
					</p>

					<p id="uitwerking">
						<span>Aan de hand van de offerte wordt elk uniek project zorgvuldig uitgewerkt. Dit zowel op het vlak van design als op technische uitwerking. Er vindt regelmatig een terugkoppel moment plaats, waar het team de vorderingen voorlegt en met u bespreekt.</span>

						<span>In de eerste fase wordt er nagedacht over het ontwerp en de structuur van uw project. Na het verzamelen van alle ideeën stellen we een aantal mockups op. Na overleg, kiest u een ontwerp en worden er eventueel nog enkele aanpassingen gemaakt.</span>

						<span>Hierna wordt het ontwerp technisch uitgewerkt. Ook hier verleggen we graag onze grenzen. Zo streven we steeds naar een innovatief product dat getuigt van de nieuwste multimediatrends.</span>
					</p>

					<p id="oplevering">
						Le moment supprème: het project gaat live. Daarom voorzien wij een zo vlot mogelijke oplevering voor elk project binnen de opgelegde deadline. Dit doen we aan de hand van een presentatie, een campagne, stappenplan...
					</p>

					<p id="naService">
						In de na-service zorgen we ervoor dat uw product voor een lange termijn op het hoogste niveau blijft. We komen, wanneer dit nodig is, u een cursus geven over het opgeleverde project. Bijvoorbeeld hoe het content management systeem te gebruiken. Uiteraard zijn we steeds bereikbaar voor vragen van oude en nieuwe klanten.
					</p>
				</div>
			</div>

			<div class="section" id="work">
				<div class="container">
					<h2><?php the_field('title_work'); ?></h2>
				</div>
			</div>

			<div class="section" id="team">
				<div class="container">
					<h2><?php the_field('title_team'); ?></h2>
				</div>
			</div>

			<div class="section" id="contact">
				<div class="container">
					<h2><?php the_field('title_contact'); ?></h2>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
