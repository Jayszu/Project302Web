<!DOCTYPE html>
<html>
<head>
<title>OTP</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <body style='background-color:#282C2F '>

	<div class="container w3-card">
		<div class="err"></div>
		<form id="email-verification">
			<div class="email-heading">Email Verification</div>
			<div class="email-row">
				
				<br>
				<input type="email" id="email" class="email-input" placeholder="Enter your email">
				<div id="message2"></div>
			</div>
		
			<input type="button" class="emailSubmit" id="enter" disabled="true" value="Get OTP" onClick="getOTP();">
		</form>
		<script>
		    $('#email').on('keyup',function(){
  		            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  		            var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  		            var email = $("#email").val();
  		            if(email.match(mailformat)){
  		                $('#message2').html('Valid Email').css('color','green');
  		                $("#enter").prop('disabled',false);
  		            }
  		            else
  		                $('#message2').html('Invalid Email').css('color','red');
  		                
  		        }
  		        );
		</script>
	</div>
	</body>
</html>