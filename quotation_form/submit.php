
<?php

if (isset($_POST['submitCar'])){
    $to='quote@broadinsurance.co.uk';
    $subject='Car Quotation Form';
    $headers="From: gadgetshopbd360@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<h1>Car insurance form, submitted by <span style="color: #3380ff">'.$_POST['firstName'].' '.$_POST['surname'].'</span></h1>';
    $message .= '<p><b>Online or Phone : '.$_POST['online'].'</b></p>';
    $message .= '<p><b>How did you hear about us? :</b> '.$_POST['hearAboutUs'].'</p>';
    $message .= '<p><b>Friend or Family Name :</b> '.$_POST['referrer'].'</p>';
    $message .= '<p><b>Have you or any of the drivers ever had insurance declined, cancelled or special terms imposed? :</b> '.$_POST['declined'].'</p>';

    $message .= '<br><br><h2>Personal Information</h2>';
    $message .= '<p><b>Title :</b> '.$_POST['title'].'</p>';
    $message .= '<p><b>First Name :</b> '.$_POST['firstName'].'</p>';
    $message .= '<p><b>Surname :</b> '.$_POST['surname'].'</p>';
    $message .= '<p><b>Date of Birth :</b> '.$_POST['dateofBirth'].'</p>';
    $message .= '<p><b>House Number / Name :</b> '.$_POST['houseNumber'].'</p>';
    $message .= '<p><b>First Line of Address :</b> '.$_POST['addressFirsLine'].'</p>';
    $message .= '<p><b>Postcode :</b> '.$_POST['postcode'].'</p>';
    $message .= '<p><b>Marital Status :</b> '.$_POST['maritalStatus'].'</p>';
    $message .= '<p><b>Employment Status :</b> '.$_POST['employmentStatus'].'</p>';
    $message .= '<p><b>Employment Occupation :</b> '.$_POST['occupation'].'</p>';
    $message .= '<p><b>Employment Business :</b> '.$_POST['business'].'</p>';
    $message .= '<p><b>Are you a home owner? :</b> '.$_POST['homeOwner'].'</p>';
    $message .= '<p><b>Do you have any children under the age of 16? :</b> '.$_POST['children'].'</p>';

    $message .= '<br><br><h2>Contact Information</h2>';
    $message .= '<p><b>Email :</b> '.$_POST['email'].'</p>';
    $message .= '<p><b>Phone Number :</b> '.$_POST['phone'].'</p>';
    $message .= '<p><b>Mobile Number :</b> '.$_POST['mobile'].'</p>';
    $message .= '<p><b>Please contact me via :</b> '.$_POST['viaContact'].'</p>';

    $message .= '<br><br><h2>Driving History</h2>';
    $message .= '<p><b>Licence Type :</b> '.$_POST['licenceType'].'</p>';
    $message .= '<p><b>Period Licence Held :</b> '.$_POST['licencePeriod'].'</p>';
    $message .= '<p><b>If held for 3 years or less, what date was licence obtained :</b> '.$_POST['licenseDate'].'</p>';
    $message .= '<p><b>Please enter your 16 character driving licence number :</b> '.$_POST['enterLicenceNumber'].'</p>';
    $message .= '<p><b>DVLA medical conditions or disability :</b> '.$_POST['DVLAmedical'].'</p>';
    $message .= '<p><b>Any additional driving qualification :</b> '.$_POST['driverQualifications'].'</p>';
    $message .= '<p><b>If one is selected, what date was qualification obtained :</b> '.$_POST['qualificationDate'].'</p>';
    $message .= '<p><b>Were you born in the UK? :</b> '.$_POST['bornPlace'].'</p>';
    $message .= '<p><b>If no, when did you become resident of the UK? :</b> '.$_POST['residentDate'].'</p>';
    $message .= '<p><b>Use of any other vehicle? :</b> '.$_POST['otherVehicles'].'</p>';
    $message .= '<p><b>Non motoring criminal convictions? :</b> '.$_POST['criminalConvictions'].'</p>';
    $message .= '<p><b>Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years? :</b> '.$_POST['DVLA'].'</p>';
    $message .= '<p><b>Any motor convictions fixed penaltist or disqualification in the last 5 years? :</b> '.$_POST['driverDetails'].'</p>';
    $message .= '<br><p><b>Motor Accident 1</b></p>';
    $message .= '<p><b>Motor Accident 2</b></p>';
    $message .= '<p><b>Motor Accident 3</b></p>';
    $message .= '<p><b>Motor Accident 4</b></p>';
    $message .= '<br><p><b>Motor Conviction 1</b></p>';
    $message .= '<p><b>Motor Conviction 2</b></p>';
    $message .= '<p><b>Motor Conviction 3</b></p>';
    $message .= '<p><b>Motor Conviction 4</b></p>';

    $message .= '<br><br><h2>Vehicle Details</h2>';
    $message .= '<p><b>Vehicle Registration :</b> '.$_POST['vehicleReg'].'</p>';
    $message .= '<p><b>Approximate value of van at the present (£) :</b> '.$_POST['vanValue'].'</p>';
    $message .= '<p><b>Does the vehicle have any modifications? :</b> '.$_POST['modificationvehicle'].'</p>';
    $message .= '<p><b>Manufacturer :</b> '.$_POST['manufacturer'].'</p>';
    $message .= '<p><b>Van Model :</b> '.$_POST['model'].'</p>';
    $message .= '<p><b>Van Registration Year :</b> '.$_POST['regYear'].'</p>';
    $message .= '<p><b>Alarm - Immobilizer :</b> '.$_POST['alarms'].'</p>';
    $message .= '<p><b>Number Of Seats :</b> '.$_POST['seatNumber'].'</p>';
    $message .= '<p><b>Number Of Doors :</b> '.$_POST['doorNumber'].'</p>';
    $message .= '<p><b>Engine Size (CC) :</b> '.$_POST['engineSize'].'</p>';
    $message .= '<p><b>Transmission :</b> '.$_POST['transmission'].'</p>';
    $message .= '<p><b>Fuel Type  :</b> '.$_POST['fuelType'].'</p>';
    $message .= '<p><b>Body Type :</b> '.$_POST['bodyType'].'</p>';
    $message .= '<p><b>Roof Type :</b> '.$_POST['roofType'].'</p>';
    $message .= '<p><b>Wheel Base :</b> '.$_POST['wheelBase'].'</p>';
    $message .= '<p><b>Is the Vehicle Impounded with the Police? :</b> '.$_POST['impoundedPolice'].'</p>';

    $message .= '<br><br><h2>Vehicle Usage</h2>';
    $message .= '<p><b>Vehicle Purchase Date :</b> '.$_POST['purchaseDate'].'</p>';
    $message .= '<p><b>What do you use the van for? :</b> '.$_POST['useOfVehicle'].'</p>';
    $message .= '<p><b>Where is the vehicle kept during the day? :</b> '.$_POST['duringDay'].'</p>';
    $message .= '<p><b>Where is the vehicle kept during night? :</b> '.$_POST['overnight'].'</p>';
    $message .= '<p><b>Is the vehicle kept at the same address? :</b> '.$_POST['sameAdd'].'</p>';
    $message .= '<p><b>If no, what is the full address where the vehicle is kept :</b> '.$_POST['fullAddr'].'</p>';
    $message .= '<p><b>Who is the Registered Keeper? :</b> '.$_POST['regKeeper'].'</p>';
    $message .= '<p><b>Who is the Registered Owner? :</b> '.$_POST['legalOwner'].'</p>';
    $message .= '<p><b>Estimated Annual Mileage :</b> '.$_POST['annualMileage'].'</p>';
    $message .= '<p><b>Type of Cover :</b> '.$_POST['CoverType'].'</p>';
    $message .= '<p><b>Any no claim discount :</b> '.$_POST['claimsDiscount'].'</p>';
    $message .= '<p><b>Was this NCD earned in the UK? :</b> '.$_POST['NCDearn'].'</p>';
    $message .= '<p><b>Would you like to protect your NCD? :</b> '.$_POST['protectNCD'].'</p>';
    $message .= '<p><b>What voluntary excess would you like? :</b> '.$_POST['excessVoluntary'].'</p>';
    $message .= '<p><b>How do you normally pay for insurance? :</b> '.$_POST['payInsurer'].'</p>';
    $message .= '<p><b>When would you like your policy to start? :</b> '.$_POST['policyStart'].'</p>';

    $message .= '<br><br><h2>Additional Drivers</h2>';
    $message .= '<p><b>Would you like to add an Additional Driver? :</b> '.$_POST['additonalDriver'].'</p>';

    $message .= '<br><h3>Additional Comments</h3>';
    $message .= '<p><small>'.$_POST['addComment'].'</small></p>';
    $message .= '<br><p><b>Terms & Privacy Policy :</b> '.$_POST['agreement'].'</p>';
    $message .= '</body></html>';

    mail($to, $subject, $message, $headers);
}

