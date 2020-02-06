<!DOCTYPE html>
<html>

<head>
    <title>Broad Insure | Car Quote</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="\css\style.css">
    <link rel="icon" href="/images/logo2.png">
    <script src="https://use.fontawesome.com/2bffac70a4.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/index.php"><img class="img-fluid d-block align-self-center align-items-center w-40" src="/images/logo2.png"></a> </div>
            <div class="col-md-6 text-right">
            </div>

        </div>
    </div>
</div>
<nav class="navbar navbar-expand-md sticky-top bg-dark navbar-dark text-left">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-right text-center text-uppercase mr-auto px-5">
                <li class="Car_insurance_Thank_You.php">
                    <a class="nav-link" href="/index.php">Home<br> </a>
                </li>

                <li class="nav-item text-center text-uppercase px-3">
                    <a class="nav-link" href="/about.php">about us</a>
                </li>

                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Information</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-uppercase text-center" href="/accident-management-insurance.php">Car Quotes</a>
                        <a class="dropdown-item text-uppercase text-center" href="/van-insurance.php">Van Quotes</a>
                </li>
                <li class="nav-item dropdown px-3">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Quotation Forms</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-center text-uppercase active" href="Car-insurance-quote.html">Car</a>
                        <a class="dropdown-item text-center text-uppercase" href="/Van-Insurance/Van-insurance-quote.html">Van</a>

                        <a class="dropdown-item text-center text-uppercase" href="/Accident-Management/Accident-Management-insurance-quote.html">Accident Management Assistance</a>
                        <a class="dropdown-item text-center text-uppercase" href="/temp.php">Motor Trading </a>
                    </div>
                </li>


                <a class="btn btn-light navbar-btn text-uppercase text-dark text-center" data-toggle="" target="_blank" href="tel:03301132101">Call Us on:&nbsp;0330 113 0505</a>
            </ul>
        </div>
    </div>
</nav>


<div style="height: 250px;" class="bg-orange text-center">
    <h1 class="display-3">Get Car Quotes!</h1>
</div>

<div class="container" style="margin-top: 20px;">
    <div class="row col-md-12">
        <div class="col-md-3">
            <div class=" text-center" id="Car-insurance-progress-bar-1" style="width: 100%; padding-top: 12.5px; height: 50px; background-color: dodgerblue; color: white;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Personal Information</div>
        </div>
        <div class="col-md-3">
            <div class=" text-center" id="Car-insurance-progress-bar-2" style="width: 100%; padding-top: 12.5px; height: 50px; background-color: lightgrey;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Driving Information</div>
        </div>
        <div class="col-md-3">
            <div class=" text-center" id="Car-insurance-progress-bar-3" style="width: 100%; padding-top: 12.5px; height: 50px; background-color: lightgrey;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Vehicle Information</div>
        </div>
        <div class="col-md-3">
            <div class=" text-center" id="Car-insurance-progress-bar-4" style="width: 100%; padding-top: 12.5px; height: 50px; background-color: lightgrey;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Named Drivers</div>
        </div>
    </div>
</div>


<div class="container-fluid text-center" style="height: 100%; padding-top: 60px; padding-bottom: 20px;">
    <h4 style="color:dodgerblue;">Please ensure the information you give here is accurate or to the best of your knowledge</h4>
</div>

