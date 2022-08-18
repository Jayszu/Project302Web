

<?php

  $name = $_POST["name"];
 $password = $_POST["password"];
 
 	$con=mysqli_connect("localhost", "id18542492_userlogin_1234", "JayWeb@_1122", "id18542492_userlogin");

 $sql = "SELECT * FROM login WHERE name = '$name' AND password = '$password'";
 $resultdb = mysqli_query($con, $sql);
 if($resultdb){
	 if (mysqli_num_rows($resultdb)>= 1 ) {
	     $json_array['user_details'] = array();
			while($row = mysqli_fetch_assoc($resultdb)){
				$json_array['user_details'][] = $row;
			}
		echo"";
		   


		 
		 
	 }
 }else{
	  $response = array("success" => "0", "message"=>"Server error");
 }
 
 header('Content-type: application/json');
 echo json_encode($response); 
?>
<?php


if(isset($_POST['submit']))
{

function CheckCaptcha($userResponse) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LfI5_geAAAAAICmAiykc9I2CpCCPa77bYaeRrmv',
            'response' => $userResponse
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $res = curl_exec($ch);
        curl_close($ch);

        return json_decode($res, true);
    }


    // Call the function CheckCaptcha
    $result = CheckCaptcha($_POST['g-recaptcha-response']);

    if ($result['success']&&(mysqli_num_rows($resultdb)>= 1 )) {
        //If the user has checked the Captcha box
           echo '<script type="text/javascript">;
window.location="test.php";
</script>';
	
    } else {
        
     echo '<script>alert("Please Check captcha or enter a valid credentials");</script>';
     
    }
    
}
    ?>
    <!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <form align="center">
    
        <a href="index.php">Go back</a>
        
    </form>
    </body>
    
</html>