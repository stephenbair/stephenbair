<?php $page='portfolio' ?>
<?php include('../includes/meta.php') ?>
    <body id="portfolio" class="secondary">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="container clearfix">
            <?php include('../includes/header.php') ?>
        </div>
        <div class="content clearfix">
            <div class="container">
            	<p>"This is the dimension of imagination. It is an area which we call the Twilight Zone." Okay, so it may not be the Twilight Zone, but it is a dimension of imagination and creativity. I am passionate about the internet, about websites, about all things digital; it's what I love. I enjoy taking a customer's goals, throwing in some creativity, merging them with the latest technology and solving problems - ultimately, leaving a wonderful product behind that both the customer and their consumer can be happy about.</p>
            	<p>Some of the sites I have worked on are large; I'm talking international, multi-million dollar, millions of hits... large. Yet, I love that I am able to work on everyday sites for friends and family, too. Whether it be for a small business owner or someone just looking to have a place to post family photos or a resume. Below you will find a small sampling of where my imagination and creativity has taken me.</p>
            	<p class="spacer">If you're looking for more background, take a gander at my <a href="/resume">resume</a>, <a href="http://www.linkedin.com/in/stephenbair/" target="_blank">linkedin</a>, or even reach out and <a href="/contact">contact me</a>.</p>
            	<nav>
            		<ul>
            			<li>Quick Find:</li>
            			<li><a href="#web">Web</a></li>
            			<li><a href="#branding">Branding</a></li>
            			<li><a href="#graphic">Graphic</a></li>
            		</ul>
            	</nav>                	
            	<div class="section-container">
	                <section>
	                	<a name="web"></a>
	                    <h2>Web</h2>
	                    <div class="listing">
			                <img src="../images/portfolio/web-irobot.png" alt="iRobot"/>
			                <h3>iRobot</h3>
			                <p>Developed iRobot's initial site launch into the online marketplace.</p>
			                <p><a href="http://store.irobot.com" target="_blank">Take a look<span></span></a></p>
			            </div>
			            <div class="listing">
			                <img src="../images/portfolio/web-ems.png" alt="Eastern Mountain Sports"/>
			                <h3>Eastern Mountain Sports</h3>
			                <p>Developer on a redesign of EMS. Utilized HTML, CSS, Javascript to create custom product carousels.</p>
							<p><a href="http://www.ems.com" target="_blank">Take a look</a></p>
			            </div>
			            <div class="listing">
			                <img src="../images/portfolio/web-cki.png" alt="Calvin Klein"/>
			                <h3>Calvin Klein</h3>
			                <p>Coded a JSP based site for Calvin Klein on the now, eBay Enterprise&#8482; platform.</p>
			            </div>
			            <div class="listing">
			                <img src="../images/portfolio/web-arnold.png" alt="Arnold's Garage - Automotive Services"/>
			                <h3>Arnold's Garage</h3>
			                <p>Custom vehicle content management system for small automotive dealership. Website driven by PHP and mySQL with a custom user interface.</p>
			            </div>
			            <div class="listing">
			                <img src="../images/portfolio/web-worldmarket.png" alt="Cost Plus World Market"/> 
			                <h3>Cost Plus World Market</h3>
			                <p>Lead developer on the World Market website. Their first major redesign since beginning online sales.</p>
			            </div>
			            <div class="listing">
			                <img src="../images/portfolio/web-garrett.png" alt="Garrett Knisley - Motion Graphics"/>
			                <h3>Garrett Knisley</h3>
			                <p>Motion graphics producer and editor located in Los Angeles, California. The site houses Garrett's annual visual effects reel.</p>
			            </div>
	                </section>
	                <section class="branding">
	                	<a name="branding"></a>
			            <h2>Branding</h2>
			            <div class="listing">
			                <img src="../images/portfolio/brand-arnold.jpg" alt="Arnold's Garage - Automotive Services" class="arnold"/>
			                <h3>Arnold's Garage</h3>
			                <p>Text</p>
			            </div>
			            <div class="listing">
			                <img src="../images/portfolio/brand-ssc.jpg" alt="The Susquehanna Stage Co. Logo" class="ssc"/>
			                <h3>The Susquehanna Stage Co.</h3>
			                <p>The SSC is in a community theater in a small river town. The S design highlights the theater by the river.</p>
			            </div>
			            <div class="listing">
			                <img src="../images/portfolio/brand-jarnold.jpg" alt="Justin K. Arnold Logo" class="jarnold"/>
			                <h3>Justin K. Arnold</h3>
			                <p>Logo to highlight Justin's business ventures in social marketing and photography.</p>
			            </div>
					</section>
	                <section>
	                	<a name="graphic"></a>
			            <h2>Graphic</h2>
			            <div class="listing">
			                <img src="../images/portfolio/grph-bugs.png" alt="Bugs"/>
			                <h3>Bugs</h3>
			                <p>A graphical representation in both word and design to portray a feeling of a bugs world.</p>
			            </div>
			            <div class="listing">
			                <img src="../images/portfolio/grph-zoo.png" alt="National Zoo"/>
			                <h3>National Zoo</h3>
			                <p>Conceptual logo for the Washington, D.C. National Zoo.</p>
			            </div>
			            <div class="listing">
			                <img src="../images/portfolio/grph-coffee.png" alt="Coffee"/>
			                <h3>Coffee</h3>
			                <p>A fresh look on coffee bringing happiness to sleepy morning commuters.</p>
			            </div>
					</section>
                </div><!-- .section-container -->
            </div> <!-- #main -->
            <?php include('../includes/footer.php') ?>
        </div> <!-- #main-container -->
        <script>
			$('section').one('appear', function () {
			    $("section h2").addClass("motion");
			});
        </script>
    </body>
</html>