if (isset($_POST['submitVan'])){
    $to='s.rifat1993@gmail.com';
    $subject='Van Quotation Form';
    $headers="From: gadgetshopbd360@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<h1>Van insurance form, submitted by <span style="color: #3380ff">'.$_POST['firstName'].' '.$_POST['surname'].'</span></h1>';
    $message .= '<p><b>Online or Phone : '.$_POST['online'].'</b></p>';
    $message .= '<p><b>How did you hear about us? :</b> '.$_POST['hearAboutUs'].'</p>';
    $message .= '<p><b>Friend or Family Name :</b> '.$_POST['referrer'].'</p>';
    $message .= '<p><b>Have you or any of the drivers ever had insurance declined, cancelled or special terms imposed? :</b> '.$_POST['declined'].'</p>';
    $message .= '<br><br><h2>Personal Information</h2>';
    $message .= '<p><b>Title :</b> '.$_POST['title'].'</p>';
    $message .= '<p><b>First Name :</b> '.$_POST['firstName'].'</p>';
    $message .= '<p><b>Surname :</b> '.$_POST['surname'].'</p>';
    $message .= '<p><b>Date of Birth :</b> '.$_POST['dateofBirth'].'</p>';
    $message .= '<p><b>House Number / Name :</b> '.$_POST['houseNumber'].'</p>';
    $message .= '<p><b>First Line of Address :</b> '.$_POST['addressFirsLine'].'</p>';
    $message .= '<p><b>Postcode :</b> '.$_POST['postcode'].'</p>';
    $message .= '<p><b>Marital Status :</b> '.$_POST['maritalStatus'].'</p>';
    $message .= '<p><b>Employment Status :</b> '.$_POST['employmentStatus'].'</p>';
    $message .= '<p><b>Employment Occupation :</b> '.$_POST['occupation'].'</p>';
    $message .= '<p><b>Employment Business :</b> '.$_POST['business'].'</p>';
    $message .= '<p><b>Are you a home owner? :</b> '.$_POST['homeOwner'].'</p>';
    $message .= '<p><b>Do you have any children under the age of 16? :</b> '.$_POST['children'].'</p>';
    $message .= '<br><br><h2>Contact Information</h2>';
    $message .= '<p><b>Email :</b> '.$_POST['email'].'</p>';
    $message .= '<p><b>Phone Number :</b> '.$_POST['phone'].'</p>';
    $message .= '<p><b>Mobile Number :</b> '.$_POST['mobile'].'</p>';
    $message .= '<p><b>Please contact me via :</b> '.$_POST['viaContact'].'</p>';
    $message .= '<br><br><h2>Driving History</h2>';
    $message .= '<p><b>Licence Type :</b> '.$_POST['licenceType'].'</p>';
    $message .= '<p><b>Period Licence Held :</b> '.$_POST['licencePeriod'].'</p>';
    $message .= '<p><b>If held for 3 years or less, what date was licence obtained :</b> '.$_POST['licenseDate'].'</p>';
    $message .= '<p><b>Please enter your 16 character driving licence number :</b> '.$_POST['enterLicenceNumber'].'</p>';
    $message .= '<p><b>DVLA medical conditions or disability :</b> '.$_POST['DVLAmedical'].'</p>';
    $message .= '<p><b>Any additional driving qualification :</b> '.$_POST['driverQualifications'].'</p>';
    $message .= '<p><b>If one is selected, what date was qualification obtained :</b> '.$_POST['qualificationDate'].'</p>';
    $message .= '<p><b>Were you born in the UK? :</b> '.$_POST['bornPlace'].'</p>';
    $message .= '<p><b>If no, when did you become resident of the UK? :</b> '.$_POST['residentDate'].'</p>';
    $message .= '<p><b>Use of any other vehicle? :</b> '.$_POST['otherVehicles'].'</p>';
    $message .= '<p><b>Non motoring criminal convictions? :</b> '.$_POST['criminalConvictions'].'</p>';
    $message .= '<p><b>Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years? :</b> '.$_POST['DVLA'].'</p>';
    $message .= '<p><b>Any motor convictions fixed penalties or disqualification in the last 5 years? :</b> '.$_POST['driverDetails'].'</p>';

    if ($_POST['DVLA'] == "Yes"){

    }
    else{
        $message .= '<br><p><b>Motor Accident 1</b></p>';
        $message .= '<p><b>Motor Accident 2</b></p>';
        $message .= '<p><b>Motor Accident 3</b></p>';
        $message .= '<p><b>Motor Accident 4</b></p>';
    }


    $message .= '<br><p><b>Motor Conviction 1</b></p>';
    $message .= '<p><b>Motor Conviction 2</b></p>';
    $message .= '<p><b>Motor Conviction 3</b></p>';
    $message .= '<p><b>Motor Conviction 4</b></p>';
    $message .= '<br><br><h2>Vehicle Details</h2>';
    $message .= '<p><b>Vehicle Registration :</b> '.$_POST['vehicleReg'].'</p>';
    $message .= '<p><b>Approximate value of car at the present (£) :</b> '.$_POST['carValue'].'</p>';
    $message .= '<p><b>Does the vehicle have any modifications? :</b> '.$_POST['modificationvehicle'].'</p>';
    $message .= '<br><br><h2>Vehicle Usage</h2>';
    $message .= '<p><b>Vehicle Purchase Date :</b> '.$_POST['purchaseDate'].'</p>';
    $message .= '<p><b>What do you use the car for? :</b> '.$_POST['useOfVehicle'].'</p>';
    $message .= '<p><b>Where is the vehicle kept during the day? :</b> '.$_POST['duringDay'].'</p>';
    $message .= '<p><b>Where is the vehicle kept during night? :</b> '.$_POST['overnight'].'</p>';
    $message .= '<p><b>Is the vehicle kept at the same address? :</b> '.$_POST['sameAdd'].'</p>';
    $message .= '<p><b>If no, what is the full address where the vehicle is kept :</b> '.$_POST['fullAddr'].'</p>';
    $message .= '<p><b>Who is the Registered Keeper? :</b> '.$_POST['regKeeper'].'</p>';
    $message .= '<p><b>Who is the Registered Owner? :</b> '.$_POST['legalOwner'].'</p>';
    $message .= '<p><b>Estimated Annual Mileage :</b> '.$_POST['annualMileage'].'</p>';
    $message .= '<p><b>Type of Cover :</b> '.$_POST['CoverType'].'</p>';
    $message .= '<p><b>Any no claim discount :</b> '.$_POST['claimsDiscount'].'</p>';
    $message .= '<p><b>Was this NCD earned in the UK? :</b> '.$_POST['NCDearn'].'</p>';
    $message .= '<p><b>Would you like to protect your NCD? :</b> '.$_POST['protectNCD'].'</p>';
    $message .= '<p><b>What voluntary excess would you like? :</b> '.$_POST['excessVoluntary'].'</p>';
    $message .= '<p><b>How do you normally pay for insurance? :</b> '.$_POST['payInsurer'].'</p>';
    $message .= '<p><b>When would you like your policy to start? :</b> '.$_POST['policyStart'].'</p>';
    $message .= '<br><br><h2>Additional Drivers</h2>';
    $message .= '<p><b>Would you like to add an Additional Driver? :</b> '.$_POST['additonalDriver'].'</p>';
    $message .= '<br><h3>Additional Comments</h3>';
    $message .= '<p><small>'.$_POST['addComment'].'</small></p>';
    $message .= '<br><p><b>Terms & Privacy Policy :</b> '.$_POST['agreement'].'</p>';
    $message .= '</body></html>';

    mail($to, $subject, $message, $headers);
}

