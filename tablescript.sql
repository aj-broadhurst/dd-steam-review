DROP TABLE IF EXISTS game;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS review;
DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS rating;

CREATE TABLE game(
	gameId INT UNSIGNED AUTO_INCREMENT NOT NULL,
 	gameName VARCHAR(60) NOT NULL,
	UNIQUE(gameName),
	PRIMARY KEY(gameId),
);

CREATE TABLE user(
	userId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	userName VARCHAR(32) NOT NULL,
	userLevel SMALLINT(4) UNSIGNED NOT NULL,
	userProducts SMALLINT(5) UNSIGNED NOT NULL,
	userReviews SMALLINT(4) UNSIGNED,
	userEmail VARCHAR(128) NOT NULL,
	userSalt ,
	userHash ,
	UNIQUE(userEmail),
	PRIMARY KEY userId,
);

CREATE TABLE review(
	reviewId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	reviewText VARCHAR(8000) NOT NULL,
	reviewDate TIMESTAMP,
	reviewRecommendation TINYINT(1) UNSIGNED NOT NULL,
	FOREIGN KEY(userId) REFERENCES user(userId),
	FOREIGN KEY(gameId) REFERENCES game(gameId),
	PRIMARY KEY(reviewId),
);

CREATE TABLE comment(
	commentId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	commentText VARCHAR(1000) NOT NULL,
	commentDate TIMESTAMP,
	FOREIGN KEY(userId) REFERENCES user(userId),
	FOREIGN KEY(reviewId) REFERENCES review(reviewId),
	PRIMARY KEY commentId,
);

CREATE TABLE rating(
	ratingHelpfulness TINYINT(1) UNSIGNED NOT NULL,
	FOREIGN KEY(userId) REFERENCES user(userId),
	FOREIGN KET(reviewId) REFERENCES review(reviewId),
);