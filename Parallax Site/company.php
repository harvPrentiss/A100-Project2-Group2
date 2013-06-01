<?php
    /**
     This code is for connecting to the MySQL database 
	 for inserting users information to the database.
	 UtibeAbasi, Bishwo 
	**/
	
    //declare variables
    $hostName = 'mysql:host = 127.0.0.1; dbname = _a100, charset=utf8';
    $databaseName = '_a100';
    $userName = 'jrmh05';
    $password = 'boobie05';

    //connect to database
    try{
    $DatabaseHandle = new PDO($hostName,$userName,$password);
    //set error mode (this will allow 
    $DatabaseHandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
    echo "There's been an error!, We're unable to connect to the database";
    }

    //capture the passed data
    $companyName = $POST["CompanyName"];
    $companyLocation = $POST["Location"];
    $companyContact = $POST["ContactName"];
    $contactEmail = $POST["ContactEmail"];
    $contactPhone = $POST["Phone"];
    $companyLinkedIn = $POST["LinkedIn"];
    $companyTwitter = $POST["Twitter"];
    $companyWebsite = $POST["Website"];
    $companyStatus = $POST["Status"];
    $companyMission = $POST["Mission"];
    $companyAbout = $POST["About Us"];
    $companyLinks = $POST["Job Postings"];
    $companyTags = $POST["Tags"];
    //$companyPassword = $POST["Password"];
    
    //grab picture and insert into database
    
	//Prepare a statement holder.
	$statementHandle = $DatabaseHandle->prepare('SELECT company,location,contact,contactEmail,contactPhone,companyLinkedIn,companyTwitter,
        companyWebsite,companyStatus,companyMission,companyAbout,companyLinks,companyTags
	    FROM job_employer 
		WHERE companyName = :company AND companyLocation = :location AND companyContact = :contact AND
        contactEmail = :contactEmail AND contactPhone = :contactPhone AND linkedIn = :companyLinkedIn AND twitter = :companyTwitter AND
        website = :CompanyWebsite AND status = :companyStatus AND mission = :companyMission AND about = :companyAbout AND
        links = :companyLinks AND tags = companyTags');
		
	//Bind Parameters
    $statementHandle -> bindParam(':company',$companyName, PDO::PARAM_STR, 50);
    $statementHandle -> bindParam(':location', $companyLocation, PDO::PARAM_STR, 2);
    $statementHandle -> bindParam(':contact',$companyContact, PDO::PARAM_STR, 12);
    $statementHandle -> bindParam(':contactEmail',$contactEmail, PDO::PARAM_STR, 50);
    $statementHandle -> bindParam(':contactPhone',$contactPhone,PDO::PARAM_INT);
    $statementHandle -> bindParam(':companyLinkedIn',$companyLinkedIn,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':companyTwitter',$companyTwitter,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':companyWebsite',$companyWebsite,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':companyStatus',$companyStatus,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':companyMission',$companyMission,PDO::PARAM_STR, 250);
    $statementHandle -> bindParam(':companyAbout',$companyAbout,PDO::PARAM_STR, 250);
    $statementHandle -> bindParam(':companyLinks',$companyLinks,PDO::PARAM_STR, 250);
    $statementHandle -> bindParam(':companyTags',$companyTags,PDO::PARAM_STR, 70);
    
    //Insert in database
    $statementHandle -> execute();
   
    //close connection
    $DatabaseHandle = null;
?>
