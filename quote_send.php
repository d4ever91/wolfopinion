<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="QUOTE - Request a quote for every type of companies">
	<meta name="author" content="Ansonika">
	<title>Wolfinsights - Request a quote for every type of companies</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
    
	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "/"
    }
    </script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">
<?php
$conn = mysqli_connect("localhost","wolfsrvy_opinion","wEzpL6xwXW5U","wolfsrvy_wolfopinion");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "INSERT INTO users (firstname, lastname, email ,age,business_email,password,business_name,phone_number,country,linked_profile) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."','".$_POST['email']."','".$_POST['age']."','".$_POST['business_email']."','".md5($_POST['password'])."','".$_POST['business_name']."','".$_POST['phone_number']."','".$_POST['country']."','".$_POST['linked_profile']."')";
$conn->query($sql);
$conn->close();

  // mysqli_close($conn);
						$mail = $_POST['email'];

						/*$subject = "".$_POST['subject'];*/
						$to = "sales@wolfinsights.com";		/* YOUR EMAIL HERE */
						$subject = "Request to join Wolf Opinion panel";
						$headers = "From: Wolf Opinion Panel <noreply@wolfinsights.com>";
						$message = "DETAILS\n";
						$message .= "\nUser personal details" ;
						$message .= "\nBusiness name: " . $_POST['business_name'];
						$message .= "\nName: " . $_POST['firstname'];
						$message .= "\nLast Name: " . $_POST['lastname'];
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nBusiness Email: " . $_POST['business_email'];
						$message .= "\nPhone Number " . $_POST['phone_number'];
						$message .= "\nAge " . $_POST['age'];
						$message .= "\nCountry: " . $_POST['country'];
						$message .= "\nLinkedln Profile: " . $_POST['linked_profile'];
						
						$message .= "\nTerms and conditions accepted: " . $_POST['terms'] . "\n";
												
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Thank You";
						$userheaders = "From: Wolf Opinion Panel <noreply@wolfinsights.com>\n";
						/*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "Thank you for your time. Your  request to join Wolf Opinion panel has been sent . \nOne of our team member will review your profile and get back to you\n$message"; 
						mail($user,$usersubject,$usermessage,$userheaders);
	
?>
<!-- END SEND MAIL SCRIPT -->   

<div id="success">
    <div class="icon icon--order-success svg">
              <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                <g fill="none" stroke="#8EC343" stroke-width="2">
                  <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                  <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                </g>
              </svg>
     </div>
<h4><span>Request successfully sent!</span>Thank you for your time</h4><br/>
  <span> Your  request to join Wolf Opinion panel has been sent . One of our team member will review your profile and get back to you</span>
</div>
</body>
</html>