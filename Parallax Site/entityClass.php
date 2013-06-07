<?php
	/*  The Entity Class
		Explanation: This class is to hold all the information from the database that is shared by individuals
		and companies. They will both extend this class

		Harold Prentiss
		 */


	class Entity
	{
		public $userName = '';
		public $password = '';
		public $location = '';
		public $linkedIn = '';
		public $facebook = '';
		public $twitter = '';
		public $website = '';

		public function __construct($userName)
		{
			$this->email = $email;
		}

		public function __construct($userName, $password, $location, $linkedIn, $facebook, $twitter, $website)
		{
			$this->userName = $userName;
			$this->password = $password;
			$this->location = $location;
			$this->linkedIn = $linkedIn;
			$this->facebook = $facebook;
			$this->twitter = $twitter;
			$this->website = $website;
			
		}
?>