if(isset($_POST['submitMotor'])){
    $to='s.rifat1993@gmail.com';
    $subject='Motor Trade Quotation Form';
    $headers="From: gadgetshopbd360@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<h1>Motor Trade insurance form, submitted by <span style="color: #3380ff">'.$_POST['firstName'].' '.$_POST['surname'].'</span></h1>';
    $message .= '<p><b>Online or Phone : '.$_POST['online'].'</b></p>';
    $message .= '<p><b>How did you hear about us? :</b> '.$_POST['hearAboutUs'].'</p>';
    $message .= '<p><b>Friend or Family Name :</b> '.$_POST['referrer'].'</p>';
    $message .= '<p><b>Have you or any of the drivers ever had insurance declined, cancelled or special terms imposed? :</b> '.$_POST['declined'].'</p>';
    $message .= '<br><br><h2>Personal Information</h2>';
    $message .= '<p><b>Title :</b> '.$_POST['title'].'</p>';
    $message .= '<p><b>First Name :</b> '.$_POST['firstName'].'</p>';
    $message .= '<p><b>Surname :</b> '.$_POST['surname'].'</p>';
    $message .= '<p><b>Date of Birth :</b> '.$_POST['dateofBirth'].'</p>';
    $message .= '<p><b>House Number / Name :</b> '.$_POST['houseNumber'].'</p>';
    $message .= '<p><b>First Line of Address :</b> '.$_POST['addressFirsLine'].'</p>';
    $message .= '<p><b>Postcode :</b> '.$_POST['postcode'].'</p>';
    $message .= '<p><b>Trading Address (If Different) :</b> '.$_POST['tradingAddr'].'</p>';

    $message .= '<br><br><h2>Contact Information</h2>';
    $message .= '<p><b>Email :</b> '.$_POST['email'].'</p>';
    $message .= '<p><b>Phone Number :</b> '.$_POST['phone'].'</p>';
    $message .= '<p><b>Mobile Number :</b> '.$_POST['mobile'].'</p>';
    $message .= '<p><b>Please contact me via :</b> '.$_POST['viaContact'].'</p>';

    $message .= '<br><br><h2>Driving History</h2>';
    $message .= '<p><b>Licence Type :</b> '.$_POST['licenceType'].'</p>';
    $message .= '<p><b>Period Licence Held :</b> '.$_POST['licencePeriod'].'</p>';
    $message .= '<p><b>If held for 3 years or less, what date was licence obtained :</b> '.$_POST['licenseDate'].'</p>';
    $message .= '<p><b>Please enter your 16 character driving licence number :</b> '.$_POST['enterLicenceNumber'].'</p>';
    $message .= '<p><b>Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years? :</b> '.$_POST['DVLAtop'].'</p>';
    $message .= '<p><b>Any motor convictions fixed penaltist or disqualification in the last 5 years? :</b> '.$_POST['driverDetailstop'].'</p>';
    $message .= '<br><p><b>Motor Accident 1</b></p>';
    $message .= '<p><b>Motor Accident 2</b></p>';
    $message .= '<p><b>Motor Accident 3</b></p>';
    $message .= '<p><b>Motor Accident 4</b></p>';
    $message .= '<br><p><b>Motor Conviction 1</b></p>';
    $message .= '<p><b>Motor Conviction 2</b></p>';
    $message .= '<p><b>Motor Conviction 3</b></p>';
    $message .= '<p><b>Motor Conviction 4</b></p>';

    $message .= '<br><br><h2>Vehicle Details</h2>';
    $message .= '<p><b>Do you do only buying and selling or vehicle recovery as well? :</b> '.$_POST['buySell'].'</p>';
    $message .= '<p><b>Do you do trading from home? :</b> '.$_POST['tradingFromHome'].'</p>';
    $message .= '<p><b>Are you Trading as Limited Company or Sole Trader? :</b> '.$_POST['soleTrader'].'</p>';
    $message .= '<p><b>Do you have a trading name? :</b> '.$_POST['tradingName'].'</p>';
    $message .= '<p><b>Do you have a recovery truck? :</b> '.$_POST['recoveryTruck'].'</p>';
    $message .= '<p><b>If yes, what’s the make & model :</b> '.$_POST['model'].'</p>';
    $message .= '<p><b>Have you ever had a Motor Trade Policy? :</b> '.$_POST['tradePolicyExp'].'</p>';
    $message .= '<p><b>If yes who was your insurer previously :</b> '.$_POST['insurerPrev'].'</p>';
    $message .= '<p><b>Approximately, How Many Cars you Sell in a Month? :</b> '.$_POST['carSell'].'</p>';
    $message .= '<p><b>Vehicle registrations at the Present :</b> '.$_POST['vehicleReg1'].', '.$_POST['vehicleReg2'].', '.$_POST['vehicleReg2'].'</p>';
    $message .= '<p><b>What’s the projected turnover for your business? :</b> '.$_POST['projectedTurnover'].'</p>';
    $message .= '<p><b>How Many Cars do You Keep in your Possession at a time? :</b> '.$_POST['prossessionQTY'].'</p>';
    $message .= '<p><b>Do you keep the car on the road or in the Driveway or Garage? :</b> '.$_POST['keepCar'].'</p>';
    $message .= '<p><b>If you have garage or driveway’ how many cars it can hold at a time? :</b> '.$_POST['garageCarQTY'].'</p>';
    $message .= '<p><b>What’s the maximum individual value of the cars you hold? :</b> '.$_POST['maxValue'].'</p>';
    $message .= '<p><b>Do you require demonstration cover? :</b> '.$_POST['demonstrationCover'].'</p>';
    $message .= '<p><b>What Type of Cover do you Prefer? :</b> '.$_POST['preferableCover'].'</p>';
    $message .= '<p><b>Do you have No Claim Bonus on Motor Trade policy? :</b> '.$_POST['noClaimMotor'].'</p>';
    $message .= '<p><b>Would you like to pay ‘monthly or one off’ for your insurance :</b> '.$_POST['payMonthly'].'</p>';
    $message .= '<p><b>When would you like the policy to start? :</b> '.$_POST['policyStartDate'].'</p>';

    $message .= '<br><br><h2>Additional Drivers</h2>';
    $message .= '<p><b>Would you like to add an Additional Driver? :</b> '.$_POST['additonalDriver'].'</p>';

    $message .= '<br><h3>Additional Comments</h3>';
    $message .= '<p><small>'.$_POST['addComment'].'</small></p>';
    $message .= '<br><p><b>Terms & Privacy Policy :</b> '.$_POST['agreement'].'</p>';
    $message .= '</body></html>';

    mail($to, $subject, $message, $headers);
}

