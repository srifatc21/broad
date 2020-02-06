

function nextStep1() {
    var declined = document.getElementById("declined");
    var title = document.getElementById("title");
    var firstName = document.getElementById("firstName").value;
    var surname = document.getElementById("surname").value;
    var dateofBirth = document.getElementById("dateofBirth").value;
    var houseNumber = document.getElementById("houseNumber").value;
    var addressFirsLine = document.getElementById("addressFirsLine").value;
    var postcode = document.getElementById("postcode").value;
    var maritalStatus = document.getElementById("maritalStatus");
    var employmentStatus = document.getElementById("employmentStatus");
    var homeOwner = document.getElementById("homeOwner");
    var children = document.getElementById("children");
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;

    var insuranceDeclinedOption = declined.options[declined.selectedIndex].value;
    var PersonalTitleOption = title.options[title.selectedIndex].value;
    var PersonalMaritalStatusOption = maritalStatus.options[maritalStatus.selectedIndex].value;
    var PersonalEmploymentStatusOption = employmentStatus.options[employmentStatus.selectedIndex].value;
    var AreYouAHomeOwnerOption = homeOwner.options[homeOwner.selectedIndex].value;
    var ChildrenUnderAgeOf16Option = children.options[children.selectedIndex].value;

    var ValMessage1 = document.getElementById("ValMessage1").innerHTML = "Oops you've missed some information, please check for the red box";


    if(insuranceDeclinedOption == "0")
    {
        ValMessage1;
        document.getElementById('declined').style.borderColor = "red";
    }
    if(PersonalTitleOption == "0")
    {
        ValMessage1;
        document.getElementById('title').style.borderColor = "red";
    }
    if(PersonalMaritalStatusOption == "0")
    {
        ValMessage1;
        document.getElementById('maritalStatus').style.borderColor = "red";
    }
    if(PersonalEmploymentStatusOption == "0")
    {
        ValMessage1;
        document.getElementById('employmentStatus').style.borderColor = "red";
    }
    if(AreYouAHomeOwnerOption == "0")
    {
        ValMessage1;
        document.getElementById('homeOwner').style.borderColor = "red";
    }
    if(ChildrenUnderAgeOf16Option == "0")
    {
        ValMessage1;
        document.getElementById('children').style.borderColor = "red";
    }
    if(firstName == "")
    {
        ValMessage1;
        document.getElementById('firstName').style.borderColor = "red";
    }
    if(surname == "")
    {
        ValMessage1;
        document.getElementById('surname').style.borderColor = "red";
    }
    if(dateofBirth == "")
    {
        ValMessage1;
        document.getElementById('dateofBirth').style.borderColor = "red";
    }
    if(postcode == "")
    {
        ValMessage1;
        document.getElementById('postcode').style.borderColor = "red";
    }
    if(houseNumber == "")
    {
        ValMessage1;
        document.getElementById('houseNumber').style.borderColor = "red";
    }
    if(addressFirsLine == "")
    {
        ValMessage1;
        document.getElementById('addressFirsLine').style.borderColor = "red";
    }
    if(email == "")
    {
        ValMessage1;
        document.getElementById('email').style.borderColor = "red";
    }
    if(mobile == "")
    {
        ValMessage1;
        document.getElementById('mobile').style.borderColor = "red";
    }

    else
    {
        document.getElementById('Step1').style.display='none';
        document.getElementById('Step2').style.display='block';
        document.getElementById('Car-insurance-progress-bar-2').style.backgroundColor='#0071bc';
        document.getElementById('Car-insurance-progress-bar-2').style.color='white';
        window.scrollTo(0, 0);
    }
}

