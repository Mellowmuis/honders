<?php
/*
Template Name: landig
*/
?>

<?php get_header(); ?>
<div class="top-full-image">
	<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $image = $image[0]; ?>
    <?php else :
    $image = get_bloginfo( 'stylesheet_directory') . '/img/justice.png'; ?>
    <?php endif; ?>
    <img class="header-image-block"  src="<?php echo $image; ?>" />
</div>
	

	<div class="home-wrapper" style="min-height:520px;">
		<div class="u-gridContainer">
			<div class="u-gridContainer">
				<div class="">
					<h2>Rechtsgebieden</h2>
				</div>
				<div class="u-gridCol4">
					 
				</div>

			</div>
			<div class="u-gridRow">
				<div class="u-gridRow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/devider.png"></div>
					<div class="u-gridCol3">
						<ul class="tabs">
						  <li class="active" rel="tab1">Arbeidsrecht</li>
						  <li rel="tab2">Civiel recht</li>
						  <li rel="tab3">Erfrecht</li> 
						  <li rel="tab4">Sociaal recht</li>
						  <li rel="tab5">Strafrecht</li>
						  <li rel="tab6">Familierecht</li>
						</ul>
					</div>
					<div class="u-gridCol9"> 
						
						<div class="tab_container">
						  <h3 class="d_active tab_drawer_heading" rel="tab1">Arbeidsrecht</h3>
						  <div id="tab1" class="tab_content">
						  <h3>Arbeidsrecht</h3>
						    <p>
						    	Zijn er problemen gerezen in de relatie tussen werkgever en werknemer? Is er sprake van een
								loonvordering, ontslagkwestie of reorganisatie? Het is goed om uw rechten ten aanzien van een
								arbeidsverhouding te kennen. De relatie tussen werkgever en werknemer of opdrachtgever en
								opdrachtnemer wordt beschermd door de wet. Het arbeidsrecht kan erg ingewikkeld zijn, mede
								omdat de wettelijke regels snel kunnen veranderen. Samen met een professional kunt u de
								mogelijkheden oplossingsgericht beoordelen en een plan van aanpak ontwikkelen.
								Mr. Honders staat u graag bij met advies of in een procedure. U kunt contact met hem opnemen
								via het contactformulier of het vermelde telefoonnummer.
							</p>
						  </div>
						  <!-- #tab1 -->
						  <h3 class="tab_drawer_heading" rel="tab2">Civiel recht</h3>
						  <div id="tab2" class="tab_content">
						  <h3>Civiel recht</h3>
						    <p>Het civiel recht regelt de verhoudingen tussen burgers onderling. Iedereen krijgt wel eens te
								maken met het civiel recht. Mogelijk heeft u een huurgeschil, waarbij sprake is van achterstallig
								onderhoud of onrechtmatige beëindiging van de huurovereenkomst. Een derde kan jegens u
								een onrechtmatige daad hebben gepleegd, waarbij u bijvoorbeeld schade heeft geleden of
								Advocaat J.M.F. Honders staat u graag bij wat betreft o.a de volgende onderwerpen:
								- huurrecht
								- onrechtmatige daad
								- wanprestatie
								- contractenrecht
								- consumentenrecht
						    </p>
						  </div>
						  <!-- #tab2 -->
						  <h3 class="tab_drawer_heading" rel="tab3">Erfrecht</h3>
						  <div id="tab3" class="tab_content">
						  <h3>Erfrecht</h3>
						    <p>
						    	Bij het overlijden van een dierbare ontstaan er vaak spanningen en conflicten bij het verdelen
								van de nalatenschap. Het erfrecht regelt de overgang van de bezittingen en schulden van de
								erflater op de erfgenamen. Advocaat mr. J.M.F. Honders staat u graag bij op het gebied van het
								erfrecht om verdere escalatie te voorkomen en conflicten op te lossen.
							</p>
						  </div>
						  <!-- #tab3 -->
						  <h3 class="tab_drawer_heading" rel="tab4">Sociaal recht</h3>
						  <div id="tab4" class="tab_content">
						  <h3>Sociaal recht</h3>
						    <p>
						    	Is uw uitkering gestopt? Heeft u problemen met het UWV of met de belastingdienst? Advocaat
								mr. J.M.F. Honders staat u graag bij. Het kan zijn dat uw uitkering werd beëindigd, terwijl u
								meent dat dat dit onrechtmatig is. Ook kan de Belastingdienst bijvoorbeeld toeslagen
								terugvorderen die u in het verleden heeft ontvangen. Mogelijk kunt u daartegen een
								bezwaarschrift indienen en kan dit resulteren in herstel van uw uitkering of kwijtschelding of
								vermindering van de teruggevorderde bedragen.
								Voor een gratis adviesgesprek neemt u contact op met mr. J.M.F. Honders via het
								contactformulier of belt u het gratis telefoonnummer.
						    </p>
						  </div>
						  <!--tab4-->
						  <h3 class="tab_drawer_heading" rel="tab5">Strafrecht</h3>
						  <div id="tab5" class="tab_content">
						  <h3>Strafrecht</h3>
						    <p>
						    	Het strafrecht stelt vast welke gedragingen strafbaar zijn en welke sancties hier
								tegenover staan. In het geval u bijvoorbeeld een dagvaarding hebt ontvangen waarin
								staat dat u voor de rechter moet verschijnen is het belangrijk om een advocaat in arm te
								nemen. Advocaat J.M.F. Honders staat u op het gebied van strafrecht graag bij wat betreft
								de volgende onderwerpen:
						    </p>				
						  </div>
						  <!-- #tab5 --> 
						  <h3 class="tab_drawer_heading" rel="tab6">Familierecht</h3>
						  <div id="tab6" class="tab_content">
						  <h3>Familierecht</h3>
						    <p>
						    	Het personen- en familierecht omvat regels op het gebied van familierechtelijke relaties en
								conflicten. Veel mensen krijgen ooit te maken met zaken die betrekking hebben op dit vlak.
								Denk bijvoorbeeld aan een echtscheiding, kinder- en partneralimentatie, een omgangsregeling,
								ouderlijk gezag of de gerechtelijke vaststelling van het vaderschap. Mr. Honders heeft staat u
								graag en op professionele wijze bij met vraagstukken binnen het personen- en familierecht.
						    </p>				
						  </div>
						  <!-- #tab5 --> 
						</div>
						<!-- .tab_container -->
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="u-gridContainer">
	
	</div>

<?php get_footer(); ?>
