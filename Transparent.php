<?php include('mansi.php');?>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Login
        </title>
        <link rel="stylesheet" href="form.css">

    </head>
    <body>
        
        <div class="login-box">
         <h1> LOGIN </h1>
           <form  onsubmit="return validation()" method="POST">
            <span id="username" class="text-danger font-weight-bold"></span>
            <div class="textbox">
                <input type="text" placeholder="Name" id="user" autocomplete="off" name="username">
            </div>
            <span id="emailid" class="text-danger font-weight-bold"></span>
            <div class="textbox">
                <input type="text" placeholder="Email" id="email" autocomplete="off" name="emailid">
            </div>
            <span id="mobilen" class="text-danger font-weight-bold"></span>
            <div class="textbox">
                <input type="number" placeholder="Mobile Number" id="mobile" autocomplete="off" name="phoneno">
           </div>
           <span id="add" class="text-danger font-weight-bold"></span>
            <div class="textbox">    
                <input type="text" placeholder="Address" id="address" autocomplete="off" name="addr">
            </div>
            <span id="passn" class="text-danger font-weight-bold"></span>
            <div class="textbox">           
                <input type="password" placeholder="password" id="pass" id="password" name="pass">
            </div>
            <!-- <div class="bob"> -->
                <input type="submit" class="bob" name="sign_in" value="Sign in">
            <!-- </div> -->
         </form>

        </div>
     

<script>
 function validation(){
    var user = document.getElementById('user').value;
    var email = document.getElementById('email').value;
    var mobile  = document.getElementById('mobile').value;
    var address = document.getElementById('address').value;
    var pass = document.getElementById('pass').value;
    if(user == ""){
     document.getElementById('username').innerHTML ="**Please enter your name**";
     return false;
     }
     if(email == ""){
     document.getElementById('emailid').innerHTML ="**Please enter your email**";
     return false;
     }
     if(mobile == ""){
     document.getElementById('mobilen').innerHTML ="**Please enter your mobile**";
     return false;
     }
     if(address == ""){
     document.getElementById('add').innerHTML ="**Please enter your address**";
     return false;
     }
     if(pass == ""){
     document.getElementById('passn').innerHTML ="**Please enter your email**";
     return false;
     }
    
}
</script>
    </body>
</html>