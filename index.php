<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Data Design Project</title>
	</head>
	<body>
		<header>
			<h1>Data Design Project:</h1>
			<h2> Steam Game Storefront Review Section</h2>
			<p><i>Alicia Broadhurst</i></p>
			<p>Phase 1 for the Data Design Project</p>
		</header>
		<main>
		<h2>Phase 1 Assignment</h2>
		<h3>Frontend</h3>
			<h4>Persona</h4>
			<p><b>Name</b>: Alexander Powell<br>
				<b>Age</b>: 20<br>
				<b>Profession</b>: Alexander is a full-time student at the University of Colorado in Colorado Springs.  He is majoring in Game Design and Development with a minor in Visual Arts and is currently a sophomore.  He also works part time at one of the local Starbucks to help pay for school and other expenses.<br>
				<b>Technology</b>: Alexander built his own gaming PC, which he uses both for school work, as well as all his PC gaming. His PC is not extreme top-of-the-line, but all the components are from mid-high tiers.  Alexander also has an android phone, a LG G4.  He has the Steam app installed and uses the two-factor authentication features that are available.<br>
				<b>Attitudes and Behaviors</b>: Because he is a student, and as is the typical trend for Steam users, Alexander tends to make most of his purchases during Steam sales.  Alexander does follow games journalism, blogs, etcetera, and thus usually knows about upcoming titles, especially in his favorite genres or by his favorite developers.  He eagerly anticipates specific titles before release, and will often purchase these titles before any sort of major price drop.  For titles that he is less familiar with, the content on the games' store page is usually the largest deciding factor.<br>
				<b>Frustrations and Needs</b>: Alexander uses game storefronts to finalize impulse purchase and fully understand his purchases.  Alexander needs to be able to use the reviews to make an informed decision about games he is very familiar with, or games he knows very little about.<br>
				<b>Goals</b>: Alexander wants to know a few things, is he getting the most bang for his buck? And will he enjoy playing this game? He likes to find other users who know what they are talking about, and who play the same kind of games that he likes.</p>
			<h4>Use Cases</h4>
			<p><b>Use Case 1: </b>Goal - User wants to write a review:</p>
			<ol>
				<li>Alexander accesses the Steam homepage at <a href = "https://store.steampowered.com">https://store.steampowered.com</a></li>
				<li>Alexander logs in, by clicking 'login' in the very top right corner.
				<li>On the following screen, Alexander enters his username and password.  His SteamGuard settings are set up to send a verification code to the Steam app on his phone. Once he accesses that, and has typed the code into the pop-up prompt on the website, he is logged in and returned to the 'Featured Items' page.</li>
				<li>Alexander searches for the requested game, in this case 'Rocket League'. The search box is in the upper right hand corner. As he types, games that match appear in a drop down list below the search bar.  He selects 'Rocket League' from the top of the list. He is taken to the 'Rocket League' storefront.</li>
				<li>Since Alexander owns 'Rocket League' the storefront notes just below the video and summary elements that 'Rocket League is already in your Steam Library' and offers options to either 'Install Steam', 'Play Now' or Write a Review with an accompanying text box.</li>
				<li>Alexander writes the content of his review in the text box, and selects a recommendation: either 'Yes' or 'No'.  In this case, 'Yes'.</li>
				<li>Alexander clicks on 'Post review' and his review is submitted to the game's review database.</li>
			</ol>
			<p><b>Use Case 2: </b>Goal - User wants to read/interact with reviews:</p>
			<ol>
				<li>Alexander is browsing the featured items on the Steam homepage at <a href = "https://store.steampowered.com">https://store.steampowered.com</a> </li>
				<li>Since Alexander is already logged in, he has all the rights granted to a Steam user, and doesn't need to log-in again.</li>
				<li>He recalls a game he heard about a few months back, and believes it was recently released. He types what he remembers of the title into the search bar in the upper right hand corner of the page. 'Hyper Light'</li>
				<li>Because he isn't sure on the full title, he presses 'Enter' instead of selecting a game from the drop-down list, in order to get a full look at all the possible titles. 'Hyper Light Drifter' is the first title in the list, the only title containing those words, and the icon looks correct; therefore Alexander selects it and proceeds to the storefront.</li>
				<li>He watches the trailer, reads the description, and then moves onto the reviews by scrolling towards the bottom of the game's storefront.</li>
				<li>The reviews are initially sorted by helpfulness, with most helpful reviews being displayed first.</li>
				<li>Alexander scrolls down the page, reading reviews as he goes.  Once he reaches the end, he clicks on 'Load More Reviews' to have more reviews loaded on the page.</li>
				<li>He decides that the second review was most helpful, and that one of the later reviews was rather useless, and scrolls back up to rate them.</li>
				<li>Under the body of each review is a query asking 'Was this review helpful?' and three corresponding prompts. 'Yes', 'No', and 'Funny'. For the reviews he wanted to rate, Alexander clicks on the appropriate button. These buttons are now highlighted in a slightly lighter blue, while the text has become white, instead of blue, to indicate the interaction.</li>
				<li>Alexander is done reading reviews for now, and while he is leaning towards purchasing the game; he is still making up his mind.</li>
			</ol>
		<h3>Backend</h3>
			<h4>Attributes and Entities</h4>
			<h5>Game</h5>
			<ul>
				<li>gameId</li>
				<li>gameName</li>
			</ul>
			<h5>User</h5>
			<ul>
				<li>userId</li>
			<li>userName</li>
			<li>userLevel</li>
			<li>userProducts</li>
			<li>userReviews</li>
			<li>userEmail</li>
			<li>userSalt</li>
			<li>userHash</li>
			</ul>
			<h5>Review</h5>
			<ul>
				<li>reviewId</li>
				<li>reviewText</li>
				<li>reviewDate</li>
				<li>reviewRecommendation</li>
				<li>userId</li>
				<li>gameId</li>
			</ul>
			<h5>Comment</h5>
				<ul>
					<li>commentId</li>
					<li>commentText</li>
					<li>commentDate</li>
					<li>userId</li>
					<li>reviewId</li>
				</ul>
			<h5>Rating</h5>
				<ul>
					<li>ratingHelpfulness</li>
					<li>userId</li>
					<li>reviewId</li>
				</ul>
			<h4>Relations</h4>
			<table>
				<tr>
					<th>Verbal</th>
					<th>Algebraic</th>
					<th>Description</th>
				</tr>
				<tr>
					<td>user-to-review</td>
					<td>1-to-<i>n</i></td>
					<td>Users can write many reviews (for different games).</td>
				</tr>
				<tr>
					<td>review-to-comment</td>
					<td>1-to-<i>n</i></td>
					<td>Reviews can have many comments.</td>
				</tr>
				<tr>
					<td>review-to-rating</td>
					<td><i>m</i>-to-<i>n</i></td>
					<td>Reviews can have many ratings.</td>
				</tr>
				<tr>
					<td>user-to-comment</td>
					<td>1-to-<i>n</i></td>
					<td>Users can make many comments.</td>
				</tr>
				<tr>
					<td>game-to-review</td>
					<td>1-to-<i>n</i></td>
					<td>Games can have many reviews.</td>
				</tr>
				<tr>
					<td>user-to-rating</td>
					<td><i>m</i>-to-<i>n</i></td>
					<td>Users can only choose 1 rating, but they can rate many games.</td>
				</tr>
			</table>
			<h2>Phase 2 Assignment</h2>
			<h3>Entity Relationship Diagram</h3>
			<img src="images/dataDesign.svg" alt="Steam Game Review Section Entity Relationship Diagram">
			<h3>Data Description Language (DDL) Scripts</h3>
				<code>
					DROP TABLE IF EXISTS game;<br>
					DROP TABLE IF EXISTS user; <br>
					DROP TABLE IF EXISTS review; <br>
					DROP TABLE IF EXISTS comment; <br>
					DROP TABLE IF EXISTS rating;<br>
					<br>
					CREATE TABLE game(<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gameId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gameName VARCHAR(60) NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UNIQUE(gameName),<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMARY KEY(gameId),<br>
					);<br>
					<br>
					CREATE TABLE user(<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userName VARCHAR(32) NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userLevel SMALLINT(4) UNSIGNED NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userProducts SMALLINT(5) UNSIGNED NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userReviews SMALLINT(4) UNSIGNED,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userEmail VARCHAR(128) NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userSalt,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userHash,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UNIQUE userEmail,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMARY KEY userId,<br>
					);<br>
					<br>
					CREATE TABLE review(<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reviewId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reviewText VARCHAR(8000) NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reviewDate TIMESTAMP,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reviewRecommendation TINYINT(1) UNSIGNED NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOREIGN KEY(userId) REFERENCES user(userId),<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOREIGN KEY(gameId) REFERENCES game(gameId),<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMARY KEY(reviewId),<br>
					);<br>
					<br>
					CREATE TABLE comment(<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;commentId INT UNSIGNED AUTO_INCREMENT NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;commentText VARCHAR(1000) NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;commentDate TIMESTAMP,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOREIGN KEY(userId) REFERENCES user(userId),<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOREIGN KEY(reviewId) REFERENCES review(reviewId),<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIMARY KEY commentId,<br>
					);<br>
					<br>
					CREATE TABLE rating(<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ratingHelpfulness TINYINT(1) UNSIGNED NOT NULL,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOREIGN KEY(userId) REFERENCES user(userId),<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FOREIGN KET(reviewId) REFERENCES review(reviewId),<br>
					);<br>
				</code>
		</main>
	</body>
</html> 