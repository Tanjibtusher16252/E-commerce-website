
    function jsValid() 
    { 
  
        var username = document.forms["LoginForm"]["username"].value;
        var password = document.forms["LoginForm"]["password"].value;
 
 
        if (username === "" ) 
        {
            document.getElementById('UsernameErr').innerHTML = "Username can not be empty.";
            return false;
        } 

        if (password === "" ) 
        {
            document.getElementById('PasswordErr').innerHTML = "password can not be empty.";
            return false;
        } 
 
    }