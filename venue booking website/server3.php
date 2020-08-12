<?php 
		session_start();

		$errors = array();


      	// connect to the database
		$db = mysqli_connect('localhost', 'root', '', 'registration');

		// if the search button is clicked
		if(isset($_POST['search'])){
			$venuename = mysqli_real_escape_string($db, $_POST['venuename']);
			$venuelocation = mysqli_real_escape_string($db, $_POST['venuelocation']);
			$venuetype = mysqli_real_escape_string($db, $_POST['venuetype']);
			$date = mysqli_real_escape_string($db, $_POST['date']);
			$dining = mysqli_real_escape_string($db, $_POST['dining']);

			//ensure that form fields are filled prpoerly
			if (empty($venuename)){
				array_push($errors, "VenueName is required");
			}

			if (empty($venuelocation)){
				array_push($errors, "VenueLocation is required");
			}
		
			if (empty($venuetype)){
				array_push($errors, "VenueType is required");
			}

			if (empty($date)){
				array_push($errors, "Date is required");
			}

			if (empty($dining)){
				array_push($errors, "Dining is required");
			}
		

			// if there are no errors, save user to database
			if (count($errors) == 0){
				$sql = "INSERT INTO client (venuename, venuelocation, venuetype, date, dining)
								VALUES ('$venuename', '$venuelocation', '$venuetype', '$date', '$dining')";
				 mysqli_query($db, $sql);
				

			}
			

		}
?>		