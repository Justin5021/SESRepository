﻿<?php
session_start();
if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] !== true){
    header("location: LoginPage.php");
    exit;
}
if(!isset($_SESSION["UserType"]) || $_SESSION["UserType"] !== "patient"){
    header("location: DoctorHome.php");
    exit;
}
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta>
            <link rel="stylesheet" type="text/css" href="stylesheet1.css">
            <link rel="icon" type="image/x-icon" href="favicon.ico"/>
			<title>Home</title>
    
	    <title>TeleHealth</title>

        <script>
            function myMap() {
                var mapProp= {
                    center:new google.maps.LatLng(-33.86984543,151),
                    zoom:10,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                
                var ClinicPos = {lat: -33.883665,lng: 151.200807};
                var marker = new google.maps.Marker({
                    position: ClinicPos,
                    map: map,
                    title: 'Medical Clinic'
                });
             }   
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYWvsmEcY5HF_GSj1bx07SFDjX4Ud_dsQ"></script>

    </head>

    <body>

       <!-- Navigation Menu -->
        <div class="navBar">
		    <a id="homeLink" href="LandingPage.php">Home</a>
	    	<a id="aboutLink" href="AboutPage.php">About</a>
    		<a id="servicesLink" href="ServicesPage.php">Services</a>
    		<a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
		    <a id="contactLink" href="ContactPage.php">Contact Us</a>
            <a id="viewSub" href="PatientViewSubscription.php">View Subscriptions</a>
		    <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
            <a id="patHome" class="active" href="PatientHome.php" style="float:right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
		</div>

        
		<div class="parallax">
            <br> <br> <br>
                <h1>Welcome <?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></h1>
            <br>
            <br><br>
            <br>
            <div id="googleMap" class="container1" style="width:800px; height: 800px;">
                <!--Google map will be embedded here -->
                <img src="LocationImage.jpg" alt="Image" style="width:100%"> 
                <button class="btn" type="button" onclick="myMap();">Find Medical Clinics Near Me</button>
               
            </div>
            
            <div class="container2">
                <img src="BookingIcon.png" alt="Image" style="width: 400px; position: center;"> 
                <a class="btn" type="button" href="BookingPage.php" style="position: center;">Make a Booking</a>
            </div>
               <!-- Navigation Menu -->
            <div class="navBar">
		        <a id="homeLink" href="LandingPage.php">Home</a>
	    	    <a id="aboutLink" href="AboutPage.php">About</a>
    		    <a id="servicesLink" href="ServicesPage.php">Services</a>
    		    <a id="emergenciesLink" href="EmergenciesPage.php">Emergencies</a>
		        <a id="contactLink" href="ContactPage.php">Contact Us</a>
                <a id="viewSub" href="PatientViewSubscription.php">View Subscriptions</a>
		        <a id="logoutLink" href="LogoutHandler.php" style="float:right">Log Out</a>
                <a id="patHome" class="active" href="PatientHome.php" style="float:right;"><?php echo $_SESSION["FName"]," ",$_SESSION["LName"];?></a>
		    </div>

        </div>
         
    </body>

    
</html>