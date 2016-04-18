DROP TABLE IF EXISTS game;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS rating;

CREATE TABLE game (
	gameId INT UNSIGNED AUTO_INCREMENT NOT NULL,
 	gameName VARCHAR(60) NOT NULL,
	UNIQUE(gameName),
	PRIMARY KEY(gameId)
);

CREATE TABLE user (
	userId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	userName VARCHAR(32) NOT NULL,
	userLevel SMALLINT(4) UNSIGNED NOT NULL,
	userProducts SMALLINT(5) UNSIGNED,
	userReviews SMALLINT(4) UNSIGNED,
	userEmail VARCHAR(128) NOT NULL,
	userSalt CHAR(64),
	userHash CHAR(128),
	UNIQUE(userEmail),
	INDEX(userName),
	PRIMARY KEY(userId)
);

CREATE TABLE review (
	reviewId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	-- need to add foreign keys to all below this line
	reviewText VARCHAR(8000) NOT NULL,
	reviewDate TIMESTAMP,
	reviewRecommendation TINYINT(1) UNSIGNED NOT NULL,
	INDEX(userId),
	INDEX(gameId),
	FOREIGN KEY(userId) REFERENCES user(userId),
	FOREIGN KEY(gameId) REFERENCES game(gameId),
	PRIMARY KEY(reviewId)
);

CREATE TABLE comment (
	commentId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	commentText VARCHAR(1000) NOT NULL,
	commentDate TIMESTAMP,
	INDEX(userId),
	INDEX(reviewId),
	FOREIGN KEY(userId) REFERENCES user(userId),
	FOREIGN KEY(reviewId) REFERENCES review(reviewId),
	PRIMARY KEY(commentId)
);

CREATE TABLE rating (
	ratingHelpfulness TINYINT(1) UNSIGNED NOT NULL,
	INDEX(userId),
	INDEX(reviewId),
	FOREIGN KEY(userId) REFERENCES user(userId),
	FOREIGN KEY(reviewId) REFERENCES review(reviewId)
);