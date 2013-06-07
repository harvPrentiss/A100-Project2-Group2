<?php
	/*  The Company Class (extends Entity)
		Explanation: This class is to hold all the information from the database about an company
		to pass to the front end for use on the actual webpage. 

		Harold Prentiss
		*/
		include 'entityClass.php';

	class Company extends Entity
	{
		public $userName = '';
		public $password = '';
		public $conatactName = '';
		public $companyName = '';
		public $contactEmail = '';
		public $companyLocation = '';
		public $companyLinkedIn = '';
		public $companyFacebook = '';
		public $companyTwitter = '';
		public $companyWebsite = '';

		public function __construct($userName)
		{
			parent::__construct($userName);
		}

		public function __construct($userName, $password, $contactName, $companyName, $contactEmail, $companyLocation, $companyLinkedIn, $companyFacebook
			$companyTwitter, $companyWebsite)
		{

			parent::__construct($userName, $password, $companyLocation, $companyLinkedIn, $companyFacebook, $companyTwitter, $companyWebsite);
			$this->contactName = $contactName;
			$this->companyName = $companyName;
			$this->contactEmail = $contactEmail;		
		}

	}
?>