function nextStep2() {
    var licenceType = document.getElementById("licenceType");
    var licencePeriod = document.getElementById("licencePeriod");
    var enterLicenceNumber = document.getElementById("enterLicenceNumber").value;
    var DVLAmedical = document.getElementById("DVLAmedical");
    var driverQualifications = document.getElementById("driverQualifications");
    var bornPlace = document.getElementById("bornPlace");
    var otherVehicles = document.getElementById("otherVehicles");
    var DVLA = document.getElementById("DVLA");
    var driverDetails = document.getElementById("driverDetails");

    var licenceTypeOption = licenceType.options[licenceType.selectedIndex].value;
    var licencePeriodOption = licencePeriod.options[licencePeriod.selectedIndex].value;
    var DVLAmedicalOption = DVLAmedical.options[DVLAmedical.selectedIndex].value;
    var driverQualificationsOption = driverQualifications.options[driverQualifications.selectedIndex].value;
    var bornPlaceOption = bornPlace.options[bornPlace.selectedIndex].value;
    var otherVehiclesOption = otherVehicles.options[otherVehicles.selectedIndex].value;
    var DVLAOption = DVLA.options[DVLA.selectedIndex].value;
    var driverDetailsOption = driverDetails.options[driverDetails.selectedIndex].value;

    var ValMessage2 = document.getElementById("ValMessage2").innerHTML = "Oops you've missed some information, please check for the red box";

    if(licenceTypeOption == "0")
    {
        ValMessage2;
        document.getElementById('licenceType').style.borderColor = "red";
    }
    if(licencePeriodOption == "0")
    {
        ValMessage2;
        document.getElementById('licencePeriod').style.borderColor = "red";
    }
    if(enterLicenceNumber == "")
    {
        ValMessage2;
        document.getElementById('enterLicenceNumber').style.borderColor = "red";
    }
    if(DVLAmedicalOption == "0")
    {
        ValMessage2;
        document.getElementById('DVLAmedical').style.borderColor = "red";
    }
    if(driverQualificationsOption == "0")
    {
        ValMessage2;
        document.getElementById('driverQualifications').style.borderColor = "red";
    }
    if(bornPlaceOption == "0")
    {
        ValMessage2;
        document.getElementById('bornPlace').style.borderColor = "red";
    }
    if(otherVehiclesOption == "0")
    {
        ValMessage2;
        document.getElementById('otherVehicles').style.borderColor = "red";
    }
    if(DVLAOption == "0")
    {
        ValMessage2;
        document.getElementById('DVLA').style.borderColor = "red";
    }
    if(driverDetailsOption == "0")
    {
        ValMessage2;
        document.getElementById('driverDetails').style.borderColor = "red";
    }

    else
    {
        document.getElementById('Step2').style.display='none';
        document.getElementById('Step3').style.display='block';
        document.getElementById('Car-insurance-progress-bar-3').style.backgroundColor = '#0071bc';
        document.getElementById('Car-insurance-progress-bar-3').style.color = 'white';
        window.scrollTo(0, 0);
    }
}

