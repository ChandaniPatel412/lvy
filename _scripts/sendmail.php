<?php
//error_reporting(E_ALL);

$cryptinstall = "../_secF/cryptographp.fct.php";
include $cryptinstall;

require("configuration.inc.php");
require("functions.inc.php");

//$prefix = $_POST['salutation'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$name = $firstName." ".$lastName;
$street = $_POST['address'];
$city = $_POST['city'];
$province = $_POST['province'];
$postal = $_POST['postal_code'];
$email = trim($_POST['email']);
$phone = $_POST['telephone'];
$message = $_POST['message'];

$broker = $_POST['realtor'];
$brokerage = $_POST['brokerage'];
$have_Agent = $_POST['haveAgent'];
$haveAgentName = $_POST['haveAgentName'];

$promo = $_POST['enterCode'];
$optIn = $_POST['opt-approve'];

$neighbourhood = $_POST['neighbourhood'];
$space = $_POST['space'];
$size = $_POST['size'];
$price = $_POST['price'];
$age = $_POST['age'];
$style = $_POST['style'];
$status = $_POST['status'];
$advertising = $_POST['adv'];
if(!empty($_POST['adv_other']))
{
	$adv_other = $_POST['adv_other'];
}
if(!empty($_POST['adv_brokerreferral']))
{
	$adv_other = $_POST['adv_brokerreferral'];
}
$contactType = $_POST['contact'];
$contactTimeType = $_POST['contactTime'];
$purchaseType = $_POST['purchasetype'];

$mobileReg = 0;
$previewOpening = 0;

if($broker == "yes" || $broker == 1)
{
	$brokerReg = 1;
	$isAgent = 1;
	$agentStatusText = "Yes";
	$reply_subject = $brokerReplySubject;
	$reply_message = $brokerReplyMessage;
	$reciept_subject = $adminReceiptBrokerSubject;
	
	$brokerageMessage = "<br/>Brokerage: $brokerage";
}
else
{
	$brokerReg = 0;
	$isAgent = 0;
	$agentStatusText = "No";
	
	$reply_subject = $registrantReplySubject;
	$reply_message = $registrantReplyMessage;
	$reciept_subject = $adminReceiptSubject;
}

if($have_Agent == "yes")
{
	$haveAgent = 1;
	$haveAgentText = "Yes";
	$haveAgentMessage = "<br/>Working with a realtor: $haveAgentName";
}
else
{
	$haveAgent = 0;
	$haveAgentText = "No";
	$haveAgentMessage = "";
}

if($optIn == "1")
{
	$optApprove = 1;
	$optText = "Yes";
	$subscribed = 1;
	
}
else
{
	$optApprove = 0;
	$optText = "No";
	$subscribed = 0;
}

// Email Check Code

// Email Check Bypass ("comment out if enabling email check")
// $form['emailsec_pass']="pass";

if(isset($_POST['PostAction']) && !empty($_POST['PostAction']))
{
        //$form['emailsec_pass']="pass";
		if(chk_crypt(strtoupper($_POST['secFcode'])))
		{
			$form['emailsec_pass']="pass";
		}
		else
		{
			header("location: $captchaError");
		}
		$outCheck = chk_crypt(strtoupper($_POST['secFcode']));
}
else
{
	if(isset($_POST['step2pass']))
	{
			$form['emailsec_pass']="pass";
	}
}

// build up message
// this code for any multiline text fields
$message = html2txt($message);
$message = str_replace("\r", "\n", $message);
// info vars
$ip_address = $_SERVER[REMOTE_ADDR];

// Recipient Message Array
$recipientArray = array();
$recipientArray['recipient_name'] = $name;
$recipientArray['recipient_email'] = $email;
$recipientArray['recipient_broker'] = $brokerReg;
$recipientArray['recipient_subject'] = $reply_subject;
$recipientArray['recipient_messsage'] = $reply_message;
$recipientArray['projectName'] = $projectContactName;
$recipientArray['projectEmail'] = $projectContactReplyToEmail;
$recipientArray['projectOriginEmail'] = $projectContactOriginEmail;
$recipientArray['projectErrorEmail'] = $projectContactErrorEmail;
 
