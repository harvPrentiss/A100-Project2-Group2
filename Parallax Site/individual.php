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
    $indName = $POST["Name"];
    $indLocation = $POST["Location"];
    $indEmail = $POST["Email"];
    $contactPhone = $POST["Phone"];
    $indLinkedIn= $POST["LinkedIn"];
    $indFacebook= $POST["Facebook"];
    $indTwitter= $POST["Twitter"];
    $indGithub= $POST["Github"];
    $indPWebsite= $POST["PersonalWebsite"];
    $upload= $POST["upload"];
    $indBio= $POST["Bio"];
    $indFunFacts= $POST["Fun Facts"];
    $indSkills= $POST["Skills"];
    $indExperience= $POST["Experience"];
    $indOther= $POST["Other"];
    $indStatus= $POST["Status"];
    
	//Prepare a statement holder.
	$statementHandle = $DatabaseHandle->prepare('SELECT Name, email,phone, linkedin, facebook, twitter, github,website, upload, bio, funfacts,
        skills, experience, othe, status
	    FROM community		
        WHERE indEmail = :email AND indName = :name  AND indLocation =: location AND contactPhone=:phone AND indLinkedin=:linkedin 
            AND indFacebook=:facebook AND indTwitter=:twitter AND indGithub=:github AND indPwebsite=:website AND upload=:upload AND 
            indBio=:bio AND indFunFacts=:funfacts AND indSkills=: skills AND indExperience=:experience AND 
            indOther=: other AND indStatus=:status');
		
	//Bind Parameters
    $statementHandle -> bindParam(':Name',$indName,PDO::PARAM_STR, 50);
    $statementHandle -> bindParam(':location',$indLocation, PDO::PARAM_STR, 2);
    $statementHandle -> bindParam(':email',$indEmail,PDO::PARAM_STR, 50);
    $statementHandle -> bindParam(':phone',$contactPhone,PDO::PARAM_INT);
    $statementHandle -> bindParam(':linkedin',$indLinkedIn,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':facebook',$indFacebook,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':twitter',$indTwitter,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':github',$indGithub,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':website',$indPWebsite,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':upload',$upload,PDO::PARAM_STR, 12);
    $statementHandle -> bindParam(':bio',$indBio,PDO::PARAM_STR, 300);
    $statementHandle -> bindParam(':funfacts',$indFunFacts,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':skills',$indSkills,PDO::PARAM_STR, 250);
    $statementHandle -> bindParam(':experience',$indExperience,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':other',$indOther,PDO::PARAM_STR, 200);
    $statementHandle -> bindParam(':status',$indStatus,PDO::PARAM_STR, 150);
        
    //Insert in database
    $statementHandle -> execute();
   
    //close connection
    $DatabaseHandle = null;
?>
