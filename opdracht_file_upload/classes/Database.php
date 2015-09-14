<?php

	class User {

		$emailSubmit = $_POST['email'] ;
		$imageNameFiles = $_FILES['file']['type'];

		public insertUser() {

			$email = this->emailSubmit ;
			$imageName = this->imageNameFiles ;

				$profilesQuery =   'INSERT INTO
										users (email, profile_picture)
                                        VALUES
                                        ( :email, :profile_picture)';

           		$profilesStatement = $db->prepare( $profilesQuery );

        	    $profilesStatement->bindParam( ':email', $_POST[ 'email' ] );
         		$profilesStatement->bindParam( ':profile_picture', $_FILES['file']['name'] );

            	$addedToDb = $profilesStatement->execute();
		}

	}

?>