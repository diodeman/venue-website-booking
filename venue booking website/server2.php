<?php 
		session_start();

		$errors = array();


      	// connect to the database
		$db = mysqli_connect('localhost', 'root', '', 'registration');

		// if the add button is clicked
		if(isset($_POST['add'])){
			$venuename = mysqli_real_escape_string($db, $_POST['venuename']);
			$venuelocation = mysqli_real_escape_string($db, $_POST['venuelocation']);
			$venuecharges = mysqli_real_escape_string($db, $_POST['venuecharges']);
			$venuecontact = mysqli_real_escape_string($db, $_POST['venuecontact']);
			$venuetype = mysqli_real_escape_string($db, $_POST['venuetype']);
			$venuecapacity = mysqli_real_escape_string($db, $_POST['venuecapacity']);
			$availability = mysqli_real_escape_string($db, $_POST['availability']);
			$date = mysqli_real_escape_string($db, $_POST['date']);
			$time = mysqli_real_escape_string($db, $_POST['time']);
			$dining = mysqli_real_escape_string($db, $_POST['dining']);

			//ensure that form fields are filled prpoerly
			if (empty($venuename)){
				array_push($errors, "VenueName is required");
			}
			
			if (empty($venuelocation)){
				array_push($errors, "VenueLocation is required");
			}
			if (empty($venuecharges)){
				array_push($errors, "VenueCharges is required");
			}
			if (empty($venuecontact)){
				array_push($errors, "VenueContact is required");
			}
			if (empty($venuetype)){
				array_push($errors, "VenueType is required");
			}
			if (empty($venuecapacity)){
				array_push($errors, "VenueCapacity is required");
			}
			if (empty($availability)){
				array_push($errors, "Availability is required");
			}
			if (empty($date)){
				array_push($errors, "Date is required");
			}
			if (empty($time)){
				array_push($errors, "Time is required");
			}
			if (empty($dining)){
				array_push($errors, "Dining is required");
			}
		

			// if there are no errors, save user to database
			if (count($errors) == 0){
				$sql = "INSERT INTO upload venue (venuename, venuelocation, venuecharges, venuecontact, venuetype, venuecapacity, availability, date, time, dining)
								VALUES ('$venuename', '$venuelocation', '$venuecharges', '$venuecontact', '$venuetype', '$venuecapacity', '$availability', '$date', '$time', '$dining')";
				 mysqli_query($db, $sql);
				

			}
			

		}
?>		