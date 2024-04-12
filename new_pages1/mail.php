<?php 
session_start();
if(isset($_POST['submit'])){ 
      
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message ="";
    $property="";
    $email = $_POST['email'];
    $propertieslist= $_POST['propertieslist'];
    $mobileno = $_POST['phone'];
    $enquiry = $_POST['text'];
    $typeo = $_POST['typeo'];
    $subject = "Arvind Forest Landing Page";
    $message = "Name : ".$name ."\n"."Email : ". $email ."\n" . "Mobile : ".$mobileno."\n"."Property :".$propertieslist."\n". "Message: ".$enquiry."\n" . $_POST['message']."\n "."\n";
    $message .= "This email is coming from Arvind Forest Landing Page Form Submission";
    
    // Store the values in session variables
    $_SESSION['email'] = $email;
 
    // this is API CAll for LeadRat Start
    $apiUrl = "https://connect.leadrat.com/api/v1/integration/GoogleAds";
    $apiKey = "OWY4ZGJlZjktNTRlYS00NWYxLWI5Y2UtMzM4N2JkMjYwZjlh";

    $postData = array(
        "name" => $name,
        "email" => $email,
        "mobile" => $mobileno,
    );

    $headers = array(
        "API-Key: " . $apiKey,
        "Content-Type: application/json",
    );

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    if ($response === false) {
        echo "cURL Error: " . curl_error($ch);
    } else {
        echo "API Response: " . $response;
    }
    // this is API CAll for LeadRat Start End
                
        $fields = array(
    "sender_id" => "SHHOME",
    "message" => "Property- .$propertieslist. Name- .$name., Mobile-.$mobileno., Email- .$email. 
Regards, SearchHomes india pvt ltd",
    "template_id" => "1207163731895114985",
    "entity_id" => "1201159178483176795",
    "route" => "dlt_manual",
    "numbers" => "8951927450",
);
// ,8638868550,6264159415,8951927450, 8147267372, 9036611811
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: E2SO3Qc7HLJc7foeIWZrM8CAGhMFVV07L5YU9ZpykVYCWQ4BhTEBocweBqy6",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}


					?>
						<script>
							window.location.href='thank_you.php';
						</script>
					<?php
    }
?>