<?php
	/*  The Controller Class
		Explanation: This class makes the connections to the database and retireves the desired information

		Harold Prentiss
		 */
		include 'individualClass.php';
		include 'companyClass.php';

	class Controller
	{
		private $dbUserName = '';
		private $dbPassword = '';

		public function __construct($dbUserName)
		{
			$this->dbUserName = $dbUserName;
		}

		private function dbConnect()
		{
			// connection code goes here 
		}

		public Entity function getUserInfo($userName)
		{
			//  Use the dbConnect function to connect to the DB. Then use the userName to get
			//  the user's info and store it in the corresponding object

			this->dbConnect();

			/* then something like this
				if(user == company)
				{
					$companyObject = new($userName);
					fill in the rest of their information into the object
					example:
					companyObject.companyName = inforamtion from the database
					more code to fill in


					return $companyObject;
				}

				if(user == individual)
				{
					$personObject = new($userName);
					fill in the rest of their information into the object
					example:
					personObject.companyName = inforamtion from the database
					more code to fill in


					return $personObject;
				}*/

		}
?>