<div class="container" style="margin-top: 20px;">
    <form action="Car_insurance_Thank_You.php" onsubmit="return validateForm()" name="Car_Insurance_Form"  method="post" novalidate>
        <!--STEP1---------------------------------------------------->
        <div id="Step1" style="display: block;">
            <div class="row">
                <div class="my-4 col-md-6">
                    <div class="form-group">
                        <div class="btn-group form-group text-left">
                            <select name="Online_Offline" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option class="dropdown-item" value="Online">Online</option>
                                <option class="dropdown-item" value="Phone">Phone</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"> <label>How did you hear about us?</label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="How_Did_You_Hear" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option class="dropdown-item" value="">- Please select -</option>
                                <option class="dropdown-item" value="Walk in">Walk in</option>
                                <option class="dropdown-item" value="Word of Mouth">Word of Mouth</option>
                                <option class="dropdown-item" value="Leaflet">Leaflet</option>
                                <option class="dropdown-item" value="Existing Customer">Existing Customer</option>
                                <option class="dropdown-item" value="Family and Friends">Family and Friends</option>
                                <option class="dropdown-item" value="Email/Newsletter">Email/Newsletter</option>
                                <option class="dropdown-item" value="T.V Advertisement">T.V Advertisement</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>If by a friend family or referer please state their name</label>
                        <input type="text" name="Friend_Family_Referer" class="form-control" placeholder="Name of Friend, Family member or referer.">
                    </div>

                    <div class="form-group">
                        <label>Have you or any of the drivers ever had insurance declined, cancelled or special terms imposed?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <div class="btn-group form-group text-left">
                            <select id="insuranceDeclined" name="Insurance_Declined" required class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Yes" class="dropdown-item">Yes</option>
                                <option value="No" class="dropdown-item">No</option>
                            </select>
                        </div>
                    </div>
                    <div id="lastinsurer" style="display:none;">
                        <div class="form-group">
                            <label>What was the insurer?</label>
                            <input type="text" name="Insurer_Name" class="form-control" placeholder="Insurer Name">
                        </div>
                    </div>
                    <br>
                    <h3>Personal Information</h3>
                    <p><small>"Registered with the ICO,compliant with GDPR-all your personal information is protected under the Data Protection Act 1998"</small></p>
                    <br>
                    <div class="form-group"> <label>Title<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="PersonalTitle" name="Personal_Title" required class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Mr" class="dropdown-item">Mr</option>
                                <option value="Mrs" class="dropdown-item">Mrs</option>
                                <option value="Ms" class="dropdown-item">Ms</option>
                                <option value="Miss" class="dropdown-item">Miss</option>
                                <option value="Dr (Male)" class="dropdown-item">Dr (Male)</option>
                                <option value="Dr (Female)" class="dropdown-item">Dr (Female)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"><label>First Name<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <input required type="text" name="Personal_First_Name" id="PersonalFirstName" class="form-control" placeholder="First Name"> </div>
                    <div class="form-group"><label>Your Surname<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <input required type="text" name="Personal_Surname" id="PersonalSurname" class="form-control" placeholder="Your Surname"> </div>
                    <div class="form-group"><label>Your Date of Birth<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <input required type="text" name="Personal_DOB" id="PersonalDOB" class="form-control"> </div>
                    <div class="form-group"><label>Your House Number/Name<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <input required type="text" name="Personal_HouseNumber_Name" id="PersonalHouseNumberName" class="form-control" placeholder="Your House Number / Name"> </div>
                    <div class="form-group"><label>Your First Line of Address<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <input required type="textarea" name="Personal_First_Line_Address" id="PersonalFirstLineofAddress" class="form-control" placeholder="First Line of Address"> </div>
                    <div class="form-group"><label>Your Postcode<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <input required type="text" name="Personal_Postcode" id="PersonalPostcode" class="form-control" placeholder="Your Postcode"> </div>
                    <div class="form-group"> <label>Marital Status<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Personal_Marital_Status" id="PersonalMaritalStatus" required class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item" value="">- Please select -</option>
                                <option value="Single" class="dropdown-item">Single</option>
                                <option value="Married" class="dropdown-item">Married</option>
                                <option value="Civil Partnership" class="dropdown-item">Civil Partnership</option>
                                <option value="Cohabiting" class="dropdown-item">Cohabiting</option>
                                <option value="Divorced" class="dropdown-item">Divorced</option>
                                <option value="Seperated" class="dropdown-item">Seperated</option>
                                <option value="Widowed" class="dropdown-item">Widowed</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Employment Status<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="PersonalEmploymentStatus" name="Personal_Employment_Status" required class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item" value="">- Please select -</option>
                                <option value="Employed" class="dropdown-item">Employed</option>
                                <option value="Unemployed" class="dropdown-item">Unemployed</option>
                                <option value="Self-employed" class="dropdown-item">Self-employed</option>
                                <option value="House Person" class="dropdown-item">House Person</option>
                                <option value="Education" class="dropdown-item">Education</option>
                                <option value="Retired" class="dropdown-item">Retired</option>
                                <option value="Not Employed due to illness /disability" class="dropdown-item">Not Employed due to illness /disability</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>If employed/Self-employed, what is your occupation</label>
                        <input type="text" name="If_Employed_Self_Occupation" class="form-control" placeholder="Occupation">
                    </div>

                    <div class="form-group">
                        <label>If employed/self-employed, what type of business</label>
                        <input type="text" name="If_Employed_Self_Business" class="form-control" placeholder="Industry/business type">
                    </div>

                    <div class="form-group">
                        <label>Are you a Home Owner?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="AreYouAHomeOwner" name="Personal_Home_Owner" required class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="" class="dropdown-item" value="">- Please select -</option>
                                <option value="Yes" class="dropdown-item">Yes</option>
                                <option value="No" class="dropdown-item">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Do you have any children under the age of 16?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="ChildrenUnderAgeOf16" name="Children_Under_16" required class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option class="dropdown-item" value="">- Please select -</option>
                                <option value="Yes" class="dropdown-item">Yes</option>
                                <option value="No" class="dropdown-item">No</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <h3>Contact Information</h3>
                    <br>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="Personal_Email" id="YourEmail" class="form-control" placeholder="Your Email Address">
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="Personal_Phone_Number" id="YourPhoneNumber" class="form-control" placeholder="Your Phone Number">
                    </div>

                    <div class="form-group">
                        <label>Mobile Number<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <input required type="text" name="Personal_Mobile_Number" id="YourMobileNumber" class="form-control" placeholder="Your Mobile Number">
                    </div>
                    <p style="color:red;" id="ValMessage1"></p>
                    <button class="btn btn-orange btn-block" type="button" onclick="nextStep1();">Next</button>
                </div>
            </div>
        </div>

        <!--STEP2----------------------------------------------------->
        <div id="Step2" style="display: none;">
            <div class="row">
                <div class="col-md-6 my-4">
                    <h3>Driving History</h3>
                    <br>
                    <div class="form-group">
                        <label>Type of Licence<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select required id="PersonalTypeOfLicence" name="Personal_Type_Licence" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item" value="">- Please select -</option>
                                <option value="Full UK Manual" class="dropdown-item">Full UK Manual</option>
                                <option value="Full UK Automatic" class="dropdown-item">Full UK Automatic</option>
                                <option value="UK Provisional" class="dropdown-item">UK Provisional</option>
                                <option value="Full Euro EEC" class="dropdown-item">Full Euro EEC</option>
                                <option value="Provisional EEC" class="dropdown-item">Provisional EEC</option>
                                <option value="Other International" class="dropdown-item">Other International</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Period Licence held for<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="PersonalPeriodLicenceHeldFor" name="Personal_Period_Licence_Held" required class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item" value="">- Please select -</option>
                                <option value="Less Than a Year" class="dropdown-item">Less than a year</option>
                                <option value="1 Year" class="dropdown-item">1 Year</option>
                                <option value="2 Years" class="dropdown-item">2 Years</option>
                                <option value="3 Years" class="dropdown-item">3 Years</option>
                                <option value="4 Years" class="dropdown-item">4 Years</option>
                                <option value="5 Years" class="dropdown-item">5 Years</option>
                                <option value="6 Years" class="dropdown-item">6 Years</option>
                                <option value="7 Years" class="dropdown-item">7 Years</option>
                                <option value="8 Years" class="dropdown-item">8 Years</option>
                                <option value="9 Years" class="dropdown-item">9 Years</option>
                                <option value="10 Years" class="dropdown-item">10 Years</option>
                                <option value="11 Years" class="dropdown-item">11 Years</option>
                                <option value="12 Years" class="dropdown-item">12 Years</option>
                                <option value="13 Years" class="dropdown-item">13 Years</option>
                                <option value="14 Years" class="dropdown-item">14 Years</option>
                                <option value="15+ Years" class="dropdown-item">15+ Years</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>if less than 3 years, what date was licence obtained?</label>
                        <input type="text" name="Personal_If_Less_3_Years_Date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Please enter your 16 character driving licence number</label>
                        <input type="text" name="Personal_16_Character_Driving_Number" class="form-control" placeholder="16 character driving licence number" maxlength="16">
                    </div>

                    <div class="form-group">
                        <label>DVLA medical conditions or disability<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="DVLAMedicalConditionsOrDisability" name="Personal_DVLA_Medical_Conditions_Disability" required class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item" value="">- Please select -</option>
                                <option value="No" class="dropdown-item">No</option>
                                <option value="DVLA aware - No restrictions" class="dropdown-item">DVLA aware - No restrictions</option>
                                <option value="DVLA aware - 1 year restricted License" class="dropdown-item">DVLA aware - 1 year restricted License</option>
                                <option value="DVLA aware - 2 years restricted License" class="dropdown-item">DVLA aware - 2 years restricted License</option>
                                <option value="DVLA aware - 3 years restricted License" class="dropdown-item">DVLA aware - 3 years restricted License</option>
                                <option value="DVLA aware - unaware" class="dropdown-item">DVLA aware - unaware</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Any additional driving qualification</label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="AdditionalDrivingQualification" name="Personal_Additional_Driving_Qualification" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item" value="">- Please select -</option>
                                <option value="No" class="dropdown-item">No</option>
                                <option value="AA Proficiency" class="dropdown-item">AA Proficiency</option>
                                <option value="Institute of advance motorists" class="dropdown-item">Institute of advance motorists</option>
                                <option value="Pass Plus" class="dropdown-item">Pass Plus</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>if one is selected, what date was qualification obtained</label>
                        <input type="text" name="Personal_Additional_Qualification_Date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Were you born in the UK?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="WereYouBornInUK" name="Personal_Born_In_UK" required class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Yes" class="dropdown-item">Yes</option>
                                <option value="No" class="dropdown-item">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>if no, when did you become resident of Uk</label>
                        <input type="text" name="Personal_Resident_Of_UK" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Use of any other vehicle?</label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="UseOfAnyOtherVehicle" name="Personal_Use_Of_Other_Vehicle" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="No access to any other vehicle" class="dropdown-item">No access to any other vehicle</option>
                                <option value="Own another van or car" class="dropdown-item">Own another van or car</option>
                                <option value="Named driver on other van or car" class="dropdown-item">Named driver on other van or car</option>
                                <option value="Have use of another car" class="dropdown-item">Have use of another car</option>
                                <option value="Company car (including personal use)" class="dropdown-item">Company car (including personal use)</option>
                                <option value="Company car (excluding personal use)" class="dropdown-item">Company car (excluding personal use)</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="motoraccidentclaim5years" name="Personal_Motor_Accident_5_Years" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="" class="dropdown-item">- Please select -</option>
                                <option value="Yes" class="dropdown-item">Yes</option>
                                <option value="No" class="dropdown-item">No</option>
                            </select>
                        </div>
                    </div>
                    <div id="MotorAccidentorClaimDetails1" style="display: none;">
                        <div class="bg-dark" style="color: white;">
                            <div style="padding: 10px;">
                                <h6>1</h6>
                                <div class="form-group">
                                    <label>Type</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Accident_Claim_Detail_Type_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Accident">Accident</option>
                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" name="Personal_Date_Accident_1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Damage</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Damage_Accident_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Cost(£) - if known:</label>
                                    <input type="text" name="Personal_Cost_Accident_1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Fault</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Fault_Accident_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                            <option class="dropdown-item" value="Other party">Other party</option>
                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="addanother1">
                                    <a onclick="addanothermotoraccidentclaimdetail1();">
                                        <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="MotorAccidentorClaimDetails2" style="display: none;">
                        <div class="bg-dark" style="color: white;">
                            <div style="margin: 10px; padding-top: 10px; padding-bottom: 10px;">
                                <h6>2</h6>
                                <div class="form-group">
                                    <label>Type</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Accident_Claim_Detail_Type_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Accident">Accident</option>
                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input name="Personal_Date_Accident_2" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Damage</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Damage_Accident_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Cost(£) - if known:</label>
                                    <input name="Personal_Cost_Accident_2" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Fault</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Fault_Accident_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                            <option class="dropdown-item" value="Other party">Other party</option>
                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="addanother2">
                                    <a onclick="        document.getElementById('addanother2').style.display='none';
        document.getElementById('MotorAccidentorClaimDetails3').style.display='block';">
                                        <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="MotorAccidentorClaimDetails3" style="display: none;">
                        <div class="bg-dark" style="color: white;">
                            <div style="margin: 10px; padding-top: 10px; padding-bottom: 10px;">
                                <h6>3</h6>
                                <div class="form-group">
                                    <label>Type</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Accident_Claim_Detail_Type_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Accident">Accident</option>
                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input name="Personal_Date_Accident_3" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Damage</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Damage_Accident_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Cost(£) - if known:</label>
                                    <input name="Personal_Cost_Accident_3" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Fault</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Fault_Accident_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                            <option class="dropdown-item" value="Other party">Other party</option>
                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="addanother3">
                                    <a onclick="        document.getElementById('addanother3').style.display='none';
        document.getElementById('MotorAccidentorClaimDetails4').style.display='block';">
                                        <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="MotorAccidentorClaimDetails4" style="display: none;">
                        <div class="bg-dark" style="color: white;">
                            <div style="margin: 10px; padding-top: 10px; padding-bottom: 10px;">
                                <h6>4</h6>
                                <div class="form-group">
                                    <label>Type</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Accident_Claim_Detail_Type_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Accident">Accident</option>
                                            <option class="dropdown-item" value="Explosion">Explosion</option>
                                            <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                            <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                            <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                            <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                            <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                            <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                            <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                            <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                            <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                            <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                            <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input name="Personal_Date_Accident_4" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Damage</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Damage_Accident_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                            <option class="dropdown-item" value="No Damage">No Damage</option>
                                            <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Cost(£) - if known:</label>
                                    <input name="Personal_Cost_Accident_4" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Fault</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Fault_Accident_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="Both parties">Both parties</option>
                                            <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                            <option class="dropdown-item" value="Other party">Other party</option>
                                            <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                            <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="padding-top: 10px;">
                        <label>Any motor convictions fixed penalitst or disqualification in the last 5 years?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Personal_Motor_Conviction_5_Years" id="motorconvictionsclaim5years" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option class="dropdown-item" value="">- Please select -</option>
                                <option class="dropdown-item" value="Yes">Yes</option>
                                <option class="dropdown-item" value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div id="MotorConviction1" style="display: none;">
                        <div class="bg-dark" style="color: white;">
                            <div style="padding: 10px;">
                                <h6>1</h6>
                                <div class="form-group">
                                    <label>Conviction Code</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Conviction_Code_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item">- Please select -</option>
                                            <option class="dropdown-item" value="AC10">AC10</option>
                                            <option class="dropdown-item" value="AC20">AC20</option>
                                            <option class="dropdown-item" value="AC30">AC30</option>
                                            <option class="dropdown-item" value="AC99">AC99</option>
                                            <option class="dropdown-item" value="BA10">BA10</option>
                                            <option class="dropdown-item" value="BA20">BA20</option>
                                            <option class="dropdown-item" value="BA30">BA30</option>
                                            <option class="dropdown-item" value="BA99">BA99</option>
                                            <option class="dropdown-item" value="CD10">CD10</option>
                                            <option class="dropdown-item" value="CD20">CD20</option>
                                            <option class="dropdown-item" value="CD30">CD30</option>
                                            <option class="dropdown-item" value="CD40">CD40</option>
                                            <option class="dropdown-item" value="CD50">CD50</option>
                                            <option class="dropdown-item" value="CD60">CD60</option>
                                            <option class="dropdown-item" value="CD70">CD70</option>
                                            <option class="dropdown-item" value="CD80">CD80</option>
                                            <option class="dropdown-item" value="CD90">CD90</option>
                                            <option class="dropdown-item" value="CD99">CD99</option>
                                            <option class="dropdown-item" value="CU10">CU10</option>
                                            <option class="dropdown-item" value="CU20">CU20</option>
                                            <option class="dropdown-item" value="CU30">CU30</option>
                                            <option class="dropdown-item" value="CU40">CU40</option>
                                            <option class="dropdown-item" value="CU50">CU50</option>
                                            <option class="dropdown-item" value="CU60">CU60</option>
                                            <option class="dropdown-item" value="CU80">CU80</option>
                                            <option class="dropdown-item" value="DD10">DD10</option>
                                            <option class="dropdown-item" value="DD20">DD20</option>
                                            <option class="dropdown-item" value="DD30">DD30</option>
                                            <option class="dropdown-item" value="DD40">DD40</option>
                                            <option class="dropdown-item" value="DD50">DD50</option>
                                            <option class="dropdown-item" value="DD60">DD60</option>
                                            <option class="dropdown-item" value="DD70">DD70</option>
                                            <option class="dropdown-item" value="DD80">DD80</option>
                                            <option class="dropdown-item" value="DD90">DD90</option>
                                            <option class="dropdown-item" value="DR10">DR10</option>
                                            <option class="dropdown-item" value="DR20">DR20</option>
                                            <option class="dropdown-item" value="DR30">DR30</option>
                                            <option class="dropdown-item" value="DR40">DR40</option>
                                            <option class="dropdown-item" value="DR50">DR50</option>
                                            <option class="dropdown-item" value="DR60">DR60</option>
                                            <option class="dropdown-item" value="DR70">DR70</option>
                                            <option class="dropdown-item" value="DR80">DR80</option>
                                            <option class="dropdown-item" value="DR90">DR90</option>
                                            <option class="dropdown-item" value="IN10">IN10</option>
                                            <option class="dropdown-item" value="LC10">LC10</option>
                                            <option class="dropdown-item" value="LC20">LC20</option>
                                            <option class="dropdown-item" value="LC30">LC30</option>
                                            <option class="dropdown-item" value="LC40">LC40</option>
                                            <option class="dropdown-item" value="LC50">LC50</option>
                                            <option class="dropdown-item" value="MS10">MS10</option>
                                            <option class="dropdown-item" value="MS20">MS20</option>
                                            <option class="dropdown-item" value="MS30">MS30</option>
                                            <option class="dropdown-item" value="MS40">MS40</option>
                                            <option class="dropdown-item" value="MS50">MS50</option>
                                            <option class="dropdown-item" value="MS60">MS60</option>
                                            <option class="dropdown-item" value="MS70">MS70</option>
                                            <option class="dropdown-item" value="MS80">MS80</option>
                                            <option class="dropdown-item" value="MS90">MS90</option>
                                            <option class="dropdown-item" value="MS99">MS99</option>
                                            <option class="dropdown-item" value="MW10">MW10</option>
                                            <option class="dropdown-item" value="PC10">PC10</option>
                                            <option class="dropdown-item" value="PC20">PC20</option>
                                            <option class="dropdown-item" value="PC30">PC30</option>
                                            <option class="dropdown-item" value="PL20">PL20</option>
                                            <option class="dropdown-item" value="PL30">PL30</option>
                                            <option class="dropdown-item" value="PL40">PL40</option>
                                            <option class="dropdown-item" value="PL50">PL50</option>
                                            <option class="dropdown-item" value="SP10">SP10</option>
                                            <option class="dropdown-item" value="SP20">SP20</option>
                                            <option class="dropdown-item" value="SP30">SP30</option>
                                            <option class="dropdown-item" value="SP40">SP40</option>
                                            <option class="dropdown-item" value="SP50">SP50</option>
                                            <option class="dropdown-item" value="SP60">SP60</option>
                                            <option class="dropdown-item" value="TS10">TS10</option>
                                            <option class="dropdown-item" value="TS20">TS20</option>
                                            <option class="dropdown-item" value="TS30">TS30</option>
                                            <option class="dropdown-item" value="TS40">TS40</option>
                                            <option class="dropdown-item" value="TS50">TS50</option>
                                            <option class="dropdown-item" value="TS60">TS60</option>
                                            <option class="dropdown-item" value="TS70">TS70</option>
                                            <option class="dropdown-item" value="TT99">TT99</option>
                                            <option class="dropdown-item" value="UT10">UT10</option>
                                            <option class="dropdown-item" value="UT20">UT20</option>
                                            <option class="dropdown-item" value="UT30">UT30</option>
                                            <option class="dropdown-item" value="UT40">UT40</option>
                                            <option class="dropdown-item" value="UT50">UT50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date Of Conviction</label>
                                    <input name="Personal_Conviction_Date_1" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Points</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Conviction_Points_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="None">None</option>
                                            <option class="dropdown-item" value="1">1</option>
                                            <option class="dropdown-item" value="2">2</option>
                                            <option class="dropdown-item" value="3">3</option>
                                            <option class="dropdown-item" value="4">4</option>
                                            <option class="dropdown-item" value="5">5</option>
                                            <option class="dropdown-item" value="6">6</option>
                                            <option class="dropdown-item" value="7">7</option>
                                            <option class="dropdown-item" value="8">8</option>
                                            <option class="dropdown-item" value="9">9</option>
                                            <option class="dropdown-item" value="10">10</option>
                                            <option class="dropdown-item" value="11">11</option>
                                            <option class="dropdown-item" value="12">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Fine(£) - if any:</label>
                                    <input name="Personal_Conviction_Fine_1" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ban(months) - if any:</label>
                                    <input name="Personal_Conviction_Ban_1" type="text" class="form-control">
                                </div>
                                <div id="addanotherconviction" style="display:block;">
                                    <a onclick="addanothermotorConvictionList();">
                                        <h6><span class="fa fa-plus"></span>Additional Conviction</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="MotorConviction2" style="display: none;">
                        <div class="bg-dark" style="color: white;">
                            <div style="padding: 10px; margin-top: 10px;">
                                <h6>2</h6>
                                <div class="form-group">
                                    <label>Conviction Code</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Conviction_Code_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item">- Please select -</option>
                                            <option class="dropdown-item" value="AC10">AC10</option>
                                            <option class="dropdown-item" value="AC20">AC20</option>
                                            <option class="dropdown-item" value="AC30">AC30</option>
                                            <option class="dropdown-item" value="AC99">AC99</option>
                                            <option class="dropdown-item" value="BA10">BA10</option>
                                            <option class="dropdown-item" value="BA20">BA20</option>
                                            <option class="dropdown-item" value="BA30">BA30</option>
                                            <option class="dropdown-item" value="BA99">BA99</option>
                                            <option class="dropdown-item" value="CD10">CD10</option>
                                            <option class="dropdown-item" value="CD20">CD20</option>
                                            <option class="dropdown-item" value="CD30">CD30</option>
                                            <option class="dropdown-item" value="CD40">CD40</option>
                                            <option class="dropdown-item" value="CD50">CD50</option>
                                            <option class="dropdown-item" value="CD60">CD60</option>
                                            <option class="dropdown-item" value="CD70">CD70</option>
                                            <option class="dropdown-item" value="CD80">CD80</option>
                                            <option class="dropdown-item" value="CD90">CD90</option>
                                            <option class="dropdown-item" value="CD99">CD99</option>
                                            <option class="dropdown-item" value="CU10">CU10</option>
                                            <option class="dropdown-item" value="CU20">CU20</option>
                                            <option class="dropdown-item" value="CU30">CU30</option>
                                            <option class="dropdown-item" value="CU40">CU40</option>
                                            <option class="dropdown-item" value="CU50">CU50</option>
                                            <option class="dropdown-item" value="CU60">CU60</option>
                                            <option class="dropdown-item" value="CU80">CU80</option>
                                            <option class="dropdown-item" value="DD10">DD10</option>
                                            <option class="dropdown-item" value="DD20">DD20</option>
                                            <option class="dropdown-item" value="DD30">DD30</option>
                                            <option class="dropdown-item" value="DD40">DD40</option>
                                            <option class="dropdown-item" value="DD50">DD50</option>
                                            <option class="dropdown-item" value="DD60">DD60</option>
                                            <option class="dropdown-item" value="DD70">DD70</option>
                                            <option class="dropdown-item" value="DD80">DD80</option>
                                            <option class="dropdown-item" value="DD90">DD90</option>
                                            <option class="dropdown-item" value="DR10">DR10</option>
                                            <option class="dropdown-item" value="DR20">DR20</option>
                                            <option class="dropdown-item" value="DR30">DR30</option>
                                            <option class="dropdown-item" value="DR40">DR40</option>
                                            <option class="dropdown-item" value="DR50">DR50</option>
                                            <option class="dropdown-item" value="DR60">DR60</option>
                                            <option class="dropdown-item" value="DR70">DR70</option>
                                            <option class="dropdown-item" value="DR80">DR80</option>
                                            <option class="dropdown-item" value="DR90">DR90</option>
                                            <option class="dropdown-item" value="IN10">IN10</option>
                                            <option class="dropdown-item" value="LC10">LC10</option>
                                            <option class="dropdown-item" value="LC20">LC20</option>
                                            <option class="dropdown-item" value="LC30">LC30</option>
                                            <option class="dropdown-item" value="LC40">LC40</option>
                                            <option class="dropdown-item" value="LC50">LC50</option>
                                            <option class="dropdown-item" value="MS10">MS10</option>
                                            <option class="dropdown-item" value="MS20">MS20</option>
                                            <option class="dropdown-item" value="MS30">MS30</option>
                                            <option class="dropdown-item" value="MS40">MS40</option>
                                            <option class="dropdown-item" value="MS50">MS50</option>
                                            <option class="dropdown-item" value="MS60">MS60</option>
                                            <option class="dropdown-item" value="MS70">MS70</option>
                                            <option class="dropdown-item" value="MS80">MS80</option>
                                            <option class="dropdown-item" value="MS90">MS90</option>
                                            <option class="dropdown-item" value="MS99">MS99</option>
                                            <option class="dropdown-item" value="MW10">MW10</option>
                                            <option class="dropdown-item" value="PC10">PC10</option>
                                            <option class="dropdown-item" value="PC20">PC20</option>
                                            <option class="dropdown-item" value="PC30">PC30</option>
                                            <option class="dropdown-item" value="PL20">PL20</option>
                                            <option class="dropdown-item" value="PL30">PL30</option>
                                            <option class="dropdown-item" value="PL40">PL40</option>
                                            <option class="dropdown-item" value="PL50">PL50</option>
                                            <option class="dropdown-item" value="SP10">SP10</option>
                                            <option class="dropdown-item" value="SP20">SP20</option>
                                            <option class="dropdown-item" value="SP30">SP30</option>
                                            <option class="dropdown-item" value="SP40">SP40</option>
                                            <option class="dropdown-item" value="SP50">SP50</option>
                                            <option class="dropdown-item" value="SP60">SP60</option>
                                            <option class="dropdown-item" value="TS10">TS10</option>
                                            <option class="dropdown-item" value="TS20">TS20</option>
                                            <option class="dropdown-item" value="TS30">TS30</option>
                                            <option class="dropdown-item" value="TS40">TS40</option>
                                            <option class="dropdown-item" value="TS50">TS50</option>
                                            <option class="dropdown-item" value="TS60">TS60</option>
                                            <option class="dropdown-item" value="TS70">TS70</option>
                                            <option class="dropdown-item" value="TT99">TT99</option>
                                            <option class="dropdown-item" value="UT10">UT10</option>
                                            <option class="dropdown-item" value="UT20">UT20</option>
                                            <option class="dropdown-item" value="UT30">UT30</option>
                                            <option class="dropdown-item" value="UT40">UT40</option>
                                            <option class="dropdown-item" value="UT50">UT50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date Of Conviction</label>
                                    <input name="Personal_Conviction_Date_2" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Points</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Conviction_Points_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="None">None</option>
                                            <option class="dropdown-item" value="1">1</option>
                                            <option class="dropdown-item" value="2">2</option>
                                            <option class="dropdown-item" value="3">3</option>
                                            <option class="dropdown-item" value="4">4</option>
                                            <option class="dropdown-item" value="5">5</option>
                                            <option class="dropdown-item" value="6">6</option>
                                            <option class="dropdown-item" value="7">7</option>
                                            <option class="dropdown-item" value="8">8</option>
                                            <option class="dropdown-item" value="9">9</option>
                                            <option class="dropdown-item" value="10">10</option>
                                            <option class="dropdown-item" value="11">11</option>
                                            <option class="dropdown-item" value="12">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Fine(£) - if any:</label>
                                    <input name="Personal_Conviction_Fine_2" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ban(months) - if any:</label>
                                    <input name="Personal_Conviction_Ban_2" type="text" class="form-control">
                                </div>
                                <div id="addanotherConviction2">
                                    <a onclick="        document.getElementById('addanotherConviction2').style.display='none';
        document.getElementById('MotorConviction3').style.display='block';">
                                        <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="MotorConviction3" style="display: none;">
                        <div class="bg-dark" style="color: white;">
                            <div style="padding: 10px; margin-top: 10px;">
                                <h6>3</h6>
                                <div class="form-group">
                                    <label>Conviction Code</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Conviction_Code_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item">- Please select -</option>
                                            <option class="dropdown-item" value="AC10">AC10</option>
                                            <option class="dropdown-item" value="AC20">AC20</option>
                                            <option class="dropdown-item" value="AC30">AC30</option>
                                            <option class="dropdown-item" value="AC99">AC99</option>
                                            <option class="dropdown-item" value="BA10">BA10</option>
                                            <option class="dropdown-item" value="BA20">BA20</option>
                                            <option class="dropdown-item" value="BA30">BA30</option>
                                            <option class="dropdown-item" value="BA99">BA99</option>
                                            <option class="dropdown-item" value="CD10">CD10</option>
                                            <option class="dropdown-item" value="CD20">CD20</option>
                                            <option class="dropdown-item" value="CD30">CD30</option>
                                            <option class="dropdown-item" value="CD40">CD40</option>
                                            <option class="dropdown-item" value="CD50">CD50</option>
                                            <option class="dropdown-item" value="CD60">CD60</option>
                                            <option class="dropdown-item" value="CD70">CD70</option>
                                            <option class="dropdown-item" value="CD80">CD80</option>
                                            <option class="dropdown-item" value="CD90">CD90</option>
                                            <option class="dropdown-item" value="CD99">CD99</option>
                                            <option class="dropdown-item" value="CU10">CU10</option>
                                            <option class="dropdown-item" value="CU20">CU20</option>
                                            <option class="dropdown-item" value="CU30">CU30</option>
                                            <option class="dropdown-item" value="CU40">CU40</option>
                                            <option class="dropdown-item" value="CU50">CU50</option>
                                            <option class="dropdown-item" value="CU60">CU60</option>
                                            <option class="dropdown-item" value="CU80">CU80</option>
                                            <option class="dropdown-item" value="DD10">DD10</option>
                                            <option class="dropdown-item" value="DD20">DD20</option>
                                            <option class="dropdown-item" value="DD30">DD30</option>
                                            <option class="dropdown-item" value="DD40">DD40</option>
                                            <option class="dropdown-item" value="DD50">DD50</option>
                                            <option class="dropdown-item" value="DD60">DD60</option>
                                            <option class="dropdown-item" value="DD70">DD70</option>
                                            <option class="dropdown-item" value="DD80">DD80</option>
                                            <option class="dropdown-item" value="DD90">DD90</option>
                                            <option class="dropdown-item" value="DR10">DR10</option>
                                            <option class="dropdown-item" value="DR20">DR20</option>
                                            <option class="dropdown-item" value="DR30">DR30</option>
                                            <option class="dropdown-item" value="DR40">DR40</option>
                                            <option class="dropdown-item" value="DR50">DR50</option>
                                            <option class="dropdown-item" value="DR60">DR60</option>
                                            <option class="dropdown-item" value="DR70">DR70</option>
                                            <option class="dropdown-item" value="DR80">DR80</option>
                                            <option class="dropdown-item" value="DR90">DR90</option>
                                            <option class="dropdown-item" value="IN10">IN10</option>
                                            <option class="dropdown-item" value="LC10">LC10</option>
                                            <option class="dropdown-item" value="LC20">LC20</option>
                                            <option class="dropdown-item" value="LC30">LC30</option>
                                            <option class="dropdown-item" value="LC40">LC40</option>
                                            <option class="dropdown-item" value="LC50">LC50</option>
                                            <option class="dropdown-item" value="MS10">MS10</option>
                                            <option class="dropdown-item" value="MS20">MS20</option>
                                            <option class="dropdown-item" value="MS30">MS30</option>
                                            <option class="dropdown-item" value="MS40">MS40</option>
                                            <option class="dropdown-item" value="MS50">MS50</option>
                                            <option class="dropdown-item" value="MS60">MS60</option>
                                            <option class="dropdown-item" value="MS70">MS70</option>
                                            <option class="dropdown-item" value="MS80">MS80</option>
                                            <option class="dropdown-item" value="MS90">MS90</option>
                                            <option class="dropdown-item" value="MS99">MS99</option>
                                            <option class="dropdown-item" value="MW10">MW10</option>
                                            <option class="dropdown-item" value="PC10">PC10</option>
                                            <option class="dropdown-item" value="PC20">PC20</option>
                                            <option class="dropdown-item" value="PC30">PC30</option>
                                            <option class="dropdown-item" value="PL20">PL20</option>
                                            <option class="dropdown-item" value="PL30">PL30</option>
                                            <option class="dropdown-item" value="PL40">PL40</option>
                                            <option class="dropdown-item" value="PL50">PL50</option>
                                            <option class="dropdown-item" value="SP10">SP10</option>
                                            <option class="dropdown-item" value="SP20">SP20</option>
                                            <option class="dropdown-item" value="SP30">SP30</option>
                                            <option class="dropdown-item" value="SP40">SP40</option>
                                            <option class="dropdown-item" value="SP50">SP50</option>
                                            <option class="dropdown-item" value="SP60">SP60</option>
                                            <option class="dropdown-item" value="TS10">TS10</option>
                                            <option class="dropdown-item" value="TS20">TS20</option>
                                            <option class="dropdown-item" value="TS30">TS30</option>
                                            <option class="dropdown-item" value="TS40">TS40</option>
                                            <option class="dropdown-item" value="TS50">TS50</option>
                                            <option class="dropdown-item" value="TS60">TS60</option>
                                            <option class="dropdown-item" value="TS70">TS70</option>
                                            <option class="dropdown-item" value="TT99">TT99</option>
                                            <option class="dropdown-item" value="UT10">UT10</option>
                                            <option class="dropdown-item" value="UT20">UT20</option>
                                            <option class="dropdown-item" value="UT30">UT30</option>
                                            <option class="dropdown-item" value="UT40">UT40</option>
                                            <option class="dropdown-item" value="UT50">UT50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date Of Conviction</label>
                                    <input name="Personal_Conviction_Date_3" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Points</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Conviction_Points_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="None">None</option>
                                            <option class="dropdown-item" value="1">1</option>
                                            <option class="dropdown-item" value="2">2</option>
                                            <option class="dropdown-item" value="3">3</option>
                                            <option class="dropdown-item" value="4">4</option>
                                            <option class="dropdown-item" value="5">5</option>
                                            <option class="dropdown-item" value="6">6</option>
                                            <option class="dropdown-item" value="7">7</option>
                                            <option class="dropdown-item" value="8">8</option>
                                            <option class="dropdown-item" value="9">9</option>
                                            <option class="dropdown-item" value="10">10</option>
                                            <option class="dropdown-item" value="11">11</option>
                                            <option class="dropdown-item" value="12">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Fine(£) - if any:</label>
                                    <input name="Personal_Conviction_Fine_3" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ban(months) - if any:</label>
                                    <input name="Personal_Conviction_Ban_3" type="text" class="form-control">
                                </div>
                                <div id="addanotherConviction3">
                                    <a onclick="        document.getElementById('addanotherConviction3').style.display='none';
        document.getElementById('MotorConviction4').style.display='block';">
                                        <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="MotorConviction4" style="display: none;">
                        <div class="bg-dark" style="color: white;">
                            <div style="padding: 10px; margin-top: 10px;">
                                <h6>4</h6>
                                <div class="form-group">
                                    <label>Conviction Code</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Conviction_Code_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item">- Please select -</option>
                                            <option class="dropdown-item" value="AC10">AC10</option>
                                            <option class="dropdown-item" value="AC20">AC20</option>
                                            <option class="dropdown-item" value="AC30">AC30</option>
                                            <option class="dropdown-item" value="AC99">AC99</option>
                                            <option class="dropdown-item" value="BA10">BA10</option>
                                            <option class="dropdown-item" value="BA20">BA20</option>
                                            <option class="dropdown-item" value="BA30">BA30</option>
                                            <option class="dropdown-item" value="BA99">BA99</option>
                                            <option class="dropdown-item" value="CD10">CD10</option>
                                            <option class="dropdown-item" value="CD20">CD20</option>
                                            <option class="dropdown-item" value="CD30">CD30</option>
                                            <option class="dropdown-item" value="CD40">CD40</option>
                                            <option class="dropdown-item" value="CD50">CD50</option>
                                            <option class="dropdown-item" value="CD60">CD60</option>
                                            <option class="dropdown-item" value="CD70">CD70</option>
                                            <option class="dropdown-item" value="CD80">CD80</option>
                                            <option class="dropdown-item" value="CD90">CD90</option>
                                            <option class="dropdown-item" value="CD99">CD99</option>
                                            <option class="dropdown-item" value="CU10">CU10</option>
                                            <option class="dropdown-item" value="CU20">CU20</option>
                                            <option class="dropdown-item" value="CU30">CU30</option>
                                            <option class="dropdown-item" value="CU40">CU40</option>
                                            <option class="dropdown-item" value="CU50">CU50</option>
                                            <option class="dropdown-item" value="CU60">CU60</option>
                                            <option class="dropdown-item" value="CU80">CU80</option>
                                            <option class="dropdown-item" value="DD10">DD10</option>
                                            <option class="dropdown-item" value="DD20">DD20</option>
                                            <option class="dropdown-item" value="DD30">DD30</option>
                                            <option class="dropdown-item" value="DD40">DD40</option>
                                            <option class="dropdown-item" value="DD50">DD50</option>
                                            <option class="dropdown-item" value="DD60">DD60</option>
                                            <option class="dropdown-item" value="DD70">DD70</option>
                                            <option class="dropdown-item" value="DD80">DD80</option>
                                            <option class="dropdown-item" value="DD90">DD90</option>
                                            <option class="dropdown-item" value="DR10">DR10</option>
                                            <option class="dropdown-item" value="DR20">DR20</option>
                                            <option class="dropdown-item" value="DR30">DR30</option>
                                            <option class="dropdown-item" value="DR40">DR40</option>
                                            <option class="dropdown-item" value="DR50">DR50</option>
                                            <option class="dropdown-item" value="DR60">DR60</option>
                                            <option class="dropdown-item" value="DR70">DR70</option>
                                            <option class="dropdown-item" value="DR80">DR80</option>
                                            <option class="dropdown-item" value="DR90">DR90</option>
                                            <option class="dropdown-item" value="IN10">IN10</option>
                                            <option class="dropdown-item" value="LC10">LC10</option>
                                            <option class="dropdown-item" value="LC20">LC20</option>
                                            <option class="dropdown-item" value="LC30">LC30</option>
                                            <option class="dropdown-item" value="LC40">LC40</option>
                                            <option class="dropdown-item" value="LC50">LC50</option>
                                            <option class="dropdown-item" value="MS10">MS10</option>
                                            <option class="dropdown-item" value="MS20">MS20</option>
                                            <option class="dropdown-item" value="MS30">MS30</option>
                                            <option class="dropdown-item" value="MS40">MS40</option>
                                            <option class="dropdown-item" value="MS50">MS50</option>
                                            <option class="dropdown-item" value="MS60">MS60</option>
                                            <option class="dropdown-item" value="MS70">MS70</option>
                                            <option class="dropdown-item" value="MS80">MS80</option>
                                            <option class="dropdown-item" value="MS90">MS90</option>
                                            <option class="dropdown-item" value="MS99">MS99</option>
                                            <option class="dropdown-item" value="MW10">MW10</option>
                                            <option class="dropdown-item" value="PC10">PC10</option>
                                            <option class="dropdown-item" value="PC20">PC20</option>
                                            <option class="dropdown-item" value="PC30">PC30</option>
                                            <option class="dropdown-item" value="PL20">PL20</option>
                                            <option class="dropdown-item" value="PL30">PL30</option>
                                            <option class="dropdown-item" value="PL40">PL40</option>
                                            <option class="dropdown-item" value="PL50">PL50</option>
                                            <option class="dropdown-item" value="SP10">SP10</option>
                                            <option class="dropdown-item" value="SP20">SP20</option>
                                            <option class="dropdown-item" value="SP30">SP30</option>
                                            <option class="dropdown-item" value="SP40">SP40</option>
                                            <option class="dropdown-item" value="SP50">SP50</option>
                                            <option class="dropdown-item" value="SP60">SP60</option>
                                            <option class="dropdown-item" value="TS10">TS10</option>
                                            <option class="dropdown-item" value="TS20">TS20</option>
                                            <option class="dropdown-item" value="TS30">TS30</option>
                                            <option class="dropdown-item" value="TS40">TS40</option>
                                            <option class="dropdown-item" value="TS50">TS50</option>
                                            <option class="dropdown-item" value="TS60">TS60</option>
                                            <option class="dropdown-item" value="TS70">TS70</option>
                                            <option class="dropdown-item" value="TT99">TT99</option>
                                            <option class="dropdown-item" value="UT10">UT10</option>
                                            <option class="dropdown-item" value="UT20">UT20</option>
                                            <option class="dropdown-item" value="UT30">UT30</option>
                                            <option class="dropdown-item" value="UT40">UT40</option>
                                            <option class="dropdown-item" value="UT50">UT50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date Of Conviction</label>
                                    <input name="Personal_Conviction_Date_4" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Points</label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Personal_Conviction_Points_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="">- Please select -</option>
                                            <option class="dropdown-item" value="None">None</option>
                                            <option class="dropdown-item" value="1">1</option>
                                            <option class="dropdown-item" value="2">2</option>
                                            <option class="dropdown-item" value="3">3</option>
                                            <option class="dropdown-item" value="4">4</option>
                                            <option class="dropdown-item" value="5">5</option>
                                            <option class="dropdown-item" value="6">6</option>
                                            <option class="dropdown-item" value="7">7</option>
                                            <option class="dropdown-item" value="8">8</option>
                                            <option class="dropdown-item" value="9">9</option>
                                            <option class="dropdown-item" value="10">10</option>
                                            <option class="dropdown-item" value="11">11</option>
                                            <option class="dropdown-item" value="12">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Fine(£) - if any:</label>
                                    <input name="Personal_Conviction_Fine_4" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Ban(months) - if any:</label>
                                    <input name="Personal_Conviction_Ban_4" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="col-md-6" id="ValMessage2" style="color: red;"></p>
                    <div class="container text-center">
                        <div class="row">
                            <button style="height: 38px; margin-top: 38px;" class="col-md-5 btn btn-orange btn-block" onclick="
                        document.getElementById('ValMessage1').style.display='none';
                        document.getElementById('Step1').style.display='block';
                        document.getElementById('Step2').style.display='none';
                        window.scrollTo(0,0);
                        " type="button">Previous</button>
                            <button style="height: 38px; margin-top: 38px;" class="col-md-5 btn btn-orange btn-block" onclick="nextStep2();" type="button">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--STEP3----------------------------------------------------->
        <div id="Step3" style="display: none;">
            <div class="row">
                <div class="col-md-6 my-4">
                    <h3>Vehicle Details</h3>
                    <div class="form-group">
                        <label>Vehicle Registration<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <input name="Vehicle_Registration" type="text" id="VehicleRegistration" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Approximate value of car at the present(£)</label>
                        <input name="Value_Of_Car" type="text" class="form-control">
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>Does the vehicle have any modifications?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Does_The_Vehicle_Mod" id="VehicleModifications" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="" class="dropdown-item">- Please select -</option>
                                <option value="Yes" class="dropdown-item">Yes</option>
                                <option value="No" class="dropdown-item">No</option>
                            </select>
                        </div>
                    </div>

                    <div id="vehicleModificationsDetails" style="display: none;">
                        <div class="form-group">
                            <label>Please advice on what modifications have been made to the car</label>
                            <input name="What_Mods_To_Car" type="textarea" class="form-control">
                        </div>
                    </div>
                    <br>
                    <h3>Vehicle Usage</h3>
                    <div class="form-group">
                        <label>Vehicle Purchase Date<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <input name="Vehicle_Purchase_Date" type="text" required id="VehiclePurchaseDate" class="form-control">
                    </div>
                    <div class="form-group" style="padding-top: 10px;">
                        <label>What do you use the car for?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Vehicle_Usage" id="VehicleUsage" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Social, Domestic, Pleasure and Commuting" class="dropdown-item">Social, Domestic, Pleasure and Commuting</option>
                                <option value="Social, Domestic and Pleasure only" class="dropdown-item">Social, Domestic and Pleasure only</option>
                                <option value="Business use (By the Proposer)" class="dropdown-item">Business use (By the Proposer)</option>
                                <option value="Business use (By the Proposer and spouse)" class="dropdown-item">Business use (By the Proposer and spouse)</option>
                                <option value="Commercial Travelling" class="dropdown-item">Commercial Travelling</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>Where is the vehicle kept during the day<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Car_Storage_Day" id="CarStorageDay" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Garage" class="dropdown-item">Garage</option>
                                <option value="At Home" class="dropdown-item">At Home</option>
                                <option value="Office or Factory Car Park" class="dropdown-item">Office or Factory Car Park</option>
                                <option value="Open public car park" class="dropdown-item">Open public car park</option>
                                <option value="Secure public car park" class="dropdown-item">Secure public car park</option>
                                <option value="Street away from home" class="dropdown-item">Street away from home</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>Where is the vehicle kept overnight<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Car_Storage_Night" id="CarStorageNight" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Garage" class="dropdown-item">Garage</option>
                                <option value="Public Road" class="dropdown-item">Public Road</option>
                                <option value="Drive" class="dropdown-item">Drive</option>
                                <option value="Private Property" class="dropdown-item">Private Property</option>
                                <option value="Car Park" class="dropdown-item">Car Park</option>
                                <option value="Locked Compound" class="dropdown-item">Locked Compound</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>Is the vehicle kept at the same address<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Vehicle_Kept_Same_Address" id="CarStorageSameAddress" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Yes" class="dropdown-item">Yes</option>
                                <option value="No" class="dropdown-item">No</option>
                            </select>
                        </div>
                    </div>

                    <div id="vehiclealternateaddresscontainer" style="display: none;">
                        <div class="form-group">
                            <label>If No, what is the full address where the vehicle is kept</label>
                            <input name="Full_Address_Vehicle_Kept" type="text" id="vehiclealternateaddress" class="form-control">
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>Who is the Registered Keeper?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Registered_Keeper" id="RegisteredKeeper" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Policy Holder" class="dropdown-item">Policy Holder</option>
                                <option value="Spouse" class="dropdown-item">Spouse</option>
                                <option value="Other Driver" class="dropdown-item">Other Driver</option>
                                <option value="Parent" class="dropdown-item">Parent</option>
                                <option value="Common Law Partner" class="dropdown-item">Common Law Partner</option>
                                <option value="Private Leased" class="dropdown-item">Private Leased</option>
                                <option value="Company" class="dropdown-item">Company</option>
                                <option value="Company (Leased)" class="dropdown-item">Company (Leased)</option>
                                <option value="Limited Company" class="dropdown-item">Limited Company</option>
                                <option value="Civil Partner" class="dropdown-item">Civil Partner</option>
                                <option value="Society/Club" class="dropdown-item">Society/Club</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>Who is the Registered Owner?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Registered_Owner" id="RegisteredOwner" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Policy Holder" class="dropdown-item">Policy Holder</option>
                                <option value="Spouse" class="dropdown-item">Spouse</option>
                                <option value="Other Driver" class="dropdown-item">Other Driver</option>
                                <option value="Parent" class="dropdown-item">Parent</option>
                                <option value="Common Law Partner" class="dropdown-item">Common Law Partner</option>
                                <option value="Private Leased" class="dropdown-item">Private Leased</option>
                                <option value="Company" class="dropdown-item">Company</option>
                                <option value="Company (Leased)" class="dropdown-item">Company (Leased)</option>
                                <option value="Limited Company" class="dropdown-item">Limited Company</option>
                                <option value="Civil Partner" class="dropdown-item">Civil Partner</option>
                                <option value="Society/Club" class="dropdown-item">Society/Club</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Estimated Annual Mileage<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <input name="Estimated_Annual_Mileage" type="text" required id="EstimatedAnnualMileage" class="form-control">
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>Type of Cover<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Type_of_Cover" id="TypeofCover" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Comprehensive" class="dropdown-item">Comprehensive</option>
                                <option value="Third party fire &amp; theft" class="dropdown-item">Third party fire &amp; theft</option>
                                <option value="Third party only" class="dropdown-item">Third party only</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Any no claim discount<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Any_No_Claim_Discount" id="NoClaimDiscount" required class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item" value="">- Please select -</option>
                                <option value="No NCD" class="dropdown-item">No NCD</option>
                                <option value="1 Year" class="dropdown-item">1 Year</option>
                                <option value="2 Years" class="dropdown-item">2 Years</option>
                                <option value="3 Years" class="dropdown-item">3 Years</option>
                                <option value="4 Years" class="dropdown-item">4 Years</option>
                                <option value="5 Years" class="dropdown-item">5 Years</option>
                                <option value="6 Years" class="dropdown-item">6 Years</option>
                                <option value="7 Years" class="dropdown-item">7 Years</option>
                                <option value="8 Years" class="dropdown-item">8 Years</option>
                                <option value="9 Years" class="dropdown-item">9 Years</option>
                                <option value="10 Years" class="dropdown-item">10 Years</option>
                                <option value="11 Years" class="dropdown-item">11 Years</option>
                                <option value="12 Years" class="dropdown-item">12 Years</option>
                                <option value="13 Years" class="dropdown-item">13 Years</option>
                                <option value="14 Years" class="dropdown-item">14 Years</option>
                                <option value="15 + Years" class="dropdown-item">15 + Years</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>Was this NCD earned in the UK?</label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="NCD_Earned_In_UK" id="NCDEarnedinUK" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Yes" class="dropdown-item">Yes</option>
                                <option value="No, earned in the European Union" class="dropdown-item">No, earned in the European Union</option>
                                <option value="No, earned in the Rest of the World" class="dropdown-item">No, earned in the Rest of the World</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>Would you like to protect your NCD?</label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Would_you_like_to_protect_your_NCD" id="ProtectNCD" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Yes" class="dropdown-item">Yes</option>
                                <option value="No" class="dropdown-item">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>What volunary excess would you like?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="What_Voluntary_Excess" id="WhatVoluntaryExcess" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="" class="dropdown-item">- Please select -</option>
                                <option value="£50" class="dropdown-item">£50</option>
                                <option value="£100" class="dropdown-item">£100</option>
                                <option value="£150" class="dropdown-item">£150</option>
                                <option value="£200" class="dropdown-item">£200</option>
                                <option value="£250" class="dropdown-item">£250</option>
                                <option value="£300" class="dropdown-item">£300</option>
                                <option value="£350" class="dropdown-item">£350</option>
                                <option value="£400" class="dropdown-item">£400</option>
                                <option value="£450" class="dropdown-item">£450</option>
                                <option value="£500" class="dropdown-item">£500</option>
                                <option value="£750" class="dropdown-item">£750</option>
                                <option value="£1000" class="dropdown-item">£1000</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="padding-top: 10px;">
                        <label>How would you like to pay?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Regular_Insurance_Payment" id="RegularInsurancePayment" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="0" class="dropdown-item">- Please select -</option>
                                <option value="Monthly" class="dropdown-item">Monthly</option>
                                <option value="In Full" class="dropdown-item">In Full</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>When would you like the policy to start<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <input name="Policy_Start_Date" type="Date" placeholder="DD/MM/YYYY" required id="PolicyStartDate" class="form-control">
                    </div>
                    <p id="ValMessage3" style="color: red;"></p>
                    <div class="container text-center">
                        <div class="row">
                            <button style="height: 38px; margin-top: 38px;" class="col-md-5 btn btn-orange btn-block" onclick="
                        document.getElementById('ValMessage2').style.display='none';
                        document.getElementById('Step2').style.display='block';
                        document.getElementById('Step3').style.display='none';
                        window.scrollTo(0,0);
                        " type="button">Previous</button>
                            <button style="height: 38px; margin-top: 38px;" class="col-md-5 btn btn-orange btn-block" onclick="nextStep3();" type="button">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--STEP4----------------------------------------------------->
        <div id="Step4" style="display: none;">
            <div class="row">
                <div class="col-md-6 my-4">
                    <h3>Additional Drivers</h3>
                    <div class="form-group" style="padding-top: 10px;">
                        <label>Would you like to add an additional driver?</label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select name="Would_You_Like_An_Additional_Driver" id="AdditionalDriver" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option value="" class="dropdown-item">- Please select -</option>
                                <option value="Yes" class="dropdown-item">Yes</option>
                                <option value="No" class="dropdown-item">No</option>
                            </select>
                        </div>
                    </div>


                    <div id="AdditionalDriver1" style="display: none;">
                        <div class="bg-dark" style="color: white;">
                            <div style="padding: 10px; margin-bottom: 10px; margin-top: 10px;">
                                <h6>Additional Driver 1</h6>
                                <div class="form-group"><label>Title<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_Title" id="AdditionalDriver1Title" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Mr" class="dropdown-item">Mr</option>
                                            <option value="Mrs" class="dropdown-item">Mrs</option>
                                            <option value="Ms" class="dropdown-item">Ms</option>
                                            <option value="Miss" class="dropdown-item">Miss</option>
                                            <option value="Dr (Male)" class="dropdown-item">Dr (Male)</option>
                                            <option value="Dr (Female)" class="dropdown-item">Dr (Female)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group"><label>First Name<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <input type="text" name="Additional_Driver_1_First_Name" id="AdditionalDriver1FirstName" class="form-control" placeholder="First Name"> </div>

                                <div class="form-group"><label>Surname<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <input type="text" name="Additional_Driver_1_Surname" id="AdditionalDriver1Surname" class="form-control" placeholder="Your Surname"> </div>

                                <div class="form-group"><label>Relationship to Proposer/Policy Holder<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_Relationship_Policy_Holder" id="AdditionalDriver1RelationshiptoPolicyHolder" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Spouse" class="dropdown-item">Spouse</option>
                                            <option value="Civil Partner" class="dropdown-item">Civil Partner</option>
                                            <option value="Common Law Partner/Cohabitee" class="dropdown-item">Common Law Partner/Cohabitee</option>
                                            <option value="Son/Daughter" class="dropdown-item">Son/Daughter</option>
                                            <option value="Parent" class="dropdown-item">Parent</option>
                                            <option value="Brother/Sister" class="dropdown-item">Brother/Sister</option>
                                            <option value="Other Family" class="dropdown-item">Other Family</option>
                                            <option value="Employee" class="dropdown-item">Employee</option>
                                            <option value="Employer" class="dropdown-item">Employer</option>
                                            <option value="Business Partner" class="dropdown-item">Business Partner</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group"><label>Your Date of Birth<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <input type="text" name="Additional_Driver_1_DOB" id="PersonalDOB" class="form-control"> </div>
                                <div class="form-group"> <label>Marital Status<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_Marital_Status" id="PersonalMaritalStatus" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Single" class="dropdown-item">Single</option>
                                            <option value="Married" class="dropdown-item">Married</option>
                                            <option value="Civil Partnership" class="dropdown-item">Civil Partnership</option>
                                            <option value="Cohabiting" class="dropdown-item">Cohabiting</option>
                                            <option value="Divorced" class="dropdown-item">Divorced</option>
                                            <option value="Seperated" class="dropdown-item">Seperated</option>
                                            <option value="Widowed" class="dropdown-item">Widowed</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Employment Status<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_Employment_Status" id="PersonalEmploymentStatus" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Employed" class="dropdown-item">Employed</option>
                                            <option value="Unemployed" class="dropdown-item">Unemployed</option>
                                            <option value="Self-employed" class="dropdown-item">Self-employed</option>
                                            <option value="House Person" class="dropdown-item">House Person</option>
                                            <option value="Education" class="dropdown-item">Education</option>
                                            <option value="Retired" class="dropdown-item">Retired</option>
                                            <option value="Not Employed due to illness /disability" class="dropdown-item">Not Employed due to illness /disability</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>If employed/Self-employed, what is your occupation</label>
                                    <input type="text" name="Additional_Driver_1_Employment_Occupation" class="form-control" placeholder="Occupation">
                                </div>

                                <div class="form-group">
                                    <label>If employed/self-employed, what type of business</label>
                                    <input type="text" name="Additional_Driver_1_Employment_Business" class="form-control" placeholder="Industry/business type">
                                </div>


                                <div class="form-group">
                                    <label>Type of Licence<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_Licence_Type" id="PersonalTypeOfLicence" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Full UK Manual" class="dropdown-item">Full UK Manual</option>
                                            <option value="Full UK Automatic" class="dropdown-item">Full UK Automatic</option>
                                            <option value="UK Provisional" class="dropdown-item">UK Provisional</option>
                                            <option value="Full Euro EEC" class="dropdown-item">Full Euro EEC</option>
                                            <option value="Provisional EEC" class="dropdown-item">Provisional EEC</option>
                                            <option value="Other International" class="dropdown-item">Other International</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Period Licence held for<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_Licence_Period" id="PersonalPeriodLicenceHeldFor" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Less than a year" class="dropdown-item">Less than a year</option>
                                            <option value="1 Year" class="dropdown-item">1 Year</option>
                                            <option value="2 Years" class="dropdown-item">2 Years</option>
                                            <option value="3 Years" class="dropdown-item">3 Years</option>
                                            <option value="4 Years" class="dropdown-item">4 Years</option>
                                            <option value="5 Years" class="dropdown-item">5 Years</option>
                                            <option value="6 Years" class="dropdown-item">6 Years</option>
                                            <option value="7 Years" class="dropdown-item">7 Years</option>
                                            <option value="8 Years" class="dropdown-item">8 Years</option>
                                            <option value="9 Years" class="dropdown-item">9 Years</option>
                                            <option value="10 Years" class="dropdown-item">10 Years</option>
                                            <option value="11 Years" class="dropdown-item">11 Years</option>
                                            <option value="12 Years" class="dropdown-item">12 Years</option>
                                            <option value="13 Years" class="dropdown-item">13 Years</option>
                                            <option value="14 Years" class="dropdown-item">14 Years</option>
                                            <option value="15+ Years" class="dropdown-item">15+ Years</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>if less than 3 years, what date was licence obtained?</label>
                                    <input name="Additional_Driver_1_Less_3_Year_Date" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>please enter your 16 character driving licence number </label>
                                    <input name="Additional_Driver_1_16_Character_Driving_Licence" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>DVLA medical conditions or disability<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_DVLA_Medical_Disability" id="DVLAMedicalConditionsOrDisability" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="No" class="dropdown-item">No</option>
                                            <option value="DVLA aware - No restrictions" class="dropdown-item">DVLA aware - No restrictions</option>
                                            <option value="DVLA aware - 1 year restricted License" class="dropdown-item">DVLA aware - 1 year restricted License</option>
                                            <option value="DVLA aware - 2 years restricted License" class="dropdown-item">DVLA aware - 2 years restricted License</option>
                                            <option value="DVLA aware - 3 years restricted License" class="dropdown-item">DVLA aware - 3 years restricted License</option>
                                            <option value="DVLA aware - unaware" class="dropdown-item">DVLA aware - unaware</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Were you born in the UK?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_Born_In_UK" id="WereYouBornInUK" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item">- Please select -</option>
                                            <option value="Yes" class="dropdown-item">Yes</option>
                                            <option value="No" class="dropdown-item">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>if no, when did you become resident of Uk</label>
                                    <input name="Additional_Driver_1_Date_Of_Residency" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Use of any other vehicle?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_Use_Of_Other_Vehicle" id="UseOfAnyOtherVehicle" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item">- Please select -</option>
                                            <option value="No access to any other vehicle" class="dropdown-item">No access to any other vehicle</option>
                                            <option value="Own another van or car" class="dropdown-item">Own another van or car</option>
                                            <option value="Named driver on other van or car" class="dropdown-item">Named driver on other van or car</option>
                                            <option value="Have use of another car" class="dropdown-item">Have use of another car</option>
                                            <option value="Company car (including personal use)" class="dropdown-item">Company car (including personal use)</option>
                                            <option value="Company car (excluding personal use)" class="dropdown-item">Company car (excluding personal use)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_Motor_Accident" id="motoraccidentclaim5yearsAdditionalDriver" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item">- Please select -</option>
                                            <option value="Yes" class="dropdown-item">Yes</option>
                                            <option value="No" class="dropdown-item">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="MotorAccidentorClaimDetailsAdditionalDriver1" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px;">
                                            <h6>1</h6>
                                            <div class="form-group">
                                                <label>Type</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Accident_Claim_Detail_Type_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Accident">Accident</option>
                                                        <option class="dropdown-item" value="Explosion">Explosion</option>
                                                        <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                        <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                        <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                        <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                        <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                        <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                        <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                        <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                        <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                        <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                        <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="Additional_Driver_1_Personal_Date_Accident_1" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Damage</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Damage_Accident_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                        <option class="dropdown-item" value="No Damage">No Damage</option>
                                                        <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Cost(£) - if known:</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Cost_Accident_1" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Fault</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Fault_Accident_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Both parties">Both parties</option>
                                                        <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                        <option class="dropdown-item" value="Other party">Other party</option>
                                                        <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                        <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="addanotherAdditionalDriverAccidentClaim1">
                                                <a onclick="addanothermotoraccidentclaimdetailAdditionalDriver1();">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>
                                            <div id="addanotherAdditionalDriverAccidentClaim11">
                                                <a onclick="        document.getElementById('addanothermotoraccidentclaimdetailAdditionalDriver11').style.display='none';
        document.getElementById('MotorAccidentorClaimDetailsAdditionalDriver2').style.display='block';">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="MotorAccidentorClaimDetailsAdditionalDriver2" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>2</h6>
                                            <div class="form-group">
                                                <label>Type</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Accident_Claim_Detail_Type_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Accident">Accident</option>
                                                        <option class="dropdown-item" value="Explosion">Explosion</option>
                                                        <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                        <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                        <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                        <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                        <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                        <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                        <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                        <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                        <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                        <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                        <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text"  name="Additional_Driver_1_Personal_Date_Accident_2" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Damage</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Damage_Accident_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                        <option class="dropdown-item" value="No Damage">No Damage</option>
                                                        <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Cost(£) - if known:</label>
                                                <input type="text"  name="Additional_Driver_1_Personal_Cost_Accident_2" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Fault</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Fault_Accident_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Both parties">Both parties</option>
                                                        <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                        <option class="dropdown-item" value="Other party">Other party</option>
                                                        <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                        <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="addanotherAdditionalDriverAccidentClaim22">
                                                <a onclick="        document.getElementById('addanothermotoraccidentclaimdetailAdditionalDriver22').style.display='none';
        document.getElementById('MotorAccidentorClaimDetailsAdditionalDriver3').style.display='block';">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="MotorAccidentorClaimDetailsAdditionalDriver3" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>3</h6>
                                            <div class="form-group">
                                                <label>Type</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Accident_Claim_Detail_Type_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Accident">Accident</option>
                                                        <option class="dropdown-item" value="Explosion">Explosion</option>
                                                        <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                        <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                        <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                        <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                        <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                        <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                        <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                        <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                        <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                        <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                        <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Date_Accident_3" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Damage</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Damage_Accident_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                        <option class="dropdown-item" value="No Damage">No Damage</option>
                                                        <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Cost(£) - if known:</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Cost_Accident_3" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Fault</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Fault_Accident_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Both parties">Both parties</option>
                                                        <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                        <option class="dropdown-item" value="Other party">Other party</option>
                                                        <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                        <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="addanotherAdditionalDriverAccidentClaim33">
                                                <a onclick="        document.getElementById('addanothermotoraccidentclaimdetailAdditionalDriver33').style.display='none';
        document.getElementById('MotorAccidentorClaimDetailsAdditionalDriver4').style.display='block';">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="MotorAccidentorClaimDetailsAdditionalDriver4" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>4</h6>
                                            <div class="form-group">
                                                <label>Type</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Accident_Claim_Detail_Type_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Accident">Accident</option>
                                                        <option class="dropdown-item" value="Explosion">Explosion</option>
                                                        <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                        <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                        <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                        <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                        <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                        <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                        <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                        <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                        <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                        <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                        <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Date_Accident_4" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Damage</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Damage_Accident_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                        <option class="dropdown-item" value="No Damage">No Damage</option>
                                                        <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Cost(£) - if known:</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Cost_Accident_4" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Fault</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Fault_Accident_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Both parties">Both parties</option>
                                                        <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                        <option class="dropdown-item" value="Other party">Other party</option>
                                                        <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                        <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-top: 10px;">
                                    <label>Any motor convictions fixed penalitst or disqualification in the last 5 years?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_1_Motor_Conviction" id="motorconvictionsclaim5yearsAdditionalDriver" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="0">- Please select -</option>
                                            <option value="Yes" class="dropdown-item">Yes</option>
                                            <option value="No" class="dropdown-item">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="MotorConvictionAdditionalDriver1" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px;">
                                            <h6>1</h6>
                                            <div class="form-group">
                                                <label>Conviction Code</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Conviction_Code_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option value="0" class="dropdown-item">- Please select -</option>
                                                        <option class="dropdown-item" value="AC10">AC10</option>
                                                        <option class="dropdown-item" value="AC20">AC20</option>
                                                        <option class="dropdown-item" value="AC30">AC30</option>
                                                        <option class="dropdown-item" value="AC99">AC99</option>
                                                        <option class="dropdown-item" value="BA10">BA10</option>
                                                        <option class="dropdown-item" value="BA20">BA20</option>
                                                        <option class="dropdown-item" value="BA30">BA30</option>
                                                        <option class="dropdown-item" value="BA99">BA99</option>
                                                        <option class="dropdown-item" value="CD10">CD10</option>
                                                        <option class="dropdown-item" value="CD20">CD20</option>
                                                        <option class="dropdown-item" value="CD30">CD30</option>
                                                        <option class="dropdown-item" value="CD40">CD40</option>
                                                        <option class="dropdown-item" value="CD50">CD50</option>
                                                        <option class="dropdown-item" value="CD60">CD60</option>
                                                        <option class="dropdown-item" value="CD70">CD70</option>
                                                        <option class="dropdown-item" value="CD80">CD80</option>
                                                        <option class="dropdown-item" value="CD90">CD90</option>
                                                        <option class="dropdown-item" value="CD99">CD99</option>
                                                        <option class="dropdown-item" value="CU10">CU10</option>
                                                        <option class="dropdown-item" value="CU20">CU20</option>
                                                        <option class="dropdown-item" value="CU30">CU30</option>
                                                        <option class="dropdown-item" value="CU40">CU40</option>
                                                        <option class="dropdown-item" value="CU50">CU50</option>
                                                        <option class="dropdown-item" value="CU60">CU60</option>
                                                        <option class="dropdown-item" value="CU80">CU80</option>
                                                        <option class="dropdown-item" value="DD10">DD10</option>
                                                        <option class="dropdown-item" value="DD20">DD20</option>
                                                        <option class="dropdown-item" value="DD30">DD30</option>
                                                        <option class="dropdown-item" value="DD40">DD40</option>
                                                        <option class="dropdown-item" value="DD50">DD50</option>
                                                        <option class="dropdown-item" value="DD60">DD60</option>
                                                        <option class="dropdown-item" value="DD70">DD70</option>
                                                        <option class="dropdown-item" value="DD80">DD80</option>
                                                        <option class="dropdown-item" value="DD90">DD90</option>
                                                        <option class="dropdown-item" value="DR10">DR10</option>
                                                        <option class="dropdown-item" value="DR20">DR20</option>
                                                        <option class="dropdown-item" value="DR30">DR30</option>
                                                        <option class="dropdown-item" value="DR40">DR40</option>
                                                        <option class="dropdown-item" value="DR50">DR50</option>
                                                        <option class="dropdown-item" value="DR60">DR60</option>
                                                        <option class="dropdown-item" value="DR70">DR70</option>
                                                        <option class="dropdown-item" value="DR80">DR80</option>
                                                        <option class="dropdown-item" value="DR90">DR90</option>
                                                        <option class="dropdown-item" value="IN10">IN10</option>
                                                        <option class="dropdown-item" value="LC10">LC10</option>
                                                        <option class="dropdown-item" value="LC20">LC20</option>
                                                        <option class="dropdown-item" value="LC30">LC30</option>
                                                        <option class="dropdown-item" value="LC40">LC40</option>
                                                        <option class="dropdown-item" value="LC50">LC50</option>
                                                        <option class="dropdown-item" value="MS10">MS10</option>
                                                        <option class="dropdown-item" value="MS20">MS20</option>
                                                        <option class="dropdown-item" value="MS30">MS30</option>
                                                        <option class="dropdown-item" value="MS40">MS40</option>
                                                        <option class="dropdown-item" value="MS50">MS50</option>
                                                        <option class="dropdown-item" value="MS60">MS60</option>
                                                        <option class="dropdown-item" value="MS70">MS70</option>
                                                        <option class="dropdown-item" value="MS80">MS80</option>
                                                        <option class="dropdown-item" value="MS90">MS90</option>
                                                        <option class="dropdown-item" value="MS99">MS99</option>
                                                        <option class="dropdown-item" value="MW10">MW10</option>
                                                        <option class="dropdown-item" value="PC10">PC10</option>
                                                        <option class="dropdown-item" value="PC20">PC20</option>
                                                        <option class="dropdown-item" value="PC30">PC30</option>
                                                        <option class="dropdown-item" value="PL20">PL20</option>
                                                        <option class="dropdown-item" value="PL30">PL30</option>
                                                        <option class="dropdown-item" value="PL40">PL40</option>
                                                        <option class="dropdown-item" value="PL50">PL50</option>
                                                        <option class="dropdown-item" value="SP10">SP10</option>
                                                        <option class="dropdown-item" value="SP20">SP20</option>
                                                        <option class="dropdown-item" value="SP30">SP30</option>
                                                        <option class="dropdown-item" value="SP40">SP40</option>
                                                        <option class="dropdown-item" value="SP50">SP50</option>
                                                        <option class="dropdown-item" value="SP60">SP60</option>
                                                        <option class="dropdown-item" value="TS10">TS10</option>
                                                        <option class="dropdown-item" value="TS20">TS20</option>
                                                        <option class="dropdown-item" value="TS30">TS30</option>
                                                        <option class="dropdown-item" value="TS40">TS40</option>
                                                        <option class="dropdown-item" value="TS50">TS50</option>
                                                        <option class="dropdown-item" value="TS60">TS60</option>
                                                        <option class="dropdown-item" value="TS70">TS70</option>
                                                        <option class="dropdown-item" value="TT99">TT99</option>
                                                        <option class="dropdown-item" value="UT10">UT10</option>
                                                        <option class="dropdown-item" value="UT20">UT20</option>
                                                        <option class="dropdown-item" value="UT30">UT30</option>
                                                        <option class="dropdown-item" value="UT40">UT40</option>
                                                        <option class="dropdown-item" value="UT50">UT50</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Of Conviction</label>
                                                <input name="Additional_Driver_1_Personal_Conviction_Date_1" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Points</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Conviction_Points_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="None">None</option>
                                                        <option class="dropdown-item" value="1">1</option>
                                                        <option class="dropdown-item" value="2">2</option>
                                                        <option class="dropdown-item" value="3">3</option>
                                                        <option class="dropdown-item" value="4">4</option>
                                                        <option class="dropdown-item" value="5">5</option>
                                                        <option class="dropdown-item" value="6">6</option>
                                                        <option class="dropdown-item" value="7">7</option>
                                                        <option class="dropdown-item" value="8">8</option>
                                                        <option class="dropdown-item" value="9">9</option>
                                                        <option class="dropdown-item" value="10">10</option>
                                                        <option class="dropdown-item" value="11">11</option>
                                                        <option class="dropdown-item" value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Fine(£) - if any:</label>
                                                <input name="Additional_Driver_1_Personal_Conviction_Fine_1" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Ban(months) - if any:</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Conviction_Ban_1" class="form-control">
                                            </div>
                                            <div id="addanotherconvictionAdditionalDriver" style="display:block;">
                                                <a onclick="addanothermotorConvictionListAdditionalDriver();">
                                                    <h6><span class="fa fa-plus"></span>Additional Conviction</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="MotorConvictionAdditionalDriver2" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>2</h6>
                                            <div class="form-group">
                                                <label>Conviction Code</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Conviction_Code_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option value="0" class="dropdown-item">- Please select -</option>
                                                        <option class="dropdown-item" value="AC10">AC10</option>
                                                        <option class="dropdown-item" value="AC20">AC20</option>
                                                        <option class="dropdown-item" value="AC30">AC30</option>
                                                        <option class="dropdown-item" value="AC99">AC99</option>
                                                        <option class="dropdown-item" value="BA10">BA10</option>
                                                        <option class="dropdown-item" value="BA20">BA20</option>
                                                        <option class="dropdown-item" value="BA30">BA30</option>
                                                        <option class="dropdown-item" value="BA99">BA99</option>
                                                        <option class="dropdown-item" value="CD10">CD10</option>
                                                        <option class="dropdown-item" value="CD20">CD20</option>
                                                        <option class="dropdown-item" value="CD30">CD30</option>
                                                        <option class="dropdown-item" value="CD40">CD40</option>
                                                        <option class="dropdown-item" value="CD50">CD50</option>
                                                        <option class="dropdown-item" value="CD60">CD60</option>
                                                        <option class="dropdown-item" value="CD70">CD70</option>
                                                        <option class="dropdown-item" value="CD80">CD80</option>
                                                        <option class="dropdown-item" value="CD90">CD90</option>
                                                        <option class="dropdown-item" value="CD99">CD99</option>
                                                        <option class="dropdown-item" value="CU10">CU10</option>
                                                        <option class="dropdown-item" value="CU20">CU20</option>
                                                        <option class="dropdown-item" value="CU30">CU30</option>
                                                        <option class="dropdown-item" value="CU40">CU40</option>
                                                        <option class="dropdown-item" value="CU50">CU50</option>
                                                        <option class="dropdown-item" value="CU60">CU60</option>
                                                        <option class="dropdown-item" value="CU80">CU80</option>
                                                        <option class="dropdown-item" value="DD10">DD10</option>
                                                        <option class="dropdown-item" value="DD20">DD20</option>
                                                        <option class="dropdown-item" value="DD30">DD30</option>
                                                        <option class="dropdown-item" value="DD40">DD40</option>
                                                        <option class="dropdown-item" value="DD50">DD50</option>
                                                        <option class="dropdown-item" value="DD60">DD60</option>
                                                        <option class="dropdown-item" value="DD70">DD70</option>
                                                        <option class="dropdown-item" value="DD80">DD80</option>
                                                        <option class="dropdown-item" value="DD90">DD90</option>
                                                        <option class="dropdown-item" value="DR10">DR10</option>
                                                        <option class="dropdown-item" value="DR20">DR20</option>
                                                        <option class="dropdown-item" value="DR30">DR30</option>
                                                        <option class="dropdown-item" value="DR40">DR40</option>
                                                        <option class="dropdown-item" value="DR50">DR50</option>
                                                        <option class="dropdown-item" value="DR60">DR60</option>
                                                        <option class="dropdown-item" value="DR70">DR70</option>
                                                        <option class="dropdown-item" value="DR80">DR80</option>
                                                        <option class="dropdown-item" value="DR90">DR90</option>
                                                        <option class="dropdown-item" value="IN10">IN10</option>
                                                        <option class="dropdown-item" value="LC10">LC10</option>
                                                        <option class="dropdown-item" value="LC20">LC20</option>
                                                        <option class="dropdown-item" value="LC30">LC30</option>
                                                        <option class="dropdown-item" value="LC40">LC40</option>
                                                        <option class="dropdown-item" value="LC50">LC50</option>
                                                        <option class="dropdown-item" value="MS10">MS10</option>
                                                        <option class="dropdown-item" value="MS20">MS20</option>
                                                        <option class="dropdown-item" value="MS30">MS30</option>
                                                        <option class="dropdown-item" value="MS40">MS40</option>
                                                        <option class="dropdown-item" value="MS50">MS50</option>
                                                        <option class="dropdown-item" value="MS60">MS60</option>
                                                        <option class="dropdown-item" value="MS70">MS70</option>
                                                        <option class="dropdown-item" value="MS80">MS80</option>
                                                        <option class="dropdown-item" value="MS90">MS90</option>
                                                        <option class="dropdown-item" value="MS99">MS99</option>
                                                        <option class="dropdown-item" value="MW10">MW10</option>
                                                        <option class="dropdown-item" value="PC10">PC10</option>
                                                        <option class="dropdown-item" value="PC20">PC20</option>
                                                        <option class="dropdown-item" value="PC30">PC30</option>
                                                        <option class="dropdown-item" value="PL20">PL20</option>
                                                        <option class="dropdown-item" value="PL30">PL30</option>
                                                        <option class="dropdown-item" value="PL40">PL40</option>
                                                        <option class="dropdown-item" value="PL50">PL50</option>
                                                        <option class="dropdown-item" value="SP10">SP10</option>
                                                        <option class="dropdown-item" value="SP20">SP20</option>
                                                        <option class="dropdown-item" value="SP30">SP30</option>
                                                        <option class="dropdown-item" value="SP40">SP40</option>
                                                        <option class="dropdown-item" value="SP50">SP50</option>
                                                        <option class="dropdown-item" value="SP60">SP60</option>
                                                        <option class="dropdown-item" value="TS10">TS10</option>
                                                        <option class="dropdown-item" value="TS20">TS20</option>
                                                        <option class="dropdown-item" value="TS30">TS30</option>
                                                        <option class="dropdown-item" value="TS40">TS40</option>
                                                        <option class="dropdown-item" value="TS50">TS50</option>
                                                        <option class="dropdown-item" value="TS60">TS60</option>
                                                        <option class="dropdown-item" value="TS70">TS70</option>
                                                        <option class="dropdown-item" value="TT99">TT99</option>
                                                        <option class="dropdown-item" value="UT10">UT10</option>
                                                        <option class="dropdown-item" value="UT20">UT20</option>
                                                        <option class="dropdown-item" value="UT30">UT30</option>
                                                        <option class="dropdown-item" value="UT40">UT40</option>
                                                        <option class="dropdown-item" value="UT50">UT50</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Of Conviction</label>
                                                <input name="Additional_Driver_1_Personal_Conviction_Date_2" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Points</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Conviction_Points_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="None">None</option>
                                                        <option class="dropdown-item" value="1">1</option>
                                                        <option class="dropdown-item" value="2">2</option>
                                                        <option class="dropdown-item" value="3">3</option>
                                                        <option class="dropdown-item" value="4">4</option>
                                                        <option class="dropdown-item" value="5">5</option>
                                                        <option class="dropdown-item" value="6">6</option>
                                                        <option class="dropdown-item" value="7">7</option>
                                                        <option class="dropdown-item" value="8">8</option>
                                                        <option class="dropdown-item" value="9">9</option>
                                                        <option class="dropdown-item" value="10">10</option>
                                                        <option class="dropdown-item" value="11">11</option>
                                                        <option class="dropdown-item" value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Fine(£) - if any:</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Conviction_Fine_2" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Ban(months) - if any:</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Conviction_Ban_2" class="form-control">
                                            </div>
                                            <div id="addanotherAdditionalDriverConvictionClaim3">
                                                <a onclick="        document.getElementById('addanotherAdditionalDriverConvictionClaim3').style.display='none';
        document.getElementById('MotorConvictionAdditionalDriver3').style.display='block';">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="MotorConvictionAdditionalDriver3" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>3</h6>
                                            <div class="form-group">
                                                <label>Conviction Code</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Conviction_Code_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option value="0" class="dropdown-item">- Please select -</option>
                                                        <option class="dropdown-item" value="AC10">AC10</option>
                                                        <option class="dropdown-item" value="AC20">AC20</option>
                                                        <option class="dropdown-item" value="AC30">AC30</option>
                                                        <option class="dropdown-item" value="AC99">AC99</option>
                                                        <option class="dropdown-item" value="BA10">BA10</option>
                                                        <option class="dropdown-item" value="BA20">BA20</option>
                                                        <option class="dropdown-item" value="BA30">BA30</option>
                                                        <option class="dropdown-item" value="BA99">BA99</option>
                                                        <option class="dropdown-item" value="CD10">CD10</option>
                                                        <option class="dropdown-item" value="CD20">CD20</option>
                                                        <option class="dropdown-item" value="CD30">CD30</option>
                                                        <option class="dropdown-item" value="CD40">CD40</option>
                                                        <option class="dropdown-item" value="CD50">CD50</option>
                                                        <option class="dropdown-item" value="CD60">CD60</option>
                                                        <option class="dropdown-item" value="CD70">CD70</option>
                                                        <option class="dropdown-item" value="CD80">CD80</option>
                                                        <option class="dropdown-item" value="CD90">CD90</option>
                                                        <option class="dropdown-item" value="CD99">CD99</option>
                                                        <option class="dropdown-item" value="CU10">CU10</option>
                                                        <option class="dropdown-item" value="CU20">CU20</option>
                                                        <option class="dropdown-item" value="CU30">CU30</option>
                                                        <option class="dropdown-item" value="CU40">CU40</option>
                                                        <option class="dropdown-item" value="CU50">CU50</option>
                                                        <option class="dropdown-item" value="CU60">CU60</option>
                                                        <option class="dropdown-item" value="CU80">CU80</option>
                                                        <option class="dropdown-item" value="DD10">DD10</option>
                                                        <option class="dropdown-item" value="DD20">DD20</option>
                                                        <option class="dropdown-item" value="DD30">DD30</option>
                                                        <option class="dropdown-item" value="DD40">DD40</option>
                                                        <option class="dropdown-item" value="DD50">DD50</option>
                                                        <option class="dropdown-item" value="DD60">DD60</option>
                                                        <option class="dropdown-item" value="DD70">DD70</option>
                                                        <option class="dropdown-item" value="DD80">DD80</option>
                                                        <option class="dropdown-item" value="DD90">DD90</option>
                                                        <option class="dropdown-item" value="DR10">DR10</option>
                                                        <option class="dropdown-item" value="DR20">DR20</option>
                                                        <option class="dropdown-item" value="DR30">DR30</option>
                                                        <option class="dropdown-item" value="DR40">DR40</option>
                                                        <option class="dropdown-item" value="DR50">DR50</option>
                                                        <option class="dropdown-item" value="DR60">DR60</option>
                                                        <option class="dropdown-item" value="DR70">DR70</option>
                                                        <option class="dropdown-item" value="DR80">DR80</option>
                                                        <option class="dropdown-item" value="DR90">DR90</option>
                                                        <option class="dropdown-item" value="IN10">IN10</option>
                                                        <option class="dropdown-item" value="LC10">LC10</option>
                                                        <option class="dropdown-item" value="LC20">LC20</option>
                                                        <option class="dropdown-item" value="LC30">LC30</option>
                                                        <option class="dropdown-item" value="LC40">LC40</option>
                                                        <option class="dropdown-item" value="LC50">LC50</option>
                                                        <option class="dropdown-item" value="MS10">MS10</option>
                                                        <option class="dropdown-item" value="MS20">MS20</option>
                                                        <option class="dropdown-item" value="MS30">MS30</option>
                                                        <option class="dropdown-item" value="MS40">MS40</option>
                                                        <option class="dropdown-item" value="MS50">MS50</option>
                                                        <option class="dropdown-item" value="MS60">MS60</option>
                                                        <option class="dropdown-item" value="MS70">MS70</option>
                                                        <option class="dropdown-item" value="MS80">MS80</option>
                                                        <option class="dropdown-item" value="MS90">MS90</option>
                                                        <option class="dropdown-item" value="MS99">MS99</option>
                                                        <option class="dropdown-item" value="MW10">MW10</option>
                                                        <option class="dropdown-item" value="PC10">PC10</option>
                                                        <option class="dropdown-item" value="PC20">PC20</option>
                                                        <option class="dropdown-item" value="PC30">PC30</option>
                                                        <option class="dropdown-item" value="PL20">PL20</option>
                                                        <option class="dropdown-item" value="PL30">PL30</option>
                                                        <option class="dropdown-item" value="PL40">PL40</option>
                                                        <option class="dropdown-item" value="PL50">PL50</option>
                                                        <option class="dropdown-item" value="SP10">SP10</option>
                                                        <option class="dropdown-item" value="SP20">SP20</option>
                                                        <option class="dropdown-item" value="SP30">SP30</option>
                                                        <option class="dropdown-item" value="SP40">SP40</option>
                                                        <option class="dropdown-item" value="SP50">SP50</option>
                                                        <option class="dropdown-item" value="SP60">SP60</option>
                                                        <option class="dropdown-item" value="TS10">TS10</option>
                                                        <option class="dropdown-item" value="TS20">TS20</option>
                                                        <option class="dropdown-item" value="TS30">TS30</option>
                                                        <option class="dropdown-item" value="TS40">TS40</option>
                                                        <option class="dropdown-item" value="TS50">TS50</option>
                                                        <option class="dropdown-item" value="TS60">TS60</option>
                                                        <option class="dropdown-item" value="TS70">TS70</option>
                                                        <option class="dropdown-item" value="TT99">TT99</option>
                                                        <option class="dropdown-item" value="UT10">UT10</option>
                                                        <option class="dropdown-item" value="UT20">UT20</option>
                                                        <option class="dropdown-item" value="UT30">UT30</option>
                                                        <option class="dropdown-item" value="UT40">UT40</option>
                                                        <option class="dropdown-item" value="UT50">UT50</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Of Conviction</label>
                                                <input name="Additional_Driver_1_Personal_Conviction_Date_3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Points</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Conviction_Points_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="None">None</option>
                                                        <option class="dropdown-item" value="1">1</option>
                                                        <option class="dropdown-item" value="2">2</option>
                                                        <option class="dropdown-item" value="3">3</option>
                                                        <option class="dropdown-item" value="4">4</option>
                                                        <option class="dropdown-item" value="5">5</option>
                                                        <option class="dropdown-item" value="6">6</option>
                                                        <option class="dropdown-item" value="7">7</option>
                                                        <option class="dropdown-item" value="8">8</option>
                                                        <option class="dropdown-item" value="9">9</option>
                                                        <option class="dropdown-item" value="10">10</option>
                                                        <option class="dropdown-item" value="11">11</option>
                                                        <option class="dropdown-item" value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Fine(£) - if any:</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Conviction_Fine_3" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Ban(months) - if any:</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Conviction_Ban_3" class="form-control">
                                            </div>
                                            <div id="addanotherAdditionalDriverConvictionClaim4">
                                                <a onclick="        document.getElementById('addanotherAdditionalDriverConvictionClaim4').style.display='none';
        document.getElementById('MotorConvictionAdditionalDriver4').style.display='block';">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="MotorConvictionAdditionalDriver4" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>4</h6>
                                            <div class="form-group">
                                                <label>Conviction Code</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Conviction_Code_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option value="0" class="dropdown-item">- Please select -</option>
                                                        <option class="dropdown-item" value="AC10">AC10</option>
                                                        <option class="dropdown-item" value="AC20">AC20</option>
                                                        <option class="dropdown-item" value="AC30">AC30</option>
                                                        <option class="dropdown-item" value="AC99">AC99</option>
                                                        <option class="dropdown-item" value="BA10">BA10</option>
                                                        <option class="dropdown-item" value="BA20">BA20</option>
                                                        <option class="dropdown-item" value="BA30">BA30</option>
                                                        <option class="dropdown-item" value="BA99">BA99</option>
                                                        <option class="dropdown-item" value="CD10">CD10</option>
                                                        <option class="dropdown-item" value="CD20">CD20</option>
                                                        <option class="dropdown-item" value="CD30">CD30</option>
                                                        <option class="dropdown-item" value="CD40">CD40</option>
                                                        <option class="dropdown-item" value="CD50">CD50</option>
                                                        <option class="dropdown-item" value="CD60">CD60</option>
                                                        <option class="dropdown-item" value="CD70">CD70</option>
                                                        <option class="dropdown-item" value="CD80">CD80</option>
                                                        <option class="dropdown-item" value="CD90">CD90</option>
                                                        <option class="dropdown-item" value="CD99">CD99</option>
                                                        <option class="dropdown-item" value="CU10">CU10</option>
                                                        <option class="dropdown-item" value="CU20">CU20</option>
                                                        <option class="dropdown-item" value="CU30">CU30</option>
                                                        <option class="dropdown-item" value="CU40">CU40</option>
                                                        <option class="dropdown-item" value="CU50">CU50</option>
                                                        <option class="dropdown-item" value="CU60">CU60</option>
                                                        <option class="dropdown-item" value="CU80">CU80</option>
                                                        <option class="dropdown-item" value="DD10">DD10</option>
                                                        <option class="dropdown-item" value="DD20">DD20</option>
                                                        <option class="dropdown-item" value="DD30">DD30</option>
                                                        <option class="dropdown-item" value="DD40">DD40</option>
                                                        <option class="dropdown-item" value="DD50">DD50</option>
                                                        <option class="dropdown-item" value="DD60">DD60</option>
                                                        <option class="dropdown-item" value="DD70">DD70</option>
                                                        <option class="dropdown-item" value="DD80">DD80</option>
                                                        <option class="dropdown-item" value="DD90">DD90</option>
                                                        <option class="dropdown-item" value="DR10">DR10</option>
                                                        <option class="dropdown-item" value="DR20">DR20</option>
                                                        <option class="dropdown-item" value="DR30">DR30</option>
                                                        <option class="dropdown-item" value="DR40">DR40</option>
                                                        <option class="dropdown-item" value="DR50">DR50</option>
                                                        <option class="dropdown-item" value="DR60">DR60</option>
                                                        <option class="dropdown-item" value="DR70">DR70</option>
                                                        <option class="dropdown-item" value="DR80">DR80</option>
                                                        <option class="dropdown-item" value="DR90">DR90</option>
                                                        <option class="dropdown-item" value="IN10">IN10</option>
                                                        <option class="dropdown-item" value="LC10">LC10</option>
                                                        <option class="dropdown-item" value="LC20">LC20</option>
                                                        <option class="dropdown-item" value="LC30">LC30</option>
                                                        <option class="dropdown-item" value="LC40">LC40</option>
                                                        <option class="dropdown-item" value="LC50">LC50</option>
                                                        <option class="dropdown-item" value="MS10">MS10</option>
                                                        <option class="dropdown-item" value="MS20">MS20</option>
                                                        <option class="dropdown-item" value="MS30">MS30</option>
                                                        <option class="dropdown-item" value="MS40">MS40</option>
                                                        <option class="dropdown-item" value="MS50">MS50</option>
                                                        <option class="dropdown-item" value="MS60">MS60</option>
                                                        <option class="dropdown-item" value="MS70">MS70</option>
                                                        <option class="dropdown-item" value="MS80">MS80</option>
                                                        <option class="dropdown-item" value="MS90">MS90</option>
                                                        <option class="dropdown-item" value="MS99">MS99</option>
                                                        <option class="dropdown-item" value="MW10">MW10</option>
                                                        <option class="dropdown-item" value="PC10">PC10</option>
                                                        <option class="dropdown-item" value="PC20">PC20</option>
                                                        <option class="dropdown-item" value="PC30">PC30</option>
                                                        <option class="dropdown-item" value="PL20">PL20</option>
                                                        <option class="dropdown-item" value="PL30">PL30</option>
                                                        <option class="dropdown-item" value="PL40">PL40</option>
                                                        <option class="dropdown-item" value="PL50">PL50</option>
                                                        <option class="dropdown-item" value="SP10">SP10</option>
                                                        <option class="dropdown-item" value="SP20">SP20</option>
                                                        <option class="dropdown-item" value="SP30">SP30</option>
                                                        <option class="dropdown-item" value="SP40">SP40</option>
                                                        <option class="dropdown-item" value="SP50">SP50</option>
                                                        <option class="dropdown-item" value="SP60">SP60</option>
                                                        <option class="dropdown-item" value="TS10">TS10</option>
                                                        <option class="dropdown-item" value="TS20">TS20</option>
                                                        <option class="dropdown-item" value="TS30">TS30</option>
                                                        <option class="dropdown-item" value="TS40">TS40</option>
                                                        <option class="dropdown-item" value="TS50">TS50</option>
                                                        <option class="dropdown-item" value="TS60">TS60</option>
                                                        <option class="dropdown-item" value="TS70">TS70</option>
                                                        <option class="dropdown-item" value="TT99">TT99</option>
                                                        <option class="dropdown-item" value="UT10">UT10</option>
                                                        <option class="dropdown-item" value="UT20">UT20</option>
                                                        <option class="dropdown-item" value="UT30">UT30</option>
                                                        <option class="dropdown-item" value="UT40">UT40</option>
                                                        <option class="dropdown-item" value="UT50">UT50</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Of Conviction</label>
                                                <input name="Additional_Driver_1_Personal_Conviction_Date_4" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Points</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_1_Personal_Conviction_Points_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="None">None</option>
                                                        <option class="dropdown-item" value="1">1</option>
                                                        <option class="dropdown-item" value="2">2</option>
                                                        <option class="dropdown-item" value="3">3</option>
                                                        <option class="dropdown-item" value="4">4</option>
                                                        <option class="dropdown-item" value="5">5</option>
                                                        <option class="dropdown-item" value="6">6</option>
                                                        <option class="dropdown-item" value="7">7</option>
                                                        <option class="dropdown-item" value="8">8</option>
                                                        <option class="dropdown-item" value="9">9</option>
                                                        <option class="dropdown-item" value="10">10</option>
                                                        <option class="dropdown-item" value="11">11</option>
                                                        <option class="dropdown-item" value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Fine(£) - if any:</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Conviction_Fine_4" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Ban(months) - if any:</label>
                                                <input type="text" name="Additional_Driver_1_Personal_Conviction_Ban_4" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="addanotherAdditionalDriver">
                            <a onclick="addanotherAdditionalDriver();">
                                <h6><span class="fa fa-plus"></span>Add Another Additional Driver</h6>
                            </a>
                        </div>
                    </div>
                    <div id="AdditionalDriver2" style="display: none;">
                        <div class="bg-dark" style="color: white;">
                            <div style="padding: 10px; margin-bottom: 10px; margin-top: 10px;">
                                <h6>Additional Driver 2</h6>
                                <div class="form-group"><label>Title<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_Title" id="AdditionalDriver2Title" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Mr" class="dropdown-item">Mr</option>
                                            <option value="Mrs" class="dropdown-item">Mrs</option>
                                            <option value="Ms" class="dropdown-item">Ms</option>
                                            <option value="Miss" class="dropdown-item">Miss</option>
                                            <option value="Dr (Male)" class="dropdown-item">Dr (Male)</option>
                                            <option value="Dr (Female)" class="dropdown-item">Dr (Female)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group"><label>First Name<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <input type="text" name="Additional_Driver_2_First_Name" id="AdditionalDriver2FirstName" class="form-control" placeholder="First Name"> </div>

                                <div class="form-group"><label>Surname<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <input type="text" name="Additional_Driver_2_Surname" id="AdditionalDriver2Surname" class="form-control" placeholder="Your Surname"> </div>

                                <div class="form-group"><label>Relationship to Proposer/Policy Holder<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_Relationship_Policy_Holder" id="AdditionalDriver2RelationshiptoPolicyHolder" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Spouse" class="dropdown-item">Spouse</option>
                                            <option value="Civil Partner" class="dropdown-item">Civil Partner</option>
                                            <option value="Common Law Partner/Cohabitee" class="dropdown-item">Common Law Partner/Cohabitee</option>
                                            <option value="Son/Daughter" class="dropdown-item">Son/Daughter</option>
                                            <option value="Parent" class="dropdown-item">Parent</option>
                                            <option value="Brother/Sister" class="dropdown-item">Brother/Sister</option>
                                            <option value="Other Family" class="dropdown-item">Other Family</option>
                                            <option value="Employee" class="dropdown-item">Employee</option>
                                            <option value="Employer" class="dropdown-item">Employer</option>
                                            <option value="Business Partner" class="dropdown-item">Business Partner</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group"><label>Your Date of Birth<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <input name="Additional_Driver_2_DOB" type="text" id="PersonalDOB" class="form-control"> </div>
                                <div class="form-group"> <label>Marital Status<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_Marital_Status" id="PersonalMaritalStatus" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Single" class="dropdown-item">Single</option>
                                            <option value="Married" class="dropdown-item">Married</option>
                                            <option value="Civil Partnership" class="dropdown-item">Civil Partnership</option>
                                            <option value="Cohabiting" class="dropdown-item">Cohabiting</option>
                                            <option value="Divorced" class="dropdown-item">Divorced</option>
                                            <option value="Seperated" class="dropdown-item">Seperated</option>
                                            <option value="Widowed" class="dropdown-item">Widowed</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Employment Status<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_Employment_Status" id="PersonalEmploymentStatus" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Employed" class="dropdown-item">Employed</option>
                                            <option value="Unemployed" class="dropdown-item">Unemployed</option>
                                            <option value="Self-employed" class="dropdown-item">Self-employed</option>
                                            <option value="House Person" class="dropdown-item">House Person</option>
                                            <option value="Education" class="dropdown-item">Education</option>
                                            <option value="Retired" class="dropdown-item">Retired</option>
                                            <option value="Not Employed due to illness /disability" class="dropdown-item">Not Employed due to illness /disability</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>If employed/Self-employed, what is your occupation</label>
                                    <input name="Additional_Driver_2_Employment_Occupation" type="text" class="form-control" placeholder="Occupation">
                                </div>

                                <div class="form-group">
                                    <label>If employed/self-employed, what type of business</label>
                                    <input name="Additional_Driver_2_Employment_Business" type="text" class="form-control" placeholder="Industry/business type">
                                </div>


                                <div class="form-group">
                                    <label>Type of Licence<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_Licence_Type" id="PersonalTypeOfLicence" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Full UK Manual" class="dropdown-item">Full UK Manual</option>
                                            <option value="Full UK Automatic" class="dropdown-item">Full UK Automatic</option>
                                            <option value="UK Provisional" class="dropdown-item">UK Provisional</option>
                                            <option value="Full Euro EEC" class="dropdown-item">Full Euro EEC</option>
                                            <option value="Provisional EEC" class="dropdown-item">Provisional EEC</option>
                                            <option value="Other International" class="dropdown-item">Other International</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Period Licence held for<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_Licence_Period" id="PersonalPeriodLicenceHeldFor" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="Less than a year" class="dropdown-item">Less than a year</option>
                                            <option value="1 Year" class="dropdown-item">1 Year</option>
                                            <option value="2 Years" class="dropdown-item">2 Years</option>
                                            <option value="3 Years" class="dropdown-item">3 Years</option>
                                            <option value="4 Years" class="dropdown-item">4 Years</option>
                                            <option value="5 Years" class="dropdown-item">5 Years</option>
                                            <option value="6 Years" class="dropdown-item">6 Years</option>
                                            <option value="7 Years" class="dropdown-item">7 Years</option>
                                            <option value="8 Years" class="dropdown-item">8 Years</option>
                                            <option value="9 Years" class="dropdown-item">9 Years</option>
                                            <option value="10 Years" class="dropdown-item">10 Years</option>
                                            <option value="11 Years" class="dropdown-item">11 Years</option>
                                            <option value="12 Years" class="dropdown-item">12 Years</option>
                                            <option value="13 Years" class="dropdown-item">13 Years</option>
                                            <option value="14 Years" class="dropdown-item">14 Years</option>
                                            <option value="15+ Years" class="dropdown-item">15+ Years</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>if less than 3 years, what date was licence obtained?</label>
                                    <input name="Additional_Driver_2_Less_3_Year_Date" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Please enter your 16 character driving licence number </label>
                                    <input name="Additional_Driver_2_16_Character_Driving_Licence" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>DVLA medical conditions or disability<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_DVLA_Medical_Disability" id="DVLAMedicalConditionsOrDisability" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item" value="">- Please select -</option>
                                            <option value="No" class="dropdown-item">No</option>
                                            <option value="DVLA aware - No restrictions" class="dropdown-item">DVLA aware - No restrictions</option>
                                            <option value="DVLA aware - 1 year restricted License" class="dropdown-item">DVLA aware - 1 year restricted License</option>
                                            <option value="DVLA aware - 2 years restricted License" class="dropdown-item">DVLA aware - 2 years restricted License</option>
                                            <option value="DVLA aware - 3 years restricted License" class="dropdown-item">DVLA aware - 3 years restricted License</option>
                                            <option value="DVLA aware - unaware" class="dropdown-item">DVLA aware - unaware</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Were you born in the UK?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_Born_In_UK" id="WereYouBornInUK" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item">- Please select -</option>
                                            <option value="Yes" class="dropdown-item">Yes</option>
                                            <option value="No" class="dropdown-item">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>if no, when did you become resident of Uk</label>
                                    <input type="text" name="Additional_Driver_2_Date_Of_Residency" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Use of any other vehicle?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_Use_Of_Other_Vehicle" id="UseOfAnyOtherVehicle" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item">- Please select -</option>
                                            <option value="No access to any other vehicle" class="dropdown-item">No access to any other vehicle</option>
                                            <option value="Own another van or car" class="dropdown-item">Own another van or car</option>
                                            <option value="Named driver on other van or car" class="dropdown-item">Named driver on other van or car</option>
                                            <option value="Have use of another car" class="dropdown-item">Have use of another car</option>
                                            <option value="Company car (including personal use)" class="dropdown-item">Company car (including personal use)</option>
                                            <option value="Company car (excluding personal use)" class="dropdown-item">Company car (excluding personal use)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Any motor accident (fault or non fault) or claims (whether claim made or not) in the last 5 years?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_Motor_Accident" id="motoraccidentclaim5yearsAdditionalDriver2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option value="0" class="dropdown-item">- Please select -</option>
                                            <option value="Yes" class="dropdown-item">Yes</option>
                                            <option value="No" class="dropdown-item">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="MotorAccidentorClaimDetailsAdditionalDriver21" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px;">
                                            <h6>1</h6>
                                            <div class="form-group">
                                                <label>Type</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Accident_Claim_Detail_Type_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Accident">Accident</option>
                                                        <option class="dropdown-item" value="Explosion">Explosion</option>
                                                        <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                        <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                        <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                        <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                        <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                        <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                        <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                        <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                        <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                        <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                        <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="Additional_Driver_2_Personal_Date_Accident_1" type="Text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Damage</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Damage_Accident_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                        <option class="dropdown-item" value="No Damage">No Damage</option>
                                                        <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Cost(£) - if known:</label>
                                                <input name="Additional_Driver_2_Personal_Cost_Accident_1" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Fault</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Fault_Accident_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Both parties">Both parties</option>
                                                        <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                        <option class="dropdown-item" value="Other party">Other party</option>
                                                        <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                        <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="addanothermotoraccidentclaimdetailAdditionalDriver34">
                                                <a onclick="addanothermotoraccidentclaimdetailAdditionalDriver34();">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="MotorAccidentorClaimDetailsAdditionalDriver34" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>2</h6>
                                            <div class="form-group">
                                                <label>Type</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Accident_Claim_Detail_Type_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Accident">Accident</option>
                                                        <option class="dropdown-item" value="Explosion">Explosion</option>
                                                        <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                        <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                        <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                        <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                        <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                        <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                        <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                        <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                        <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                        <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                        <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="Additional_Driver_2_Personal_Date_Accident_2" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Damage</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Damage_Accident_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                        <option class="dropdown-item" value="No Damage">No Damage</option>
                                                        <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Cost(£) - if known:</label>
                                                <input name="Additional_Driver_2_Personal_Cost_Accident_2" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Fault</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Fault_Accident_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Both parties">Both parties</option>
                                                        <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                        <option class="dropdown-item" value="Other party">Other party</option>
                                                        <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                        <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="addanotherAdditionalDriverConvictionClaim24">
                                                <a onclick="        document.getElementById('addanotherAdditionalDriverConvictionClaim24').style.display='none';
        document.getElementById('MotorAccidentorClaimDetailsAdditionalDriver55').style.display='block';">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="MotorAccidentorClaimDetailsAdditionalDriver55" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>3</h6>
                                            <div class="form-group">
                                                <label>Type</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Accident_Claim_Detail_Type_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Accident">Accident</option>
                                                        <option class="dropdown-item" value="Explosion">Explosion</option>
                                                        <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                        <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                        <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                        <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                        <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                        <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                        <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                        <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                        <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                        <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                        <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="Additional_Driver_2_Personal_Date_Accident_3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Damage</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Damage_Accident_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                        <option class="dropdown-item" value="No Damage">No Damage</option>
                                                        <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Cost(£) - if known:</label>
                                                <input name="Additional_Driver_2_Personal_Cost_Accident_3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Fault</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Fault_Accident_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Both parties">Both parties</option>
                                                        <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                        <option class="dropdown-item" value="Other party">Other party</option>
                                                        <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                        <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="addanotherAdditionalDriverConvictionClaim76">
                                                <a onclick="        document.getElementById('addanotherAdditionalDriverConvictionClaim76').style.display='none';
        document.getElementById('MotorAccidentorClaimDetailsAdditionalDriver66').style.display='block';">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="MotorAccidentorClaimDetailsAdditionalDriver66" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>4</h6>
                                            <div class="form-group">
                                                <label>Type</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Accident_Claim_Detail_Type_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Accident">Accident</option>
                                                        <option class="dropdown-item" value="Explosion">Explosion</option>
                                                        <option class="dropdown-item" value="Fire Damage">Fire Damage</option>
                                                        <option class="dropdown-item" value="Lightning Damage">Lightning Damage</option>
                                                        <option class="dropdown-item" value="Malicious Damage">Malicious Damage</option>
                                                        <option class="dropdown-item" value="Riot Damage">Riot Damage</option>
                                                        <option class="dropdown-item" value="Storm Damage">Storm Damage</option>
                                                        <option class="dropdown-item" value="Theft - Accessories">Theft - Accessories</option>
                                                        <option class="dropdown-item" value="Theft - Personal Effects">Theft - Personal Effects</option>
                                                        <option class="dropdown-item" value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                                                        <option class="dropdown-item" value="Theft Of Vehicle">Theft Of Vehicle</option>
                                                        <option class="dropdown-item" value="Theft Related Damage">Theft Related Damage</option>
                                                        <option class="dropdown-item" value="Windscreen Only">Windscreen Only</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input name="Additional_Driver_2_Personal_Date_Accident_4" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Damage</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Damage_Accident_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Damaged - Amount Known">Damaged - Amount Known</option>
                                                        <option class="dropdown-item" value="No Damage">No Damage</option>
                                                        <option class="dropdown-item" value="Unknown / Write-Off">Unknown / Write-Off</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Cost(£) - if known:</label>
                                                <input name="Additional_Driver_2_Personal_Cost_Accident_4" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Fault</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Fault_Accident_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="Both parties">Both parties</option>
                                                        <option class="dropdown-item" value="No other vehicle involved">No other vehicle involved</option>
                                                        <option class="dropdown-item" value="Other party">Other party</option>
                                                        <option class="dropdown-item" value="Our Driver">Our Driver</option>
                                                        <option class="dropdown-item" value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="padding-top: 10px;">
                                    <label>Any motor convictions fixed penalitst or disqualification in the last 5 years?<span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                                    <br>
                                    <div class="btn-group form-group text-left">
                                        <select name="Additional_Driver_2_Motor_Conviction" id="motorconvictionsclaim5yearsAdditionalDriver21" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                            <option class="dropdown-item" value="0">- Please select -</option>
                                            <option value="Yes" class="dropdown-item">Yes</option>
                                            <option value="No" class="dropdown-item">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="MotorConvictionAdditionalDriver21" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px;">
                                            <h6>1</h6>
                                            <div class="form-group">
                                                <label>Conviction Code</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Conviction_Code_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option value="0" class="dropdown-item">- Please select -</option>
                                                        <option class="dropdown-item" value="AC10">AC10</option>
                                                        <option class="dropdown-item" value="AC20">AC20</option>
                                                        <option class="dropdown-item" value="AC30">AC30</option>
                                                        <option class="dropdown-item" value="AC99">AC99</option>
                                                        <option class="dropdown-item" value="BA10">BA10</option>
                                                        <option class="dropdown-item" value="BA20">BA20</option>
                                                        <option class="dropdown-item" value="BA30">BA30</option>
                                                        <option class="dropdown-item" value="BA99">BA99</option>
                                                        <option class="dropdown-item" value="CD10">CD10</option>
                                                        <option class="dropdown-item" value="CD20">CD20</option>
                                                        <option class="dropdown-item" value="CD30">CD30</option>
                                                        <option class="dropdown-item" value="CD40">CD40</option>
                                                        <option class="dropdown-item" value="CD50">CD50</option>
                                                        <option class="dropdown-item" value="CD60">CD60</option>
                                                        <option class="dropdown-item" value="CD70">CD70</option>
                                                        <option class="dropdown-item" value="CD80">CD80</option>
                                                        <option class="dropdown-item" value="CD90">CD90</option>
                                                        <option class="dropdown-item" value="CD99">CD99</option>
                                                        <option class="dropdown-item" value="CU10">CU10</option>
                                                        <option class="dropdown-item" value="CU20">CU20</option>
                                                        <option class="dropdown-item" value="CU30">CU30</option>
                                                        <option class="dropdown-item" value="CU40">CU40</option>
                                                        <option class="dropdown-item" value="CU50">CU50</option>
                                                        <option class="dropdown-item" value="CU60">CU60</option>
                                                        <option class="dropdown-item" value="CU80">CU80</option>
                                                        <option class="dropdown-item" value="DD10">DD10</option>
                                                        <option class="dropdown-item" value="DD20">DD20</option>
                                                        <option class="dropdown-item" value="DD30">DD30</option>
                                                        <option class="dropdown-item" value="DD40">DD40</option>
                                                        <option class="dropdown-item" value="DD50">DD50</option>
                                                        <option class="dropdown-item" value="DD60">DD60</option>
                                                        <option class="dropdown-item" value="DD70">DD70</option>
                                                        <option class="dropdown-item" value="DD80">DD80</option>
                                                        <option class="dropdown-item" value="DD90">DD90</option>
                                                        <option class="dropdown-item" value="DR10">DR10</option>
                                                        <option class="dropdown-item" value="DR20">DR20</option>
                                                        <option class="dropdown-item" value="DR30">DR30</option>
                                                        <option class="dropdown-item" value="DR40">DR40</option>
                                                        <option class="dropdown-item" value="DR50">DR50</option>
                                                        <option class="dropdown-item" value="DR60">DR60</option>
                                                        <option class="dropdown-item" value="DR70">DR70</option>
                                                        <option class="dropdown-item" value="DR80">DR80</option>
                                                        <option class="dropdown-item" value="DR90">DR90</option>
                                                        <option class="dropdown-item" value="IN10">IN10</option>
                                                        <option class="dropdown-item" value="LC10">LC10</option>
                                                        <option class="dropdown-item" value="LC20">LC20</option>
                                                        <option class="dropdown-item" value="LC30">LC30</option>
                                                        <option class="dropdown-item" value="LC40">LC40</option>
                                                        <option class="dropdown-item" value="LC50">LC50</option>
                                                        <option class="dropdown-item" value="MS10">MS10</option>
                                                        <option class="dropdown-item" value="MS20">MS20</option>
                                                        <option class="dropdown-item" value="MS30">MS30</option>
                                                        <option class="dropdown-item" value="MS40">MS40</option>
                                                        <option class="dropdown-item" value="MS50">MS50</option>
                                                        <option class="dropdown-item" value="MS60">MS60</option>
                                                        <option class="dropdown-item" value="MS70">MS70</option>
                                                        <option class="dropdown-item" value="MS80">MS80</option>
                                                        <option class="dropdown-item" value="MS90">MS90</option>
                                                        <option class="dropdown-item" value="MS99">MS99</option>
                                                        <option class="dropdown-item" value="MW10">MW10</option>
                                                        <option class="dropdown-item" value="PC10">PC10</option>
                                                        <option class="dropdown-item" value="PC20">PC20</option>
                                                        <option class="dropdown-item" value="PC30">PC30</option>
                                                        <option class="dropdown-item" value="PL20">PL20</option>
                                                        <option class="dropdown-item" value="PL30">PL30</option>
                                                        <option class="dropdown-item" value="PL40">PL40</option>
                                                        <option class="dropdown-item" value="PL50">PL50</option>
                                                        <option class="dropdown-item" value="SP10">SP10</option>
                                                        <option class="dropdown-item" value="SP20">SP20</option>
                                                        <option class="dropdown-item" value="SP30">SP30</option>
                                                        <option class="dropdown-item" value="SP40">SP40</option>
                                                        <option class="dropdown-item" value="SP50">SP50</option>
                                                        <option class="dropdown-item" value="SP60">SP60</option>
                                                        <option class="dropdown-item" value="TS10">TS10</option>
                                                        <option class="dropdown-item" value="TS20">TS20</option>
                                                        <option class="dropdown-item" value="TS30">TS30</option>
                                                        <option class="dropdown-item" value="TS40">TS40</option>
                                                        <option class="dropdown-item" value="TS50">TS50</option>
                                                        <option class="dropdown-item" value="TS60">TS60</option>
                                                        <option class="dropdown-item" value="TS70">TS70</option>
                                                        <option class="dropdown-item" value="TT99">TT99</option>
                                                        <option class="dropdown-item" value="UT10">UT10</option>
                                                        <option class="dropdown-item" value="UT20">UT20</option>
                                                        <option class="dropdown-item" value="UT30">UT30</option>
                                                        <option class="dropdown-item" value="UT40">UT40</option>
                                                        <option class="dropdown-item" value="UT50">UT50</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Of Conviction</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Date_1" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Points</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Conviction_Points_1" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item" value="None">None</option>
                                                        <option class="dropdown-item" value="1">1</option>
                                                        <option class="dropdown-item" value="2">2</option>
                                                        <option class="dropdown-item" value="3">3</option>
                                                        <option class="dropdown-item" value="4">4</option>
                                                        <option class="dropdown-item" value="5">5</option>
                                                        <option class="dropdown-item" value="6">6</option>
                                                        <option class="dropdown-item" value="7">7</option>
                                                        <option class="dropdown-item" value="8">8</option>
                                                        <option class="dropdown-item" value="9">9</option>
                                                        <option class="dropdown-item" value="10">10</option>
                                                        <option class="dropdown-item" value="11">11</option>
                                                        <option class="dropdown-item" value="12">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Fine(£) - if any:</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Fine_1" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Ban(months) - if any:</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Ban_1" type="text" class="form-control">
                                            </div>
                                            <div id="addanotherconvictionAdditionalDriver3" style="display:block;">
                                                <a onclick="addanothermotorConvictionListAdditionalDriver2();">
                                                    <h6><span class="fa fa-plus"></span>Additional Conviction</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="MotorConvictionAdditionalDriver22" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>2</h6>
                                            <div class="form-group">
                                                <label>Conviction Code</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Conviction_Code_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option value="0" class="dropdown-item">- Please select -</option>
                                                        <option class="dropdown-item" value="AC10">AC10</option>
                                                        <option class="dropdown-item" value="AC20">AC20</option>
                                                        <option class="dropdown-item" value="AC30">AC30</option>
                                                        <option class="dropdown-item" value="AC99">AC99</option>
                                                        <option class="dropdown-item" value="BA10">BA10</option>
                                                        <option class="dropdown-item" value="BA20">BA20</option>
                                                        <option class="dropdown-item" value="BA30">BA30</option>
                                                        <option class="dropdown-item" value="BA99">BA99</option>
                                                        <option class="dropdown-item" value="CD10">CD10</option>
                                                        <option class="dropdown-item" value="CD20">CD20</option>
                                                        <option class="dropdown-item" value="CD30">CD30</option>
                                                        <option class="dropdown-item" value="CD40">CD40</option>
                                                        <option class="dropdown-item" value="CD50">CD50</option>
                                                        <option class="dropdown-item" value="CD60">CD60</option>
                                                        <option class="dropdown-item" value="CD70">CD70</option>
                                                        <option class="dropdown-item" value="CD80">CD80</option>
                                                        <option class="dropdown-item" value="CD90">CD90</option>
                                                        <option class="dropdown-item" value="CD99">CD99</option>
                                                        <option class="dropdown-item" value="CU10">CU10</option>
                                                        <option class="dropdown-item" value="CU20">CU20</option>
                                                        <option class="dropdown-item" value="CU30">CU30</option>
                                                        <option class="dropdown-item" value="CU40">CU40</option>
                                                        <option class="dropdown-item" value="CU50">CU50</option>
                                                        <option class="dropdown-item" value="CU60">CU60</option>
                                                        <option class="dropdown-item" value="CU80">CU80</option>
                                                        <option class="dropdown-item" value="DD10">DD10</option>
                                                        <option class="dropdown-item" value="DD20">DD20</option>
                                                        <option class="dropdown-item" value="DD30">DD30</option>
                                                        <option class="dropdown-item" value="DD40">DD40</option>
                                                        <option class="dropdown-item" value="DD50">DD50</option>
                                                        <option class="dropdown-item" value="DD60">DD60</option>
                                                        <option class="dropdown-item" value="DD70">DD70</option>
                                                        <option class="dropdown-item" value="DD80">DD80</option>
                                                        <option class="dropdown-item" value="DD90">DD90</option>
                                                        <option class="dropdown-item" value="DR10">DR10</option>
                                                        <option class="dropdown-item" value="DR20">DR20</option>
                                                        <option class="dropdown-item" value="DR30">DR30</option>
                                                        <option class="dropdown-item" value="DR40">DR40</option>
                                                        <option class="dropdown-item" value="DR50">DR50</option>
                                                        <option class="dropdown-item" value="DR60">DR60</option>
                                                        <option class="dropdown-item" value="DR70">DR70</option>
                                                        <option class="dropdown-item" value="DR80">DR80</option>
                                                        <option class="dropdown-item" value="DR90">DR90</option>
                                                        <option class="dropdown-item" value="IN10">IN10</option>
                                                        <option class="dropdown-item" value="LC10">LC10</option>
                                                        <option class="dropdown-item" value="LC20">LC20</option>
                                                        <option class="dropdown-item" value="LC30">LC30</option>
                                                        <option class="dropdown-item" value="LC40">LC40</option>
                                                        <option class="dropdown-item" value="LC50">LC50</option>
                                                        <option class="dropdown-item" value="MS10">MS10</option>
                                                        <option class="dropdown-item" value="MS20">MS20</option>
                                                        <option class="dropdown-item" value="MS30">MS30</option>
                                                        <option class="dropdown-item" value="MS40">MS40</option>
                                                        <option class="dropdown-item" value="MS50">MS50</option>
                                                        <option class="dropdown-item" value="MS60">MS60</option>
                                                        <option class="dropdown-item" value="MS70">MS70</option>
                                                        <option class="dropdown-item" value="MS80">MS80</option>
                                                        <option class="dropdown-item" value="MS90">MS90</option>
                                                        <option class="dropdown-item" value="MS99">MS99</option>
                                                        <option class="dropdown-item" value="MW10">MW10</option>
                                                        <option class="dropdown-item" value="PC10">PC10</option>
                                                        <option class="dropdown-item" value="PC20">PC20</option>
                                                        <option class="dropdown-item" value="PC30">PC30</option>
                                                        <option class="dropdown-item" value="PL20">PL20</option>
                                                        <option class="dropdown-item" value="PL30">PL30</option>
                                                        <option class="dropdown-item" value="PL40">PL40</option>
                                                        <option class="dropdown-item" value="PL50">PL50</option>
                                                        <option class="dropdown-item" value="SP10">SP10</option>
                                                        <option class="dropdown-item" value="SP20">SP20</option>
                                                        <option class="dropdown-item" value="SP30">SP30</option>
                                                        <option class="dropdown-item" value="SP40">SP40</option>
                                                        <option class="dropdown-item" value="SP50">SP50</option>
                                                        <option class="dropdown-item" value="SP60">SP60</option>
                                                        <option class="dropdown-item" value="TS10">TS10</option>
                                                        <option class="dropdown-item" value="TS20">TS20</option>
                                                        <option class="dropdown-item" value="TS30">TS30</option>
                                                        <option class="dropdown-item" value="TS40">TS40</option>
                                                        <option class="dropdown-item" value="TS50">TS50</option>
                                                        <option class="dropdown-item" value="TS60">TS60</option>
                                                        <option class="dropdown-item" value="TS70">TS70</option>
                                                        <option class="dropdown-item" value="TT99">TT99</option>
                                                        <option class="dropdown-item" value="UT10">UT10</option>
                                                        <option class="dropdown-item" value="UT20">UT20</option>
                                                        <option class="dropdown-item" value="UT30">UT30</option>
                                                        <option class="dropdown-item" value="UT40">UT40</option>
                                                        <option class="dropdown-item" value="UT50">UT50</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Of Conviction</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Date_2" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Points</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Conviction_Points_2" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item">None</option>
                                                        <option class="dropdown-item">1</option>
                                                        <option class="dropdown-item">2</option>
                                                        <option class="dropdown-item">3</option>
                                                        <option class="dropdown-item">4</option>
                                                        <option class="dropdown-item">5</option>
                                                        <option class="dropdown-item">6</option>
                                                        <option class="dropdown-item">7</option>
                                                        <option class="dropdown-item">8</option>
                                                        <option class="dropdown-item">9</option>
                                                        <option class="dropdown-item">10</option>
                                                        <option class="dropdown-item">11</option>
                                                        <option class="dropdown-item">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Fine(£) - if any:</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Fine_2" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Ban(months) - if any:</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Ban_2" type="text" class="form-control">
                                            </div>
                                            <div id="addanotherAdditionalDriverConvictionClaim201">
                                                <a onclick="        document.getElementById('addanotherAdditionalDriverConvictionClaim201').style.display='none';
        document.getElementById('MotorConvictionAdditionalDriver203').style.display='block';">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="MotorConvictionAdditionalDriver203" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>3</h6>
                                            <div class="form-group">
                                                <label>Conviction Code</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Conviction_Code_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option value="0" class="dropdown-item">- Please select -</option>
                                                        <option class="dropdown-item" value="AC10">AC10</option>
                                                        <option class="dropdown-item" value="AC20">AC20</option>
                                                        <option class="dropdown-item" value="AC30">AC30</option>
                                                        <option class="dropdown-item" value="AC99">AC99</option>
                                                        <option class="dropdown-item" value="BA10">BA10</option>
                                                        <option class="dropdown-item" value="BA20">BA20</option>
                                                        <option class="dropdown-item" value="BA30">BA30</option>
                                                        <option class="dropdown-item" value="BA99">BA99</option>
                                                        <option class="dropdown-item" value="CD10">CD10</option>
                                                        <option class="dropdown-item" value="CD20">CD20</option>
                                                        <option class="dropdown-item" value="CD30">CD30</option>
                                                        <option class="dropdown-item" value="CD40">CD40</option>
                                                        <option class="dropdown-item" value="CD50">CD50</option>
                                                        <option class="dropdown-item" value="CD60">CD60</option>
                                                        <option class="dropdown-item" value="CD70">CD70</option>
                                                        <option class="dropdown-item" value="CD80">CD80</option>
                                                        <option class="dropdown-item" value="CD90">CD90</option>
                                                        <option class="dropdown-item" value="CD99">CD99</option>
                                                        <option class="dropdown-item" value="CU10">CU10</option>
                                                        <option class="dropdown-item" value="CU20">CU20</option>
                                                        <option class="dropdown-item" value="CU30">CU30</option>
                                                        <option class="dropdown-item" value="CU40">CU40</option>
                                                        <option class="dropdown-item" value="CU50">CU50</option>
                                                        <option class="dropdown-item" value="CU60">CU60</option>
                                                        <option class="dropdown-item" value="CU80">CU80</option>
                                                        <option class="dropdown-item" value="DD10">DD10</option>
                                                        <option class="dropdown-item" value="DD20">DD20</option>
                                                        <option class="dropdown-item" value="DD30">DD30</option>
                                                        <option class="dropdown-item" value="DD40">DD40</option>
                                                        <option class="dropdown-item" value="DD50">DD50</option>
                                                        <option class="dropdown-item" value="DD60">DD60</option>
                                                        <option class="dropdown-item" value="DD70">DD70</option>
                                                        <option class="dropdown-item" value="DD80">DD80</option>
                                                        <option class="dropdown-item" value="DD90">DD90</option>
                                                        <option class="dropdown-item" value="DR10">DR10</option>
                                                        <option class="dropdown-item" value="DR20">DR20</option>
                                                        <option class="dropdown-item" value="DR30">DR30</option>
                                                        <option class="dropdown-item" value="DR40">DR40</option>
                                                        <option class="dropdown-item" value="DR50">DR50</option>
                                                        <option class="dropdown-item" value="DR60">DR60</option>
                                                        <option class="dropdown-item" value="DR70">DR70</option>
                                                        <option class="dropdown-item" value="DR80">DR80</option>
                                                        <option class="dropdown-item" value="DR90">DR90</option>
                                                        <option class="dropdown-item" value="IN10">IN10</option>
                                                        <option class="dropdown-item" value="LC10">LC10</option>
                                                        <option class="dropdown-item" value="LC20">LC20</option>
                                                        <option class="dropdown-item" value="LC30">LC30</option>
                                                        <option class="dropdown-item" value="LC40">LC40</option>
                                                        <option class="dropdown-item" value="LC50">LC50</option>
                                                        <option class="dropdown-item" value="MS10">MS10</option>
                                                        <option class="dropdown-item" value="MS20">MS20</option>
                                                        <option class="dropdown-item" value="MS30">MS30</option>
                                                        <option class="dropdown-item" value="MS40">MS40</option>
                                                        <option class="dropdown-item" value="MS50">MS50</option>
                                                        <option class="dropdown-item" value="MS60">MS60</option>
                                                        <option class="dropdown-item" value="MS70">MS70</option>
                                                        <option class="dropdown-item" value="MS80">MS80</option>
                                                        <option class="dropdown-item" value="MS90">MS90</option>
                                                        <option class="dropdown-item" value="MS99">MS99</option>
                                                        <option class="dropdown-item" value="MW10">MW10</option>
                                                        <option class="dropdown-item" value="PC10">PC10</option>
                                                        <option class="dropdown-item" value="PC20">PC20</option>
                                                        <option class="dropdown-item" value="PC30">PC30</option>
                                                        <option class="dropdown-item" value="PL20">PL20</option>
                                                        <option class="dropdown-item" value="PL30">PL30</option>
                                                        <option class="dropdown-item" value="PL40">PL40</option>
                                                        <option class="dropdown-item" value="PL50">PL50</option>
                                                        <option class="dropdown-item" value="SP10">SP10</option>
                                                        <option class="dropdown-item" value="SP20">SP20</option>
                                                        <option class="dropdown-item" value="SP30">SP30</option>
                                                        <option class="dropdown-item" value="SP40">SP40</option>
                                                        <option class="dropdown-item" value="SP50">SP50</option>
                                                        <option class="dropdown-item" value="SP60">SP60</option>
                                                        <option class="dropdown-item" value="TS10">TS10</option>
                                                        <option class="dropdown-item" value="TS20">TS20</option>
                                                        <option class="dropdown-item" value="TS30">TS30</option>
                                                        <option class="dropdown-item" value="TS40">TS40</option>
                                                        <option class="dropdown-item" value="TS50">TS50</option>
                                                        <option class="dropdown-item" value="TS60">TS60</option>
                                                        <option class="dropdown-item" value="TS70">TS70</option>
                                                        <option class="dropdown-item" value="TT99">TT99</option>
                                                        <option class="dropdown-item" value="UT10">UT10</option>
                                                        <option class="dropdown-item" value="UT20">UT20</option>
                                                        <option class="dropdown-item" value="UT30">UT30</option>
                                                        <option class="dropdown-item" value="UT40">UT40</option>
                                                        <option class="dropdown-item" value="UT50">UT50</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Of Conviction</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Date_3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Points</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Conviction_Points_3" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item">None</option>
                                                        <option class="dropdown-item">1</option>
                                                        <option class="dropdown-item">2</option>
                                                        <option class="dropdown-item">3</option>
                                                        <option class="dropdown-item">4</option>
                                                        <option class="dropdown-item">5</option>
                                                        <option class="dropdown-item">6</option>
                                                        <option class="dropdown-item">7</option>
                                                        <option class="dropdown-item">8</option>
                                                        <option class="dropdown-item">9</option>
                                                        <option class="dropdown-item">10</option>
                                                        <option class="dropdown-item">11</option>
                                                        <option class="dropdown-item">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Fine(£) - if any:</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Fine_3" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Ban(months) - if any:</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Ban_3" type="text" class="form-control">
                                            </div>
                                            <div id="addanotherAdditionalDriverConvictionClaim202">
                                                <a onclick="        document.getElementById('addanotherAdditionalDriverConvictionClaim202').style.display='none';
        document.getElementById('MotorConvictionAdditionalDriver204').style.display='block';">
                                                    <h6><span class="fa fa-plus"></span>Additional Incident</h6>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="MotorConvictionAdditionalDriver204" style="display: none;">
                                    <div class="bg-dark" style="color: white;">
                                        <div style="padding: 10px; margin-top: 10px;">
                                            <h6>4</h6>
                                            <div class="form-group">
                                                <label>Conviction Code</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Conviction_Code_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option value="0" class="dropdown-item">- Please select -</option>
                                                        <option class="dropdown-item" value="AC10">AC10</option>
                                                        <option class="dropdown-item" value="AC20">AC20</option>
                                                        <option class="dropdown-item" value="AC30">AC30</option>
                                                        <option class="dropdown-item" value="AC99">AC99</option>
                                                        <option class="dropdown-item" value="BA10">BA10</option>
                                                        <option class="dropdown-item" value="BA20">BA20</option>
                                                        <option class="dropdown-item" value="BA30">BA30</option>
                                                        <option class="dropdown-item" value="BA99">BA99</option>
                                                        <option class="dropdown-item" value="CD10">CD10</option>
                                                        <option class="dropdown-item" value="CD20">CD20</option>
                                                        <option class="dropdown-item" value="CD30">CD30</option>
                                                        <option class="dropdown-item" value="CD40">CD40</option>
                                                        <option class="dropdown-item" value="CD50">CD50</option>
                                                        <option class="dropdown-item" value="CD60">CD60</option>
                                                        <option class="dropdown-item" value="CD70">CD70</option>
                                                        <option class="dropdown-item" value="CD80">CD80</option>
                                                        <option class="dropdown-item" value="CD90">CD90</option>
                                                        <option class="dropdown-item" value="CD99">CD99</option>
                                                        <option class="dropdown-item" value="CU10">CU10</option>
                                                        <option class="dropdown-item" value="CU20">CU20</option>
                                                        <option class="dropdown-item" value="CU30">CU30</option>
                                                        <option class="dropdown-item" value="CU40">CU40</option>
                                                        <option class="dropdown-item" value="CU50">CU50</option>
                                                        <option class="dropdown-item" value="CU60">CU60</option>
                                                        <option class="dropdown-item" value="CU80">CU80</option>
                                                        <option class="dropdown-item" value="DD10">DD10</option>
                                                        <option class="dropdown-item" value="DD20">DD20</option>
                                                        <option class="dropdown-item" value="DD30">DD30</option>
                                                        <option class="dropdown-item" value="DD40">DD40</option>
                                                        <option class="dropdown-item" value="DD50">DD50</option>
                                                        <option class="dropdown-item" value="DD60">DD60</option>
                                                        <option class="dropdown-item" value="DD70">DD70</option>
                                                        <option class="dropdown-item" value="DD80">DD80</option>
                                                        <option class="dropdown-item" value="DD90">DD90</option>
                                                        <option class="dropdown-item" value="DR10">DR10</option>
                                                        <option class="dropdown-item" value="DR20">DR20</option>
                                                        <option class="dropdown-item" value="DR30">DR30</option>
                                                        <option class="dropdown-item" value="DR40">DR40</option>
                                                        <option class="dropdown-item" value="DR50">DR50</option>
                                                        <option class="dropdown-item" value="DR60">DR60</option>
                                                        <option class="dropdown-item" value="DR70">DR70</option>
                                                        <option class="dropdown-item" value="DR80">DR80</option>
                                                        <option class="dropdown-item" value="DR90">DR90</option>
                                                        <option class="dropdown-item" value="IN10">IN10</option>
                                                        <option class="dropdown-item" value="LC10">LC10</option>
                                                        <option class="dropdown-item" value="LC20">LC20</option>
                                                        <option class="dropdown-item" value="LC30">LC30</option>
                                                        <option class="dropdown-item" value="LC40">LC40</option>
                                                        <option class="dropdown-item" value="LC50">LC50</option>
                                                        <option class="dropdown-item" value="MS10">MS10</option>
                                                        <option class="dropdown-item" value="MS20">MS20</option>
                                                        <option class="dropdown-item" value="MS30">MS30</option>
                                                        <option class="dropdown-item" value="MS40">MS40</option>
                                                        <option class="dropdown-item" value="MS50">MS50</option>
                                                        <option class="dropdown-item" value="MS60">MS60</option>
                                                        <option class="dropdown-item" value="MS70">MS70</option>
                                                        <option class="dropdown-item" value="MS80">MS80</option>
                                                        <option class="dropdown-item" value="MS90">MS90</option>
                                                        <option class="dropdown-item" value="MS99">MS99</option>
                                                        <option class="dropdown-item" value="MW10">MW10</option>
                                                        <option class="dropdown-item" value="PC10">PC10</option>
                                                        <option class="dropdown-item" value="PC20">PC20</option>
                                                        <option class="dropdown-item" value="PC30">PC30</option>
                                                        <option class="dropdown-item" value="PL20">PL20</option>
                                                        <option class="dropdown-item" value="PL30">PL30</option>
                                                        <option class="dropdown-item" value="PL40">PL40</option>
                                                        <option class="dropdown-item" value="PL50">PL50</option>
                                                        <option class="dropdown-item" value="SP10">SP10</option>
                                                        <option class="dropdown-item" value="SP20">SP20</option>
                                                        <option class="dropdown-item" value="SP30">SP30</option>
                                                        <option class="dropdown-item" value="SP40">SP40</option>
                                                        <option class="dropdown-item" value="SP50">SP50</option>
                                                        <option class="dropdown-item" value="SP60">SP60</option>
                                                        <option class="dropdown-item" value="TS10">TS10</option>
                                                        <option class="dropdown-item" value="TS20">TS20</option>
                                                        <option class="dropdown-item" value="TS30">TS30</option>
                                                        <option class="dropdown-item" value="TS40">TS40</option>
                                                        <option class="dropdown-item" value="TS50">TS50</option>
                                                        <option class="dropdown-item" value="TS60">TS60</option>
                                                        <option class="dropdown-item" value="TS70">TS70</option>
                                                        <option class="dropdown-item" value="TT99">TT99</option>
                                                        <option class="dropdown-item" value="UT10">UT10</option>
                                                        <option class="dropdown-item" value="UT20">UT20</option>
                                                        <option class="dropdown-item" value="UT30">UT30</option>
                                                        <option class="dropdown-item" value="UT40">UT40</option>
                                                        <option class="dropdown-item" value="UT50">UT50</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Of Conviction</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Date_4" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Points</label>
                                                <br>
                                                <div class="btn-group form-group text-left">
                                                    <select name="Additional_Driver_2_Personal_Conviction_Points_4" class="btn dropdown-toggle btn-light" data-toggle="dropdown">
                                                        <option class="dropdown-item" value="">- Please select -</option>
                                                        <option class="dropdown-item">None</option>
                                                        <option class="dropdown-item">1</option>
                                                        <option class="dropdown-item">2</option>
                                                        <option class="dropdown-item">3</option>
                                                        <option class="dropdown-item">4</option>
                                                        <option class="dropdown-item">5</option>
                                                        <option class="dropdown-item">6</option>
                                                        <option class="dropdown-item">7</option>
                                                        <option class="dropdown-item">8</option>
                                                        <option class="dropdown-item">9</option>
                                                        <option class="dropdown-item">10</option>
                                                        <option class="dropdown-item">11</option>
                                                        <option class="dropdown-item">12</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Fine(£) - if any:</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Fine_4" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Ban(months) - if any:</label>
                                                <input name="Additional_Driver_2_Personal_Conviction_Ban_4" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Additional Comments</label>
                        <input id="AdditionalComment" name="Additional_Comments" type="text" class="form-control">
                    </div>
                    <div class="form-group" style="padding-top: 10px;">
                        <label>Do you agree to our  <a href="/Terms.html">Terms &amp; Conditions</a> &amp; <a href="/privacy.html">Privacy Policy</a><span class="fa fa-asterisk" style="vertical-align:text-top;font-size: 9px;color:red;"></span></label>
                        <br>
                        <div class="btn-group form-group text-left">
                            <select id="agreeToTerms" name="Agree_To_Terms" class="btn dropdown-toggle btn-light" required data-toggle="dropdown">
                                <option class="dropdown-item" value="">- Please select -</option>
                                <option value="I agree" class="dropdown-item">I Agree</option>
                            </select>
                        </div>
                    </div>
                    <p id="ValMessage4" style="color: red;"></p>
                    <div class="container text-center">
                        <div class="row">
                            <button style="height: 38px; margin-top: 38px;" class="col-md-5 btn btn-orange btn-block" onclick="
                        document.getElementById('ValMessage3').style.display='none';
                        document.getElementById('Step3').style.display='block';
                        document.getElementById('Step4').style.display='none';
                        window.scrollTo(0,0);
                        " type="button">Previous</button>
                            <button style="height: 38px; margin-top: 38px;" class="col-md-5 btn btn-orange btn-block" onclick="nextStep3();" name="submit" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



