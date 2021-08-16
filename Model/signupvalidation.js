 function jsValid() 
    { 
 
        var fname = document.forms["RegistrationForm"]["fname"].value;
        var lname = document.forms["RegistrationForm"]["lname"].value;
        var gender = document.forms["RegistrationForm"]["Gender"].value;
        var dob = document.forms["RegistrationForm"]["DOB"].value;
        var religion = document.forms["RegistrationForm"]["Religion"].value;
        var preAddress = document.forms["RegistrationForm"]["Presentaddress"].value;
        var perAddress = document.forms["RegistrationForm"]["Permanentaddress"].value;
        var phone = document.forms["RegistrationForm"]["phone"].value;
        var email = document.forms["RegistrationForm"]["Email"].value;
        var website = document.forms["RegistrationForm"]["Website"].value;
        var username = document.forms["RegistrationForm"]["Username"].value;
        var password = document.forms["RegistrationForm"]["Password"].value;
 
  

        if (fname === "" || fname.length > 15) 
        {
            document.getElementById('FirstnameErr').innerHTML = "Firstname can not be empty or > 15 Character.....";
            return false;
        } 
        if (lname === "" || lname.length > 15) 
        {
            document.getElementById('LastnameErr').innerHTML = "Lastname can not be empty or > 15 Character.";
            return false;
        } 
        if (gender === "") 
        {
            document.getElementById('GenderErr').innerHTML = "gender can not be empty..";
            return false;
        } 
        if (dob === "") 
        {
            document.getElementById('DOBErr').innerHTML = "dob can not be empty.";
            return false;
        } 
        if (religion === "" || religion.length > 15) 
        {
            document.getElementById('ReligionErr').innerHTML = "Religion can not be empty or > 15 Character.";
            return false;
        } 
        if (preAddress.length > 100) 
        {
            document.getElementById('Present_AddressErr').innerHTML = "Present Address can not be > 100 Character.";
            return false;
        } 
        if (perAddress.length > 100) 
        {
            document.getElementById('Permanent_AddressErr').innerHTML = "Permanent Address can not be > 100 Character.";
            return false;
        } 
        if (phone === "" || phone.length > 15) 
        {
            document.getElementById('PhoneErr').innerHTML = "Phone can not be empty or > 15 Character.";
            return false;
        } 
        if (email === "" || email.length > 30) 
        {
            document.getElementById('EmailErr').innerHTML = "Email can not be empty or > 30 Character.";
            return false;
        } 
        if (website === "" || website.length > 50) 
        {
            document.getElementById('WebsiteErr').innerHTML = "website can not be empty or > 50 Character.";
            return false;
        } 
        if (username === "" || username.length > 15) 
        {
            document.getElementById('UsernameErr').innerHTML = "Username can not be empty or > 15 Character.";
            return false;
        } 

        if (password === "" || password.length > 15) 
        {
            document.getElementById('PasswordErr').innerHTML = "password can not be empty or > 15 Character.";
            return false;
        } 
 
    }