function nextStep3() {
    var vehicleReg = document.getElementById("vehicleReg").value;

    //var modificationvehicle = document.querySelector('input[name="modificationvehicle"]:checked').value;

    var purchaseDate = document.getElementById("purchaseDate").value;
    //var noRecommendation = document.querySelector('input[name="noRecommendation"]:checked').value;


    var regKeeper = document.getElementById("regKeeper");
    var legalOwner = document.getElementById("legalOwner");
    var duringDay = document.getElementById("duringDay");
    var overnight = document.getElementById("overnight");
    var sameAdd = document.getElementById("sameAdd");
    var useOfVehicle = document.getElementById("useOfVehicle");

    var annualMileage = document.getElementById("annualMileage").value;

    var CoverType = document.getElementById("CoverType");
    var claimsDiscount = document.getElementById("claimsDiscount");
    var earnDiscount = document.getElementById("earnDiscount");
    var NCDearn = document.getElementById("NCDearn");
    var protectNCD = document.getElementById("protectNCD");
    var excessVoluntary = document.getElementById("excessVoluntary");
    var payInsurer = document.getElementById("payInsurer");

    var policyStart = document.getElementById("policyStart").value;


    var ValMessage3 = document.getElementById("ValMessage3").innerHTML = "Oops you've missed some information, please check for the red box";


    var regKeeperOption = regKeeper.options[regKeeper.selectedIndex].value;
    var legalOwnerOption = legalOwner.options[legalOwner.selectedIndex].value;
    var duringDayOption = duringDay.options[duringDay.selectedIndex].value;
    var overnightOption = overnight.options[overnight.selectedIndex].value;
    var sameAddOption = sameAdd.options[sameAdd.selectedIndex].value;
    var useOfVehicleOption = useOfVehicle.options[useOfVehicle.selectedIndex].value;
    var CoverTypeOption = CoverType.options[CoverType.selectedIndex].value;
    var claimsDiscountOption = claimsDiscount.options[claimsDiscount.selectedIndex].value;
    var earnDiscountOption = earnDiscount.options[earnDiscount.selectedIndex].value;
    var NCDearnOption = NCDearn.options[NCDearn.selectedIndex].value;
    var protectNCDOption = protectNCD.options[protectNCD.selectedIndex].value;
    var excessVoluntaryOption = excessVoluntary.options[excessVoluntary.selectedIndex].value;
    var payInsurerOption = payInsurer.options[payInsurer.selectedIndex].value;


    if(vehicleReg == "")
    {
        ValMessage3;
        document.getElementById('vehicleReg').style.borderColor = "red";
    }
    if(purchaseDate == "")
    {
        ValMessage3;
        document.getElementById('purchaseDate').style.borderColor = "red";
    }
    if(annualMileage == "")
    {
        ValMessage3;
        document.getElementById('annualMileage').style.borderColor = "red";
    }
    if (policyStart == "")
    {
        ValMessage3;
        document.getElementById('policyStart').style.borderColor = "red";
    }
    if (regKeeperOption == "0")
    {
        ValMessage3;
        document.getElementById('regKeeper').style.borderColor = "red";
    }
    if (legalOwnerOption == "0")
    {
        ValMessage3;
        document.getElementById('legalOwner').style.borderColor = "red";
    }
    if (duringDayOption == "0")
    {
        ValMessage3;
        document.getElementById('duringDay').style.borderColor = "red";
    }
    if (overnightOption == "0")
    {
        ValMessage3;
        document.getElementById('overnight').style.borderColor = "red";
    }
    if (sameAddOption == "0")
    {
        ValMessage3;
        document.getElementById('sameAdd').style.borderColor = "red";
    }
    if (useOfVehicleOption == "0")
    {
        ValMessage3;
        document.getElementById('useOfVehicle').style.borderColor = "red";
    }
    if (CoverTypeOption == "0")
    {
        ValMessage3;
        document.getElementById('CoverType').style.borderColor = "red";
    }
    if (claimsDiscountOption == "0")
    {
        ValMessage3;
        document.getElementById('claimsDiscount').style.borderColor = "red";
    }
    if (earnDiscountOption == "0")
    {
        ValMessage3;
        document.getElementById('earnDiscount').style.borderColor = "red";
    }
    if (NCDearnOption == "0")
    {
        ValMessage3;
        document.getElementById('NCDearn').style.borderColor = "red";
    }
    if (protectNCDOption == "0")
    {
        ValMessage3;
        document.getElementById('protectNCD').style.borderColor = "red";
    }
    if (excessVoluntaryOption == "0")
    {
        ValMessage3;
        document.getElementById('excessVoluntary').style.borderColor = "red";
    }
    if (payInsurerOption == "0")
    {
        ValMessage3;
        document.getElementById('payInsurer').style.borderColor = "red";
    }


    else
    {
        document.getElementById('Step3').style.display='none';
        document.getElementById('Step4').style.display='block';
        document.getElementById('Car-insurance-progress-bar-4').style.backgroundColor = '#0071bc';
        document.getElementById('Car-insurance-progress-bar-4').style.color = 'white';
        window.scrollTo(0, 0);
    }
}

function nextStep4() {
    //DROPDOWNS
    var agreeToTerms = document.getElementById("agreement");
    var AdditionalDriver = document.getElementById("additonalDriver");

    //ERROR MESSAGE
    var ValMessage4 = document.getElementById("ValMessage4").innerHTML = "Please Agree to the Terms";

    //DROPDOWN OPTIONS
    var agreeToTermsOption = agreeToTerms.options[agreement.selectedIndex].value;
    var AdditionalDriverOption = AdditionalDriver.options[additonalDriver.selectedIndex].value;

    //ERROR MESSAGE SENDS
    if(agreeToTermsOption == "")
    {
        ValMessage4;
        document.getElementById('agreeToTerms').style.borderColor = "red";

    }
    if(AdditionalDriverOption == "")
    {
        ValMessage4;
        document.getElementById('AdditionalDriver').style.borderColor = "red";

    }
    //NEXT STEP IF NO ERROR RETURN
    else
    {
        window.scrollTo(0, 0);
    }
}


function validateForm() {
    var x = document.forms["mainForm"]["agreement"].value;
    if (x == "") {
        alert("The terms must be agreed to in order to proceed");
        return false;
    }
}

$(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
});