<div class="bg-dark text-white text-uppercase">
    <div class="container">
        <div class="row">
            <div class="p-4 col-md-6">
                <h2 class="mb-4 text-orange text-uppercase">Our Specialities
                    <br> </h2>
                <div class="box">
                    <h3> </h3>
                    <p></p>
                    <ul>
                        <li> WE ARE AN INDEPENDENT PRICE SEARCHER</li>
                        <li> WORK ON YOUR SIDE WITH YOUR CONSENT TO FIND YOU A REASONALBE PRICES FOR ANYTHING FROM ONLINE AND OFFLINE MARKET.</li>
                        <li>IF YOU CAN’T SPEAK ENGLISH AND NOT GOOD AT COMPUTERS OR NOT QUIET FAMILIAR WITH INTERNET WORLD, THEN CONTACT US TO SPEAK WITH OUR MULTILINGUAL FRIENDLY STAFFS WHO WILL BE HAPPY TO SERVE YOU.</li>

                    </ul>
                    <p></p>
                </div>
            </div>

            <div class="p-4 col-md-6">
                <h2 class="mb-4 text-orange"></h2>
                <class="text-white">
                <ul><li>WE DO NOT WORK AS A BROKER OR AGENT FOR ANY SPECIFIC COMPANY. HOWEVER, ALL YOUR INFORMATION ARE PROTECTED UNDER THE 'DATA PROTECTION ACT 1998 AND UNDER THE GENERAL DATA PROTECTION REGULATION (GDPR).</li><br>

                    <li> The Setup process easy and smooth.</li>
                    <li> We do not promote Nuisance Calls.</li>
                    <li> We do not share any of your information with the third        parties.</li></ul>
            </div>
        </div>
        <div class="text-center">
            <p> &nbsp;
                <a style="color: #3380ff;" href="mailto:quotes@broadinsurance.co.uk"></a>
            </p>
            <p>For More Information, contact us on :&nbsp;
                <a style="color: #3380ff;" href="mailto:info@broadinsurance.co.uk">info@broadinsurance.co.uk</a>
            </p>
            <p>
                <a style="color: #3380ff;" href="/terms.php">Terms &amp; Conditions</a> and
                <a style="color: #3380ff;" href="/privacy.php">Privacy Policy</a>
            </p>
            <p>Optionally, you can ring us from 9am - 6pm (Monday - Saturday) :&nbsp;
                <a style="color: #3380ff;" href="tel:03301132101">0330 113 0505</a>
            </p>
            <img style="width: 600px; height: 100px;" src="/images/icons/brand-logo.png">

            <div class="row">
                <div class="col-md-12 mt-3">
                    <p class="text-white text-center" style="font-size: 12px;"><small>Broad Insure Limited(Trading as Broad Searcher). Registered in England &amp; Wales, Company Number: 10833649, Registered Office: SUIT F5, WESTWOOD BUSINESS CENTRE, REGENCY HOUSE, WESTWOOD ROAD, LONDON, IG3 8SB. <br>
                            Broad Insure Limited (Trading as Broad Searcher). Is registered with the Information Commissioner's Office (Registration number: ZA263319), authorised to process personal data under Data Protection Act 1998. </small></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <p class="text-white text-left">© Copyright 2019 Broad Searcher - All rights reserved. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="\js\Car-insurance.js"></script>
</body>

</html>