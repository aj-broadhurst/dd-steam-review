<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="UTF-8">
		<title>Data Design Project</title>
	</head>
	<body>
		<header>
			<h1>Data Design Project:</h1>
			<h2> Steam Game Storefront Review Section</h2>
			<p>Phase 1 for the Data Design Project</p>
		</header>
		<main>
		<h2>Frontend</h2>
			<h3>Persona</h3>
			<p><b>Name</b>: Alexander Powell<br>
				<b>Age</b>: 20<br>
				<b>Profession</b>: Alexander is a full-time student at the University of Colorado in Colorado Springs.  He is majoring in Game Design and Development with a minor in Visual Arts and is currently a sophomore.  He also works part time at one of the local Starbucks to help pay for school and other expenses.<br>
				<b>Technology</b>: Alexander built his own gaming PC, which he uses both for school work, as well as all his PC gaming. His PC is not extreme top-of-the-line, but all the components are from mid-high tiers.  Alexander also has an android phone, a LG G4.  He has the Steam app installed and uses the two-factor authentication features that are available.<br>
				<b>Attitudes and Behaviors</b>: Because he is a student, and as is the typical trend for Steam users, Alexander tends to make most of his purchases during Steam sales.  Alexander does follow games journalism, blogs, etcetera, and thus usually knows about upcoming titles, especially in his favorite genres or by his favorite developers.  He eagerly anticipates specific titles before release, and will often purchase these titles before any sort of major price drop.  For titles that he is less familiar with, the content on the games' store page is usually the largest deciding factor.<br>
				<b>Frustrations and Needs</b>: Alexander uses game storefronts to finalize impulse purchase and fully understand his purchases.  Alexander needs to be able to use the reviews to make an informed decision about games he is very familiar with, or games he knows very little about.<br>
				<b>Goals</b>: Alex wants to know a few things, is he getting the most bang for his buck? And will he enjoy playing this game? He likes to find other users who know what they are talking about, and who play the same kind of games that he likes.</p>
			<h3>Use Cases</h3>
		<h2>Backend</h2>
			<h3>Attributes and Entities</h3>
			<h4>Game</h4>
			<ul>
				<li>gameID</li>
				<li>gameName</li>
			</ul>
			<h4>User</h4>
			<ul>
				<li>userID</li>
			<li>userName</li>
			<li>userLevel</li>
			<li>userProducts</li>
			<li>userReviews</li>
			<li>userEmail</li>
			<li>userSalt</li>
			<li>userHash</li>
			</ul>
			<h4>Review</h4>
			<ul>
				<li>reviewID</li>
				<li>reviewText</li>
				<li>reviewDate</li>
				<li>reviewRecommendation</li>
				<li>userID</li>
				<li>gameID</li>
			</ul>
			<h4>Comment</h4>
				<ul>
					<li>commentID</li>
					<li>commentText</li>
					<li>commentDate</li>
					<li>userID</li>
				</ul>
			<h4>Rating</h4>
				<ul>
					<li>ratingHelpfulness</li>
					<li>userID</li>
					<li>reviewID</li>
				</ul>
			<h3>Relations</h3>
		</main>
	</body>
</html> 