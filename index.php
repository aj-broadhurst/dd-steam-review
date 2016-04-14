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