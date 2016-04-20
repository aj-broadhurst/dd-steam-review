<?php
namespace Edu\Cnm\Abroadhurst\DdSteamReview;
/**
 * Elements of a user profile
 *
 * The necessary elements of a user profile on Steam that are required in order to submit a review to any game's database. This class could be expanded to include more of the elements visible, and/or required when interacting in other areas of the site.
 *
 * @author Alicia Broadhurst <abroadhurst@cnm.edu>
 */
class User implements \JsonSerializable {
	use ValidateDate;
	/**
	 * user id (aka Steam id); primary key
	 * @var int $userId
	 */
	private $userId;
	/**
	 * user email associated with account
	 * @var string $userEmail
	 */
	private $userEmail;
	/**
	 * user level
	 * @var int $userLevel
	 */
	private $userLevel;
	/**
	 * username chosen by the user
	 * @var string $userName
	 */
	private $userName;
	/**
	 * products (games, dlc, etc) tied to user account
	 * @var int $userProducts
	 */
	private $userProducts;
	/**
	 * reviews tied to user account
	 * @var int $userReviews
	 */
	private $userReviews;
	/**
	 *salt for user password
	 * @var string $userSalt
	 */
	private $userSalt;
	/**
	 * hash for user password
	 * @var string $userHash
	 */
	private $userHash;

	/**
	 *accessor method for user id
	 *
	 * @return int|null value of user id, will be null if new profile
	 */
	public function getUserId() {
		return ($this->userId);
	}

	/**
	 * mutator method for user id
	 *
	 * @param int|null $newUserId creates new value of user id
	 * @throws \RangeException if $newUserId is not positive
	 * @throws \TypeError if $newUserId is not an integer
	 */
	public function setUserId(int $newUserId = null) {
		//when this is null, this is a new user that hasn't been assigned a mySQL user id yet
		if($newUserId === null) {
			$this->userId = null;
			return;
		}

		//verify that the user id is positive
		if($newUserId <= 0) {
			throw(new \RangeException("Profile Id is not positive"));
		}

		//store the user id
		$this->userId = $newUserId;
	}

	/**
	 * accessor method for user email
	 *
	 * @return string value of email
	 */
	public function getUserEmail() {
		return ($this->userEmail);
	}

	/**
	 * mutator method for user email
	 *
	 * @param string @newUserEmail creates new value for user email
	 * @throws \InvalidArgumentException if $newUserEmail is not valid or is insecure
	 * @throws \RangeException if $newUserEmail is greater than 128 characters
	 */
	public function setUserEmail(string $newUserEmail){
		//verify that the user email is valid and secure
		$newUserEmail = trim($newUserEmail);
		$newUserEmail = filter_var($newUserEmail, FILTER_SANITIZE_EMAIL);
		if(empty($newUserEmail) === true) {
			throw(new \InvalidArgumentException("Email is empty or is insecure"));
		}
		
		//verify that the email will fit in the database
		if(strlen($newUserEmail) > 128) {
			throw(new \RangeException("Email is too long"));
		}
		
		//store the email
		$this->userEmail = $newUserEmail;
	}

	/**
	 * accessor method for user level
	 *
	 * @return int value for user level(s)
	 */
	public function getUserLevel(){
		return ($this->userLevel);
	}

	/**
	 * mutator method for user level
	 *
	 * @param int $newUserLevel new value of user level(s)
	 * @throws \RangeException if $newUserLevel is not positive
	 * @throws \TypeError if $newUserLevel is not an integer
	 */
	public function setUserLevel($newUserLevel){
		//verify that the user level is positive
		if($newUserLevel <= 0){
			throw(new \RangeException("User level is not positive"));
		}

		//store user level
		$this->userLevel = $newUserLevel;
	}

	/**
	 * accessor method for username
	 *
	 * @return string value for username
	 */
	public function getUserName() {
		return ($this->userName);
	}

	/**
	 * mutator method for username
	 *
	 * @param string $newUserName new value for username
	 * @throws \RangeException if username is greater than 32 characters long
	 * @throws \InvalidArgumentException if username is not a string, or is insecure
	 */
	public function setUserName(string $newUserName) {
		//verify the username is valid and/or secure
		$newUserName = trim($newUserName);
		$newUserName = filter_var($newUserName, FILTER_SANITIZE_STRING);
		if(empty($newUserName) === true){
			throw(new \InvalidArgumentException("Username is empty or is insecure"));
		}

		//verify that the username will fit in the database
		if(strlen($newUserName) > 32) {
			throw(new \RangeException("Username is too long"));
		}

		//store username
		$this->userName = $newUserName;
	}

	/**
	 * accessor method for user products
	 *
	 * @return int value for user products
	 */
	public function getUserProducts() {
		return ($this->userProducts);
	}

	/**
	 * mutator method for user products
	 *
	 * @param int $newUserProducts new value for user products
	 * @throws \RangeException if $newUserProducts is not positive
	 * @throws \TypeError if $newUserProducts is not an integer
	 */
	public function setUserProducts($newUserProducts) {
		//verify that the number of products is positive
		if($newUserProducts <= 0) {
			throw(new \RangeException("Number of products owned is not positive"));
		}

		//convert and store user products
		$this->userProducts = $newUserProducts;
	}

	/**
	 * accessor method for user reviews
	 *
	 * @return int value for user reviews
	 */
	public function getUserReviews() {
		return ($this->userReviews);
	}

	/**
	 * mutator method for user reviews
	 *
	 * @param int $newUserReviews new value for user reviews
	 * @throws \RangeException is $newUserReviews is not positive
	 * @throws \TypeError if $newUserProducts is not an integer
	 */
	public function setUserReviews($newUserReviews){
		//verify that the number of reviews is positive
		if($newUserReviews <= 0) {
			throw(new \RangeException("Review number is not positive"));
		}

		//store number of user reviews
		$this->userReviews = $newUserReviews;
	}

	/**
	 * accessor method for user salt
	 *
	 * @return string value of user salt
	 */
	public function getUserSalt(){
		return($this->userHash);
	}

	/**
	 * mutator method for user salt
	 *
	 * @param string $newUserSalt new value for user salt
	 * @throws \RangeException if $newUserSalt is longer than 64 characters
	 */
	public function setUserSalt($newUserSalt) {
		//verify that the hash will fit in the database
		if(strlen($newUserSalt) > 64){
			throw(new \RangeException("Salt is too long"));
		}

		//store the salt
		$this->userSalt = $newUserSalt;
	}

	/**
	 * accessor method for user hash
	 *
	 * @return string value of user hash
	 */
	public function getUserHash(){
		return($this->userHash);
	}

	/**
	 * mutator method for user hash
	 *
	 * @param string $newUserHash new value for user hash
	 * @throws \RangeException is $newUserHash is longer than 128 characters
	 */
	public function setUserHash($newUserHash){
		//verify that the hash will fit in the database
		if(strlen($newUserHash) > 128){
			throw(new \RangeException("Hash is too large"));
		}

		//store the hash
		$this->userHash = $newUserHash;
	}
}