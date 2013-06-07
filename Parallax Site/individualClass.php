<?php
	/*  The Individual Class
		Explanation: This class is to hold all the information from the database about an individual
		to pas to the front end for use on the actual webpage. 

		Harold Prentiss
		*/
		include 'entityClass.php';

	class Individual extends Entity
	{
		public $firstName = '';
		public $lastName = '';
		public $phone = '';
		public $gitHubLink = '';
		public $bio = '';
		public $funFacts = '';
		public $skills = '';
		public $experience = '';
		public $other = '';
		public $status = '';

		public function __construct($userName)
		{
			parent::__construct($userName)
		}

		public function __construct($firstName, $lastName, $location, $userName, $phone, $linkedInLink, $facebookLink, $twitterLink
			$gitHubLink, $websiteLink, $bio, $funFacts, $skills, $experience, $other, $status, $password)
		{
			parent::__construct($userName, $password, $location, $linkedInLink, $facebookLink, $twitterLink, $websiteLink);

			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->phone = $phone;
			$this->gitHubLink = $gitHubLink;
			$this->bio = $bio;
			$this->funFacts = $funFacts;
			$this->skills = $skills;
			$this->experience = $experience;
			$this->other = $other;
			$this->status = $status;
		}



	}
?>