?>







<!-- Submission Page -->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    
    
    <!-- Font  -->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/style.css" type="text/css">


      <link rel="shortcut icon" type="image/png" href="../img/fav.png">
      <title>Broad Insure | Thank You</title>
  </head>
<body>

<!-------- Navbar & Carousel -------->
<section class="head-text">
    <div class="container">
        <div class="nav-header pb-2">
            <div class="row">
                <div class="col-md-3">
                    <a class="" href="../index.html" style="text-decoration: none;">
                        <img src="../img/logo.png" width="400px" height="148px" class="img-fluid d-inline-block" alt="Logo" style="margin-top: 15px;">
                        <!--<p style="padding-left: 10px; color: white; font-family: Georgia; font-weight: bold; font-size: 16px; letter-spacing: 6px;">Price &nbsp;&nbsp; Searcher</p>-->
                    </a>
                </div>
                <div class="col-md-9 mt-4">
                    <div class="row">
                        <div class="offset-md-6 pt-2">
                            <div class="font-weight-bold">
                                <div class="d-flex justify-content-end" style="font-size: 20px">
                                    <span class="pr-2 text-primary" style="cursor: default;">CALL US:</span>
                                    <span class="text-dark"><a href="tel:0330 113 0505" style="text-decoration: none;">0330 113 0505 <i class="fas fa-phone"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <div class="pl-2 pt-3">
                            <h6 style="color: white; font-family: 'Comic Sans MS'; cursor: default">Independent Price Searcher To Compare Your Quotes</h6>
                        </div>
                        <div class="offset-md-3 pt-3">
                            <div class="number pl-5" style="margin-left: 45px;">
                                <ul class="list-unstyled d-flex">
                                    <li><a class="pr-2" href=""> <i class="fab fa-facebook-square fa-2x"></i></a></li>

                                    <li><a class="pr-2" href=""><i class="fab fa-twitter-square fa-2x"></i></a></li>

                                    <li><a  href=""> <i class="fab fa-linkedin fa-2x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sm-header" style="background-color: #072760; color: white;">
    <div class="container">
        <div class="nav-header-sm d-flex justify-content-between">
            <div class="pt-1">
                <span class="text-dark"><a href="tel:0330 113 0505" style="text-decoration: none; color: #fff;">0330 113 0505 <i class="fas fa-phone"></i></a></span>
            </div>
            <div>
                <ul class="list-unstyled d-flex">
                    <li><a class="pr-2" href=""> <i class="fab fa-facebook-square fa-2x"></i></a></li>

                    <li><a class="pr-2" href=""><i class="fab fa-twitter-square fa-2x"></i></a></li>

                    <li><a  href=""> <i class="fab fa-linkedin fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<nav class="navbar-custom navbar navbar-expand-lg bg-warning navbar-dark sticky-top font">
    <div class="container">
        <button class="navbar-toggler mb-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../about_us.html">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="insurances" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Insurances
                        <i class="fas fa-angle-down menu-down-icon"></i>
                    </a>
                    <div class="dropdown-menu text-dark" aria-labelledby="insurances">
                        <a class="dropdown-item" href="../insurances/car_insurance.html">Car Insurance</a>
                        <a class="dropdown-item" href="../insurances/van_insurance.html">Van Insurance</a>
                        <a class="dropdown-item" href="../insurances/motor_trade.html">Motor Trade</a>
                        <a class="dropdown-item" href="../insurances/business_insurance.html">Business Insurance</a>
                        <a class="dropdown-item" href="../insurances/home_insurance.html">Home Insurance</a>
                        <a class="dropdown-item" href="../insurances/accident_management.html">Accident Management</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quotation Form
                        <i class="fas fa-angle-down menu-down-icon"></i>
                    </a>
                    <div class="dropdown-menu text-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="car_insurance_quotation_form.html">Car Insurance Quotation Form</a>
                        <a class="dropdown-item" href="van_insurance_quotation_form.html">Van Insurance Quotation Form</a>
                        <a class="dropdown-item" href="motor_trade_quotation_form.html">Motor Trade Quotation Form</a>
                        <a class="dropdown-item" href="business_insurance_quotation_form.html">Business Insurance Quotation Form</a>
                        <a class="dropdown-item" href="home_insurance_quotation_form.html">Home Insurance Quotation Form</a>
                        <a class="dropdown-item" href="accident_management_quotation_form.html">Accident Management Form</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../contact_us.html">Contact Us</a>
                </li>
            </ul>
        </div>
        <a class="img" href=""> <img src="../img/logo.png"  alt="company logo" height="20%" width="100px"></a>
    </div>
