<!DOCTYPE html> <!--message to browser -->
<html>
	<head> <!--title of page for browser tab -->
		<title>Yelp Restaurant Page Data Design Project</title>
		<link type="image/ico" href="http://s3-media2.fl.yelpcdn.com/assets/2/www/img/118ff475a341/ico/favicon.ico" rel="shortcut icon" /> <!-- stupid favicon -->
		<link rel="stylesheet" type="text/css" href="CSS/styles.css"> <!-- refers to CSS file -->
	</head>
	<body>
	<div class="container"> <!-- creating a container for header -->
		<header>
			<h1>Data Design Project</h1> <!--basic page info in header-->
			<h3>Yelp Restaurant Page</h3>
			<h4>Trevor Rigler</h4>
		</header>
		<img src="images/yelp.jpg" alt="Yelp Logo" height="450" width="800"> <!-- Yelp logo -->
		<p>Yelp is a website consisting mainly of reviews of local
			businesses, with an emphasis on restaurants. Founded in 2004 by two former PayPal employees, Yelp is now
		a publicly traded company (<a href="https://www.nyse.com/quote/XNYS:YELP" target="_blank">NYSE:YELP</a>) with approximately <b>135 monthly visitors</b>.</p>
	</div> <!--some basic info for Yelp and link to their stock info-->
			<h2>Frontend of Assignment</h2> <!-- dividing the page to reflect the various sections of assignment -->
		<h3>Persona</h3> <!-- here is our fictional person using Yelp-->
		<ul> <!-- an unordered list with bullet points-->
			<li>&#160; Our Persona is Estelle, a 30-year-old associate at an East Coast law firm.</li>
			<li>&#160; Estelle frequently travels for work to cities throughout the U.S.</li>
			<li>&#160; Estelle is often pressed for time when traveling and needs information about local businesses quickly.</li>
			<li>&#160; Estelle uses her smart phone almost exclusively when traveling for work.</li>
			<li>&#160; Estelle is single, has no kids, has a decent amount of discretionary income, and eats out frequently.</li>
			<li>&#160; Estelle is fairly <i>opinionated</i>.</li>
		</ul>
		<h4>Main Use Cases</h4>
		<br/>&#160;&#160;&#160;<b>I.</b> Search for restaurant by name (static use case) <!--first use case, static -->
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow Estelle to find specific restaurant.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: Estelle, Restaurant
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: Estelle has an account. Restaurant has a page.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Basic Pattern:
		<ol> <!-- numerically ordered list of steps of use case -->
			<li>&#160;&#160;&#160;&#160;Estelle gets a tip from the concierge at her Miami hotel to try a Haitian restaurant called Tap Tap.</li>
			<li>&#160;&#160;&#160;&#160;Estelle browses to Yelp page for Miami.</li>
			<li>&#160;&#160;&#160;&#160;Estelle uses Yelp's main search function to find Tap Tap.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server searches internally for a potential match, limited geographically to the greater Miami area.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server returns list of possible matches, each a link.</li>
			<li>&#160;&#160;&#160;&#160;Estelle selects best match offered by server and clicks.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server takes Estelle to Yelp's <a href="http://www.yelp.com/biz/tap-tap-restaurant-miami-beach-2" target="_blank">Tap Tap</a> page.</li>
			<li>&#160;&#160;&#160;&#160;Estelle clicks on pictures, menu, and reviews listed on Tap Tap's Yelp page..</li>
		</ol>
			&#160;&#160;&#160;<b>II.</b> Allow Estelle to find other Yelp users she already knows from other sites. (dynamic use case) <!-- next use case, dynamic -->
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow Estelle to locate other Yelp users based on other website affiliations.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: Estelle, other Yelp user(s), Third Party Website(s)(ex:Facebook)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: Estelle and the other users have accounts with Yelp <i>and</i> certain third party websites.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Basic Pattern:
		<ol> <!-- numerically ordered list of steps of use case -->
			<li>&#160;&#160;&#160;&#160;Estelle browses to any Yelp page.</li>
			<li>&#160;&#160;&#160;&#160;Estelle clicks on Find Friends link near top of page.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server offers for Estelle to log in to her Facebook account.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server accesses Estelle's friend list on external Facebook server.</li>
			<li>&#160;&#160;&#160;&#160;Yelp's server cross-references existing Yelp users against Estelle's FB friend list.</li>
			<li>&#160;&#160;&#160;&#160;Estelle selects from list of her FB friends to whom to submit Yelp friend requests.</li>
		</ol>
			&#160;&#160;&#160;<b>III.</b> Estelle needs map and directions to Tap Tap. (dynamic use case) <!-- final use case, dynamic -->
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Goal: Allow Estelle to access map and directions for Tap Tap from third party website(s).
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Entities: Estelle, Restaurant, Third Party Website(s)(ex:Google Maps)
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Assumptions: Estelle has an account with Yelp. Estelle permits Yelp to know user's location. Tap Tap has page with Yelp. Tap Tap is on third party website.
		<br/>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Basic Pattern:
		<ol> <!-- numerically ordered list of steps of use case -->
		<li>&#160;&#160;&#160;&#160;Estelle browses to Yelp page for Tap Tap.</li>
		<li>&#160;&#160;&#160;&#160;Estelle clicks on Get Directions link under Tap Tap's name.</li>
		<li>&#160;&#160;&#160;&#160;Yelp's server searches third party website for Tap Tap's location.</li>
		<li>&#160;&#160;&#160;&#160;Yelp's server provides map with Tap Tap's location indicated.</li>
		<li>&#160;&#160;&#160;&#160;Estelle clicks on Get Directions button inset on map.</li>
		<li>&#160;&#160;&#160;&#160;Yelp's server acquires driving directions from third party website and provides same to Estelle in map form.</li>
		</ol>
		<h2>Backend of Assignment</h2> <!--demarcation indicating next part of assignment -->
		<h5>Entities:</h5> <!-- description of entities leading up to entity-attribute table -->
			<br/>&#160;&#160;&#160;Profile(s) (strong entity)
			<br/>&#160;&#160;&#160;Restaurant(s) (strong entity)
			<br/>&#160;&#160;&#160;Review(s) (weak entity)
		<br/>
		<div class="Table"> <!-- I stole this code from somewhere and edited it for my own purposes. -->
			<div class="Title"> <!-- I think I understand how it works, but I would not have been able to come up with this on my own -->
				<p>Entities and their Attributes</p>
			</div>
			<div class="Heading">
				<div class="Cell">
					<p>Profile</p>
				</div>
				<div class="Cell">
					<p>Review</p>
				</div>
				<div class="Cell">
					<p>Restaurant</p>
				</div>
			</div>
			<div class="Row">
				<div class="Cell">
					<p>profileId (primary)</p>
				</div>
				<div class="Cell">
					<p>reviewId (primary)</p>
				</div>
				<div class="Cell">
					<p>restaurantId (primary)</p>
				</div>
			</div>
			<div class="Row">
				<div class="Cell">
					<p>email</p>
				</div>
				<div class="Cell">
					<p>content</p>
				</div>
				<div class="Cell">
					<p>address</p>
				</div>
			</div>
			<div class="Row">
				<div class="Cell">
					<p>password</p>
				</div>
				<div class="Cell">
					<p>date</p>
				</div>
				<div class="Cell">
					<p>   </p>
				</div>
			</div>
			<div class="Row">
				<div class="Cell">
					<p>bio</p>
				</div>
				<div class="Cell">
					<p>    </p>
				</div>
				<div class="Cell">
					<p>    </p>
				</div>
			</div>
		</div>
		<br/>
			<div class="imgDiagram"> <!-- refers to rules set up for this diagram in CSS file -->
			<figure>
				<img src="images/erd.jpg" alt="Entity Relationship Diagram"/> <!-- the ERD -->
				<figcaption>Figure 1: Example ERD for the Yelp SQL Database</figcaption> <!-- caption for ERD image -->
			</figure>
			</div>
	</body>
</html>