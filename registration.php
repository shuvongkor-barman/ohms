<?php
session_start();
$_SESSION['message'] = '';

$mysqli = new mysqli('localhost', 'root', 'rootpassword', 'diuohmsx_hostel');



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // two password are equal to each other
    if($_POST['password']== $_POST['confirm_password']) {

		$regno = $mysqli->real_escape_string($_POST['regno']);
		$fname = $mysqli->real_escape_string($_POST['fname']);
		$mname = $mysqli->real_escape_string($_POST['mname']);
		$lname = $mysqli->real_escape_string($_POST['lname']);
		$gender = $_POST['gender'];
		$contactno = $mysqli->real_escape_string($_POST['contactno']);
		$emailid = $mysqli->real_escape_string($_POST['emailid']);
		// $password = md5($_POST['password']); // Encrypted Secure Password
		$password = $_POST['password'];


        
        $sql = "INSERT INTO userregistration (regNo, firstName, middleName, lastName, gender, contactNo, email, password)"
				. "VALUES ('$regno', '$fname', '$mname', '$lname', '$gender', '$contactno', '$emailid', '$password')";
                
                // If sthe query is successful, redirect to welcom.php page, done!

                if($mysqli->query($sql) === true){
                    $_SESSION['message'] = "Registration succesful! Added $emailid to the database.";
                }

                else {
                  $_SESSION['message'] = "User could not be added to the database!";
              }

            }

            else {
                $_SESSION['message'] = "Two Password do not match!";
            }

        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form for Students</title>

    <!-- Main css -->
	<link rel="stylesheet" href="css/login_style.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

</head>

<body class="bg-image">


<!-- ##### Header Area Start ##### -->
<header class="header-area">
<a href="index.html"><img src="img/core-img/logo.png" class="diu-logo alt="></a>

</header>
<!-- ##### Header Area End ##### -->

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
						<h2 class="form-title">Create account</h2>
                        
                        <div class="welcomeMsg"><?= $_SESSION['message'] ?></div>

						<div class="form-group">
                            <input type="text" class="form-input" name="regno" id="regno" placeholder="Registration No *" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fname" id="fname" placeholder="First Name *" required/>
						</div>
						<div class="form-group">
                            <input type="text" class="form-input" name="mname" id="mname" placeholder="Middle Name"/>
                        </div>
						<div class="form-group">
                            <input type="text" class="form-input" name="lname" id="lname" placeholder="Last Name *"/>
						</div>
						


					    <div class="form-group">
							<div class="col-sm-8">
							<select name="gender" class="form-input">
							<option value="">Select Gender *</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="others">Others</option>
							</select>
							</div>
						</div>

						<div class="form-group">
                            <input type="text" class="form-input" name="contactno" id="contactno" placeholder="Contact No *" required/>
                        </div>


                        <div class="form-group">
                            <input type="email" class="form-input" name="emailid" id="emailid" placeholder="Your Email *" required/>
                            
                            
                            <span id="user-availability-status" style="font-size:12px;"></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required onmousemove="checkPass()"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password" onclick="showHidePass()"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="confirm_password" id="confirm_password" placeholder="Confirm your password" required onBlur="checkPass()"/>
                        
                        <span id="passwordWarning"></span>
                        </div>                        
						
						<input type="checkbox" class="form-input">
						
						<div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
					</form>

								



                    <p class="loginhere">
                        Already have an account ? <a href="login.php" class="loginhere-link">Login here</a>                        
                    </p>
                    <a href="index.html" class="cancel-button"><p class="cancel-button-text">Cancel</p></a>
                </div>
            </div>
        </section>

    </div>
    
    <!-- JS -->

</body>


<script>

function showHidePass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


function checkPass(){
    var passwordOnce = document.getElementById('password').value;
    var passwordTwice = document.getElementById('confirm_password').value;
    var password_msg = document.getElementById('passwordWarning');
    
    if(passwordTwice != ""  && passwordOnce == passwordTwice){
        password_msg.innerHTML = "Password matched";       
    }
    else if(passwordTwice != "" && passwordOnce !== passwordTwice){
        password_msg.innerHTML = "Password do not match! Try Again";       
    }

    else if(passwordTwice == ""){
        password_msg.innerHTML = "";       
    }
    
    else{
        password_msg.innerHTML = "";       
    }
}

</script>

</html>