</nav>

<div aria-label="breadcrumb" class="breadcrumb-div">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thank You</li>
      </ol>
    </div>
  
</div>

<!-------- Car Insurance Form Starts-------->
<section>
    <div class="container" style="background-color: #f2f2f2">
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h3><span style="color: #0071bc">You Have Successfully Submitted The Quotation Form !</span></h3><br>
                    <h4>This Information Has been Passed Over To One Of Our Consultants.</h4><br>
                    <h4>Now Please Expect A Call From Us Within 24 Hours.</h4><br>
                    <h4>We Will Compare How Much We Can Save For You.</h4><br>
                    <h4><span style="color: orangered">Thank You</span></h4>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 com-sm-12">
                <img src="../img/brand-logo.png" alt="" class="img-fluid">
                <img src="../img/kinder.jpg" alt="" width="25%" height="15%" style="margin-top: -50px; margin-left: 90px; border-radius: 2px;" class="img-fluid">
            </div>
            <div class="col-md-3 com-sm-12">
                <h5>INSURANCE PRODUCTS</h5>
                <ul class="list-unstyled">
                    <li><a href="../insurances/car_insurance.html">Car Insurance</a></li>
                    <li><a href="../insurances/van_insurance.html">Van Insurance</a></li>
                    <li><a href="../insurances/motor_trade.html">Motor Trade</a></li>
                    <li><a href="../insurances/business_insurance.html">Business Insurance</a></li>
                    <li><a href="../insurances/home_insurance.html">Home Insurance</a></li>
                    <li><a href="../insurances/accident_management.html">Accident Management</a></li>
                </ul>
            </div>
            <div class="col-md-3 com-sm-12">
                <h5>FILL OUR INSURANCE FORMS</h5>
                <ul class="list-unstyled">
                    <li><a href="car_insurance_quotation_form.html">Car Insurance Quotation Form</a></li>
                    <li><a href="van_insurance_quotation_form.html">Van Insurance Quotation Form</a></li>
                    <li><a href="motor_trade_quotation_form.html">Motor Trade Quotation Form</a></li>
                    <li><a href="business_insurance_quotation_form.html">Business Insurance Quotation Form</a></li>
                    <li><a href="home_insurance_quotation_form.html">Home Insurance Quotation Form</a></li>
                    <li><a href="accident_management_quotation_form.html">Accident Management Form</a></li>
                </ul>
            </div>
            <div class="col-md-3 com-sm-12">
                <h5>CONTACT INFORMATION</h5>
                <address style="font-size: 16px; font-weight: 300; line-height: 1.5em;">
                    SUIT F5, WESTWOOD BUSINESS CENTRE,
                    <br>
                    REGENCY HOUSE, WESTWOOD ROAD,
                    <br>
                    LONDON, IG3 8SB.
                </address>
            </div>


        </div>

        <div class="footer-text" style="margin-top: 10px;">
            <span style="font-weight: bold">
                BROAD INSURE LIMITED (TRADING AS BROAD SEARCHER) DO NOT ENGAGE IN ANY REGULATORY ACTIVITIES HOWEVER, REGISTERED IN ENGLAND & WALES,
                COMPANY NUMBER: 10833649, REGISTERED OFFICE: SUIT F5, WESTWOOD BUSINESS CENTRE, REGENCY HOUSE, WESTWOOD ROAD, LONDON, IG3 8SB. BROAD
                INSURE LIMITED IS REGISTERED WITH THE INFORMATION COMMISSIONER'S OFFICE (REGISTRATION NUMBER: ZA263319) AS WELL AS GDPR COMPLIANT,
                AUTHORISED TO PROCESS PERSONAL DATA UNDER DATA PROTECTION ACT & GDPR 2018.
            </span>
        </div>

        <div class="footer-bottom" style="margin-top: 10px;">
            <div class="nav-header pb-2">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <ul class="list-unstyled text-light pt-4">
                            <li>
                                <a href="../terms_conditons.html">
                                    Terms & Conditions
                                </a>|
                                <a href="../privacy_policy.html">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                          <span>
                              Copyright ©
                              <script type="text/javascript">
                                  document.write(new Date().getFullYear());
                              </script>
                              Broad Price Searcher <br> All Rights Reserved
                          </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12 pt-4">
                        <div class="number">
                            <div class="d-flex justify-content-end font-weight-bold">
                                <span class="pr-4 text-primary">CALL US:</span>
                                <span class=""><a href="tel:0330 113 0505" style="text-decoration: none">0330 113 0505 <i class="fas fa-phone"></i></a></span>
                            </div>
                            <div class="d-flex justify-content-end">
                           <span style="font-size: 12px">
                               YOU CAN RING US <br>FROM 9AM - 6PM <br>(MONDAY - SATURDAY)
                           </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 pt-4" style="text-align: center">
                        <div class="link">
                            <ul class="list-unstyled d-flex justify-content-end">
                                <li><a class="pr-2" href=""> <i class="fab fa-facebook-square fa-2x"></i></a></li>

                                <li><a class="pr-2" href=""><i class="fab fa-twitter-square fa-2x"></i></a></li>

                                <li><a  href=""> <i class="fab fa-linkedin fa-2x"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</footer>

<a id="gotopbtn" href="#"><i class="fas fa-angle-up" style="color: #3d3d3d;"></i></a>
   
   
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/main.js"></script>

    <script>
        $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
        });
        
    </script>

  </body>
</html>