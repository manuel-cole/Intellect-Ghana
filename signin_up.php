
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login & Sign Up page</title>
	
    <script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
    <script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
	
    <script>
    function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
    }
    </script>
	
    <meta charset="utf-8">
    <style type="text/css">

.style1 {
    color: #3333FF;
}
.style1 {
    font-size: 36px;
    font-weight: bold;
}
body,td,th {
    font-family: Times New Roman, Times, serif;
}
    </style>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="../../../Documents/Unnamed Site 2/style/style.css" rel="stylesheet" type="text/css">
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script>
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    </head>

<body onload="form0.reset();form1.reset();">
    <div class="container">
	<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Intellect Group</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right"  method='post' action="checklogin.php">
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input name="eemail" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>            
			</div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input name="district_pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>            
			</div>
			<button name="signin" type="submit" align="right" class="btn btn-success">Sign in</button>
			<br/>  
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </nav>
    </div>
       
      <!-- Modal -->
     <br/><br/>
          <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"></button>
                <h2 class="" align="center" style="color: #06F">New Here? Please sign up</h2>
        </div>
        <div>
            <form id="form1" name="form1" class="form-signin"   method='post' action="confirm_validation.php">
                <div class="">
                    <label for="inputFirstName" class="sr-only">First Name</label>
                    <input name="fname"  type="name" id="inputEmail"  class="form-control" placeholder="First Name" required autofocus>
                </div>
                <div class="">
                    <label for="inputMiddleName" class="sr-only">Middle Name</label>
                    <input name="mname" type="name" id="inputEmail" class="form-control" placeholder="Middle Name">
                </div>
                <div class="">
                    <label for="inputLastName" class="sr-only">Last Name</label>
                    <input name="lname" type="name" id="inputname" class="form-control" placeholder="Last Name" required>
                </div>
                <div class="">
                    <label for="inputDistrict" class="sr-only">District</label>
                    <input name="district_name" type="name" id="inputPassword" class="form-control" placeholder="District" required>
                </div>
                <div class="">
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input name="eemail" type="email" id="inputPassword" class="form-control" placeholder="Email" required>
                </div>
                <div class="">
                    <label for="inputMobilePhone" class="sr-only">Mobile Phone</label>
                    <input name="mobile_number" type="" id="inputPassword" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" placeholder="Mobile Phone" required>
                </div>
		<div class="">
                    <select name="region_name"  class="form-control" placeholder="Region"  id="region_name" required>
                        <option value="">Please Select your Region</option>
                        <option value="Greater Accra Region">Greater Accra Region</option>
                        <option value="Eastern Region">Eastern Region</option>
                        <option value="Western Region">Western Region</option>
                        <option value="Central Region">Central Region</option>
                        <option value="Ashanti Region">Ashanti Region</option>
                        <option value="Volta Region">Volta Region</option>
                        <option value="Brong Ahafo Region">Brong Ahafo Region</option>
                        <option value="Northern Region">Northern Region</option>
                        <option value="Upper West Region">Upper West Region</option>
                        <option value="Upper East Region">Upper East Region</option>
                    </select>
                </div>
                <div class="">
                    <select name="access_level"  class="form-control" placeholder="Position"  id="access_level" required>
                        <option value="">Please Select your Position</option>
                        <option value="regional_head">Regional Head</option>
                        <option value="general_user">General User</option>
                    </select>
                </div> 
                <div class="">
                    <label for="agency" class="sr-only">Agency</label>
                    <p><strong>Note:</strong> Kindly Select your agency if you are a general user</p>
                    <select name="agency" class="form-control" id="agency" >
                        <option value="">Please Select Your Agency</option>
                        <option value="Ghana Health service">Ghana Health service</option>
                        <option value="National Health Insurance Authority">National Health Insurance Authority</option>
                        <option value="National Ambulance Service">National Ambulance Service</option>
                        <option value="Foods and Drug Authority">Foods and Drug Authority</option>
                        <option value="Ghana Medical and Dental Council">Ghana Medical and Dental Council</option>
                        <option value="Pharmacy Council Ghana">Pharmacy Council Ghana</option>
                        <option value="Christian Health Association of Ghana">Christian Health Association of Ghana</option>
                        <option value="Ghana Registered Nurses and Midwives">Ghana Registered Nurses and Midwives</option>
                        <option value="Ghana National Drugs Programme">Ghana National Drugs Programme</option>
                        <option value="Private Hospitals and Maternity Homes Board">Private Hospitals and Maternity Homes Board</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="">
                    <span id="sprypassword1">
                        <label for="pwd" class="sr-only">Password</label>
                            <input name="district_pass" type="password" id="pwd" class="form-control" placeholder="Password" >
				<p><strong>Note:</strong> Your Password should be within 8-18 characters with atleast a letter and a number.</p>
				<span class="passwordRequiredMsg">A value is required.</span>
                <span class="passwordMinCharsMsg">Minimum number of characters not met.</span>
                <span class="passwordMaxCharsMsg">Exceeded maximum number of characters.</span>
                <span class="passwordInvalidStrengthMsg">The password doesn't meet the specified strength.</span>
                    </span>
                </div>
                <div class="">
                    <span id="spryconfirm1">
                        <label for="pwd2" class="sr-only">ComfirmPassword</label>
                        <input name="pass_con" type="password" id="pwd2" class="form-control" placeholder="Retype Your Password">
                            <span class="confirmRequiredMsg">A value is required.</span>
                            <span class="confirmInvalidMsg">Your passwords don't match. Please retype your password to confirm it.</span>
                    </span>
                </div>
        </div>
        <div class="modal-footer">
            <button  name="signup" class="btn btn-primary btn-lg" type="submit" >Submit</button>
        </div>
			 
<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:8, maxChars:18, minAlphaChars:1, minNumbers:1});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "pwd");
</script>
			  
            </form>
    </div>
      
  </div>
  <!-- /container -->
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <div id="page-prefooter"></div>
    <div id="page-full-footer">
    <div id="footer-top-margin"></div>
    <div id="footer-border"></div>
  <br/><br/><br/><br/><br/><br/>
  
    <div class="footer-col"><ul>
	<li class="header">&copy; Intellect Group Limited. 2015</li>
	</ul>
    </div>
</body>
</html>
