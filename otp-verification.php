<div class="err"></div>
<div class="success"></div>
<form id="email-verification">
	<div class="email-row">
		<label>OTP have been sent. Please check your email</label>		
	</div>

	<div class="email-row">
		<input type="number"  id="mobileOtp" class="mobile-input" placeholder="Enter the OTP" >		
	</div>

	<div class="email-row">
		<input id="verify" type="button" class="btnVerify" value="Verify OTP" onClick="verifyOTP();">		
	</div>
</form>