// Project Admin Reciept Array
$adminArray = array();
$adminArray['recipient_name'] = $name;
$adminArray['recipient_email'] = $email;
$adminArray['recipient_broker'] = $brokerReg;
$adminArray['reciept_recipients'] = $recip;
$adminArray['reciept_subject'] = $reciept_subject;
$adminArray['admin_recipients'] = $debugAddresses;
$adminArray['projectName'] = $projectContactName;
$adminArray['projectOriginEmail'] = $projectContactOriginEmail;
$adminArray['projectErrorEmail'] = $projectContactErrorEmail;

// ============================ ADDING TO DATABASE ========================

// ====== ADVERTISING ========
if($advertising != null)
{
	$advertisingName = $advArray["$advertising"];
}
else
{
	$advertisingName = "-";
}

// ===== AGE =========
if($age != 0)
{
	$ageType = $ageArray[$age];
	$ageMin = $ageMinArray[$age];
	$ageMax = $ageMaxArray[$age];
}
else
{
	$ageType = "-";
	$ageMin = "NULL";
	$ageMax = "NULL";
}

// ===== SIZE =========
if($size != 0)
{
	$sizeType = $sizeArray[$size];
	$sizeMin = $sizeMinArray[$size];
	$sizeMax = $sizeMaxArray[$size];
}
else
{
	$sizeType = "-";
	$sizeMin = "NULL";
	$sizeMax = "NULL";
}


// ===== PRICE =========
if($price != 0)
{
	$priceType = $priceArray[$price];
	$priceMin = $priceMinArray[$price];
	$priceMax = $priceMaxArray[$price];
}
else
{
	$priceType = "-";
	$priceMin = "NULL";
	$priceMax = "NULL";
}

// ===== SPACE =========
if($space != 0)
{
	$spaceType = $spaceArray[$space];
}
else
{
	$spaceType = "-";
}

// ===== STYLE =========
if($style != 0)
{
	$styleType = $styleArray[$style];
}
else
{
	$styleType = "-";
}

// ===== PURCHASING PERIOD/TYPE =========
if($purchaseType != 0)
{
	$purchaseTypeN = $purchaserArray[$purchaseType];
}
else
{
	$purchaseTypeN = "-";
}

// ===== STATUS =========
if($status != 0)
{
	$statusType = $statusArray[$status];
}
else
{
	$statusType = "-";
}


// ======== CONTACT MEANS =========
if($contactType != 0)
{
	$contactMeans = $contactMeansArray[$contactType];
}
else
{
	$contactMeans = "-";
}


// ======== CONTACT TIME =========
if($contactTimeType != 0)
{
	$contactTime = $contactTimeArray[$contactTimeType];
}
else
{
	$contactTime = "-";
}

