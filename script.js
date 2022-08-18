function getOTP() {
	$(".err").html("").hide();
	var email = $("#email").val();

	{
	    var input ={
	       
	        "email" : email,
	        "action" : "get_otp"
	    }
	    $("#loading-image").show();
	    $.ajax({
	        
	        url : 'controller.php',
	        type : 'POST',
	        data : input,
	        success : function(response)
	        {
	            $(".container").html(response);
	        }
	    });
}
	
}

function verifyOTP() {
	$(".err").html("").hide();
	$(".success").html("").hide();
	var otp = $("#mobileOtp").val();
	var input = {
		"otp" : otp,
		"action" : "verify_otp"
	};
	if (otp.length == 6 && otp != null) {
		$.ajax({
			url : 'controller.php',
			type : 'POST',
			dataType : "json",
			data : input,
			success : function(response) {
			  
				$("." + response.type).html(response.message)
				$("." + response.type).show();
				$("#email-verification").html("").hide();
/*redirect*/				
window.location="main.php";

				
			},
			error : function() {
				alert("Error");
			}
		});
	} else {
		$(".err").html('Wrong OTP.')
		$(".err").show();
	}
}