if($form['emailsec_pass']=="pass")
{

$name_db = addslashes($name);
$firstName_db = addslashes($firstName);
$lastName_db = addslashes($lastName);
$street_db = addslashes($street);
$city_db = addslashes($city);
$province_db = addslashes($province);
$message_db = addslashes($message."".$brokerageMessage."".$haveAgentMessage);
//$message_db .= addslashes("<br/><br/>Unit Selection:<br/> $selectedRes");

// ===== DATE / TIME =====

$date = date("Y-m-d");
$time = date("H:i:s");

////////////////////////////////////////////////////////////

$Sname = str_replace(" ","%20",$name);
$Sstreet = str_replace(" ","%20",$_POST['street']);
$Scity = str_replace(" ","%20",$_POST['city']);
$Sprovince = str_replace(" ","%20",$_POST['province']);
$Spostal = str_replace(" ","%20",$_POST['postal']);
$Semail = str_replace(" ","%20",$_POST['email']);
$Sphone = str_replace(" ","%20",$_POST['phone']);
$Smessage = str_replace(" ","%20",$_POST['message']);

$Sspace = str_replace(" ","%20",$_POST['space']);
$Ssize = str_replace(" ","%20",$_POST['size']);
$Sprice = str_replace(" ","%20",$_POST['price']);
$Sage = str_replace(" ","%20",$_POST['age']);
$Sstatus = str_replace(" ","%20",$_POST['status']);
$Sadvertising = str_replace(" ","%20",$_POST['advertising']);
$ScontactType = str_replace(" ","%20",$_POST['contact']);

//===== CONNECTING TO DATABASE ======
mysql_connect("$db_host","$db_usr","$db_pwd") or die(mail("$projectContactErrorEmail", "MySQL ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));
mysql_select_db("$db_name") or die(mail("$projectContactErrorEmail", "MySQL ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));

// Contact Checks
$emailAddCheck = mysql_query("select * from registrants where email = '$email'") or die(mail("$projectContactErrorEmail", "MySQL emailcheck ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));
$emailAddResult = mysql_num_rows($emailAddCheck);
$confirmationR = mysql_fetch_array($emailAddCheck);
$emailID = $confirmationR['registrantid'];
$emailConfirmed = $confirmationR['emailConfirmed'];
// -------------------------------------------------

// Project Details
$projectIDQuery = mysql_query("select * from projects where projectid = $projectid") or die(mail("$projectContactErrorEmail", "MySQL projectN ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));
$projectIDResults = mysql_fetch_array($projectIDQuery);
$projectName = $projectIDResults['name'];


if($emailAddResult == 0)
{
	// Registrant who is not in the DB
	$userNonce = nonce();
	$nonceCheck = mysql_query("select hashID from registrants where hashID = '$userNonce'") or die(mail("$projectContactErrorEmail", "MySQL nonce ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));
	//$nonceDebug = "".mysql_num_rows($nonceCheck)." ".$userNonce;
	//mail("chris@thewalshgroup.ca", "nonce output", $nonceDebug);


	while(mysql_num_rows($nonceCheck) > 0)
	{
		$userNonce = nonce();
		$nonceCheck = mysql_query("select hashID from registrants where hashID = '$userNonce'") or die(mail("$projectContactErrorEmail", "MySQL nonce2 ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));
	}

mysql_query("insert into registrants(hashID, prefix, firstName, lastName, address, email, postalCode, city, province, country, homeNumber, busNumber, cellNumber, minAge, maxAge, generalSub, add_date) values ('$userNonce','$prefix', '$firstName_db', '$lastName_db', '$street_db', '$email','$postal', '$city_db', '$province_db','$country', '$phone', '$phoneBusiness', '$phoneCell', '$minAge', '$maxAge', '$subscribed', CURDATE())") or die(mail("$projectContactErrorEmail", "MySQL reg ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));

//mail("chris@thewalshgroup.ca","reg ID",mysql_insert_id());
$registrantid = mysql_insert_id();

mysql_query("insert into registrants_data (registrantid, projectid, comments, agemin, agemax, sizemin, sizemax, pricemin, pricemax, space, style, adv, date, time, previewOpening, purchaseType, contactMeans, status, ip, subscribed, isAgent, haveAgent, mobileReg, registerDevice, registerClient) values ($registrantid, $projectid, '$message_db', '$ageMin', '$ageMax', '$sizeMin', '$sizeMax', '$priceMin', '$priceMax', '$space', '$style', '$advertising', '$date', '$time', '$previewOpening', '$purchaseType', '$contactMeans', '$status', '$ip_address', '$subscribed', $isAgent, $haveAgent, $mobileReg, '$registerDevice', '$registerClient')") or die(mail("$projectContactErrorEmail", "MySQL 222 ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));

	//confirmAddress($name_db, $email, $userNonce, $projectName, $projectid, 0);
	if($enableAutoReply == 1)
	{
		thankYouMsg($recipientArray);
	}
}
else if($emailAddResult == 1 && $emailConfirmed == 0)
{

$nonceCheck = mysql_query("select hashID from registrants where email = '$email'") or die(mail("$projectContactErrorEmail", "MySQL nonce ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));
$nonceDebug = mysql_fetch_array($nonceCheck);

// Registrant who is in the DB but hasn't confirmed their email address.
mysql_query("insert into registrants_data (registrantid, projectid, comments, agemin, agemax, sizemin, sizemax, pricemin, pricemax, space, style, adv, date, time, previewOpening, purchaseType, contactMeans, status, ip, subscribed, isAgent, haveAgent, mobileReg, registerDevice, registerClient) values ($emailID, $projectid, '$message_db', '$ageMin', '$ageMax', '$sizeMin', '$sizeMax', '$priceMin', '$priceMax', '$space', '$style', '$advertising', '$date', '$time', '$previewOpening', '$purchaseType', '$contactMeans', '$status', '$ip_address', '$subscribed', $isAgent, $haveAgent, $mobileReg, '$registerDevice', '$registerClient')") or die(mail("$projectContactErrorEmail", "MySQL 222 ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));

	//confirmAddress($name_db, $email, $nonceDebug['hashID'], $projectName, $projectid, 1);
	if($enableAutoReply == 1)
	{
		thankYouMsg($recipientArray);
	}
}
else
{
mysql_query("insert into registrants_data (registrantid, projectid, comments, agemin, agemax, sizemin, sizemax, pricemin, pricemax, space, style, adv, date, time, previewOpening, purchaseType, contactMeans, status, ip, subscribed, isAgent, haveAgent, mobileReg, registerDevice, registerClient) values ($emailID, $projectid, '$message_db', '$ageMin', '$ageMax', '$sizeMin', '$sizeMax', '$priceMin', '$priceMax', '$space', '$style', '$advertising', '$date', '$time', '$previewOpening', '$purchaseType', '$contactMeans', '$status', '$ip_address', '$subscribed', $isAgent, $haveAgent, $mobileReg, '$registerDevice', '$registerClient')") or die(mail("$projectContactErrorEmail", "MySQL 222 ERROR : $projectDomain", mysql_error(), "From: webserver@thewalshgroup.ca"));

	if($enableAutoReply == 1)
	{
		thankYouMsg($recipientArray);
	}
}
mysql_close();

if($googleEventTracking == 1)
{
	$gaParser = new universalAnalyticsCookie;
	$gaCID = $gaParser->getCid();
	
	if($gaCID == NULL)
	{
		$gaCID = $gaParser->set();
	}
	else
	{
	}
	
	//$debugMSG = "http://www.google-analytics.com/collect?v=1&tid=$gaAccount&cid=$gaCID&t=event&ec=connect&ea=registered<br/><br/>$gaUA";
	//mail("chris@thewalshgroup.ca","g measure debug", $debugMSG);
	
	$eventTrack = curl_init();
	curl_setopt_array($eventTrack, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => "http://www.google-analytics.com/collect?v=1&tid=$gaAccount&cid=$gaCID&t=event&ec=connect&ea=registered",
		CURLOPT_USERAGENT => "$gaUA",
		));
	$resp = curl_exec($eventTrack);
	curl_close($eventTrack);
}

if(isset($_POST['PostAction']) && !empty($_POST['PostAction']))
{
}
else
{
	echo("&dbComplete=true");
}
// ========================================================================

$mailbody = "<html><body><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:22px; font-weight:bold;\">New Registrant</span><br/><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:14px;\">(via website $projectDomain)</span><br/><br/>
<table width=\"500\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\" style=\"border:#000000 solid 1px; border-collapse:collapse; border-style:inset;\">
  <tr>
    <th width=\"39%\" height=\"30\" bgcolor=\"#666666\"><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF;\">Questions</span></th>
    <th width=\"61%\" height=\"30\" bgcolor=\"#666666\"><span style=\"font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#FFFFFF;\">Responses</span></th>
  </tr>
  <tr>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">&nbsp;</td>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">&nbsp;</td>
  </tr>
  <tr>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\"><strong>Contact Information </strong></td>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">&nbsp;</td>
  </tr>";
  if($receiptMessage['firstname'] == 1)
  {
  	$mailbody .= "<tr>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">First Name: </td>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$firstName</td>
  	</tr>";
  }
  if($receiptMessage['lastname'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Last Name: </td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$lastName</td>
	  </tr>";
  }
  if($receiptMessage['address'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Address: </td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$street</td>
	  </tr>";
  }
  if($receiptMessage['city'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">City: </td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$city</td>
	  </tr>";
  }
   if($receiptMessage['province'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Province: </td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$province</td>
	  </tr>"; 
  }
  if($receiptMessage['postalcode'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Postal Code:</td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$postal</td>
	  </tr>";
  }
  if($receiptMessage['phone'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Phone Number: </td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$phone</td>
	  </tr>";
  }
  if($receiptMessage['email'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Email Address: </td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$email</td>
	  </tr>";
  }
  $mailbody .= "<tr>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">&nbsp;</td>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">&nbsp;</td>
  </tr>
  <tr>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\"><strong>Registration Details </strong></td>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">&nbsp;</td>
  </tr>";
  if($receiptMessage['desiredSize'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Desired Size:</td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$sizeType</td>
	  </tr>";
  }
  if($receiptMessage['desiredSpace'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Desired Space:</td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$spaceType</td>
	  </tr>";
  }
  if($receiptMessage['advertising'] == 1)
  {
	  if(($advertising == "14" || $advertising == "100") && $receiptMessage['advertising_other'] == 1)
	  {
		  $mailbody .= "<tr>
			<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">How did you hear about us?</td>
			<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$advertisingName : $adv_other</td>
		  </tr>";
	  }
	  else
	  {
		  $mailbody .= "<tr>
			<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">How did you hear about us?</td>
			<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$advertisingName</td>
		  </tr>";
	  }
  }
  if($receiptMessage['contactmethod'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Contact Method:</td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$contactMeans</td>
	  </tr>";
  }
  if($receiptMessage['contacttime'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Contact Time:</td>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$contactTime</td>
	  </tr>";
  }
  if($receiptMessage['realtorstatus'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Are you a realtor?</td>
		<td style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px; min-height:25px;\">$agentStatusText - ".strip_tags($brokerageMessage)."</td>
	  </tr>";
  }
  if($receiptMessage['haveagent'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Are you working with an agent?</td>
		<td style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px; min-height:25px;\">$haveAgentText - ".strip_tags($haveAgentMessage)."</td>
	  </tr>";
  }
  if($receiptMessage['comments'] == 1)
  {
	  $mailbody .= "<tr>
		<td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Comments:</td>
		<td style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px; min-height:25px;\">$message</td>
	  </tr>";
  }
  $mailbody .= "<tr>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">Opt-In:</td>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">$optText</td>
  </tr>
  <tr>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">&nbsp;</td>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\">&nbsp;</td>
  </tr>
  <tr>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\"><em>registrant's IP: </em></td>
    <td height=\"25\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px; padding-left:10px;\"><em>$ip_address</em></td>
  </tr>
</table></body></html>";


// send the message
registrationReceipt($adminArray, $mailbody);

// send the confirmation
if($email != null)
{
	if(isset($_POST['PostAction']) && !empty($_POST['PostAction']))
	{
		$direct = $_POST['PostAction'];
		if($testingState != 1)
		{
			header("location: $direct");
		}
	}
	else
	{
		echo("&mailComplete=true");
	}
}
}
?>