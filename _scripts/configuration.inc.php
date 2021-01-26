<?php
/* ________________ Configuration Options ________________ */
$projectid = 242; // This is the project ID
$testingState = 0; // Disable some functionality : 1 = Disable, 0 = Function like Live Site

// This should be directed to the project admin or sales team
$recip['info@ivy.condos'] = "info@ivy.condos";
//$recip['chris@thewalshgroup.ca'] = "chris@thewalshgroup.ca";

//	Addresses to be BCC'd on all receipt email
$debugAddresses['salim@thewalshgroup.ca'] = "salim@thewalshgroup.ca";
//$debugAddresses['kyle@thewalshgroup.ca'] = "kyle@thewalshgroup.ca";
//$debugAddresses['shakeel@thewalshgroup.ca'] = "shakeel@thewalshgroup.ca";



/* ________________ Site Settings ________________ */
//	Project Name
$projectContactName = "ivy condos";
$projectDomain = "ivy.condos";								

//	Email Origin : No Replies Here
$projectContactOriginEmail = "noreply@ivy.condos"; 						

//	Reply Email Address : Registrants Reply To This
$projectContactReplyToEmail = "info@ivy.condos"; 							

//	Error email address
$projectContactErrorEmail = "webmaster@thewalshgroup.ca";			

// 	Registration Form captcha failure URL
$captchaError = "http://ivy.condos/Register?captchaError";

// 	Google Event Tracking
$googleEventTracking = 1;
$gaAccount = 'UA-86657514-1'; 		//format: UA-xxxxxxxx-x
$gaUA = 'IvyWeb-registration'; 	//example: web-registration

/* ________________ Registration Receipts ________________ */
$adminReceiptSubject = "priority registration"; 					// 	priority registration
$adminReceiptBrokerSubject = "priority Broker registration"; 	//	priority Broker registration

$receiptMessage['firstname'] = 1;
$receiptMessage['firstname'] = 1;
$receiptMessage['lastname'] = 1;
$receiptMessage['address'] = 0;
$receiptMessage['city'] = 0;
$receiptMessage['province'] = 0;
$receiptMessage['postalcode'] = 1;
$receiptMessage['phone'] = 1;
$receiptMessage['email'] = 1;
$receiptMessage['advertising'] = 1;
$receiptMessage['advertising_other'] = 1;
$receiptMessage['contactmethod'] = 0;
$receiptMessage['contacttime'] = 0;
$receiptMessage['realtorstatus'] = 1;
$receiptMessage['haveagent'] = 1;
$receiptMessage['desiredSize'] = 0;
$receiptMessage['desiredSpace'] = 0;
$receiptMessage['comments'] = 1;


/* ________________ Auto-reply Messages ________________ */
$enableAutoReply = 1;


// Registrant Confirmation
$registrantReplySubject = "priority registration confirmation";
$registrantReplyMessage = "<html>
<body bgcolor=\"#ffffff\" style=\"background-color: #FFFFFF; margin:0px; height:100%; width: 100%;\">
	<table width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr>
			<td align=\"left\" valign=\"top\" style=\"padding: 25px;\">
				<table width=\"535\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
					<tr>
						<td width=\"535\" align=\"left\" valign=\"top\">
							<div style=\"margin-bottom:5px;\"><a href=\"http://ivy.condos/\" style=\"font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight: 300; font-size:22px; color:#000000; text-decoration:none;\"><img src=\"http://ivy.condos/images/IvyLogo.png\" style=\"width: 250px;\" alt=\"ivy condos\"/></a></div>
                            <div style=\"padding-left:185px; color: #000; font-size: 19px; line-height: 21px; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; padding-bottom:30px;\">
    	a fresh approach<br>
        to downtown living
    </div>
						</td>
					</tr>
					<tr>
						<td width=\"535\" align=\"left\" valign=\"top\" style=\"font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px;padding-left:185px;\">					
                            <span style=\"font-weight:600;\">thank you for your interest.</span><br/>
							<br/>
							ivy is a stunning point tower inspired by nature and its surroundings - with a perfect 100 for transit accessibility by <a href=\"https://www.walkscore.com/score/69-mutual-st-toronto-on-canada\" target=\"blank\"><span style=\"color:#000; text-decoration: none;\">walkscore.com</span></a>. ivy is located in the heart of downtown, steps from yonge-dundas square, eaton centre and ryerson, to just name a few.<br/>
							<br/>
							<span style=\"font-weight:600;\">an exclusive event for registrants is planned for saturday & sunday, april 8th-9th</span> - this is a selling event. the event will be held from 11 am - 5 pm, with appointments being available in 30 minute intervals. if you wish to attend this exclusive event, email <a href=\"mailto:event@ivy.condos?subject=exclusive registrants event\" target=\"blank\"><span style=\"font-weight:600; color:#000; text-decoration: none;\">event@ivy.condos</span></a><br/>
							<br/>
							to download the brochure, <a href=\"http://ivy.condos/pdf/ivyBrochure.pdf\" target=\"blank\"><span style=\"font-weight:600; color:#000; text-decoration: none;\">click here</span></a><br/>
							<br/>
							we look forward to meeting you<br/>
							<span style=\"font-weight:600;\">ivy condos sales team</span><br/>
							<br/>
							<br/>
						</td>
				  </tr>
				</table>
    		</td>
    	</tr>
    </table>
</body>
</html>";

//Broker Confirmation
$brokerReplySubject = "broker registration confirmation";
$brokerReplyMessage = "<html>
<body bgcolor=\"#ffffff\" style=\"background-color: #FFFFFF; margin:0px; height:100%; width: 100%;\">
	<table width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
		<tr>
			<td align=\"left\" valign=\"top\" style=\"padding: 25px;\">
				<table width=\"535\" border=\"0\" align=\"left\" cellpadding=\"0\" cellspacing=\"0\">
					<tr>
						<td width=\"535\" align=\"left\" valign=\"top\">
							<div style=\"margin-bottom:5px;\"><a href=\"http://ivy.condos/\" style=\"font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight: 300; font-size:22px; color:#000000; text-decoration:none;\"><img src=\"http://ivy.condos/images/IvyLogo.png\" style=\"width: 250px;\" alt=\"ivy condos\"/></a></div>
                            <div style=\"padding-left:185px; color: #000; font-size: 19px; line-height: 21px; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-weight:bold; padding-bottom:30px;\">
    	a fresh approach<br>
        to downtown living
    </div>
						</td>
					</tr>
					<tr>
						<td width=\"535\" align=\"left\" valign=\"top\" style=\"font-family:'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:14px;padding-left:185px;\">					
                            <span style=\"font-weight:600;\">thank you for your interest.</span><br/>
							<br/>
							ivy is a stunning point tower inspired by nature and its surroundings - with a perfect 100 for transit accessibility by <a href=\"https://www.walkscore.com/score/69-mutual-st-toronto-on-canada\" target=\"blank\"><span style=\"color:#000; text-decoration: none;\">walkscore.com</span></a>. ivy is located in the heart of downtown, steps from yonge-dundas square, eaton centre and ryerson, to just name a few.<br/>
							<br/>
							<span style=\"font-weight:600;\">an exclusive event for registrants is planned for saturday & sunday, april 8th-9th</span> - this is a selling event. the event will be held from 11 am - 5 pm, with appointments being available in 30 minute intervals. if you wish to attend this exclusive event, email <a href=\"mailto:event@ivy.condos?subject=exclusive registrants event\" target=\"blank\"><span style=\"font-weight:600; color:#000; text-decoration: none;\">event@ivy.condos</span></a><br/>
							<br/>
							to download the brochure, <a href=\"http://ivy.condos/pdf/ivyBrochure.pdf\" target=\"blank\"><span style=\"font-weight:600; color:#000; text-decoration: none;\">click here</span></a><br/>
							<br/>
							we look forward to meeting you<br/>
							<span style=\"font-weight:600;\">ivy condos sales team</span><br/>
							<br/>
							<br/>
						</td>
				  </tr>
				</table>
    		</td>
    	</tr>
    </table>
</body>
</html>";


/* ________________ Form Values ________________ */

//	Advertising
$advArray = array();
$advArray['1'] = "Site Hoarding/Signage";
$advArray['4'] = "Flyer/Mailer";
$advArray['5'] = "Website/Internet";
$advArray['6'] = "Toronto Star";
$advArray['7'] = "Globe and Mail";
$advArray['8'] = "National Post";
$advArray['11'] = "Condo Guide";
$advArray['12'] = "Condo Life";
$advArray['13'] = "Friends/Relatives";
$advArray['14'] = "Other";
$advArray['24'] = "A-Frame";
$advArray['25'] = "Xtra Magazine";
$advArray['49'] = "Toronto Life";
$advArray['50'] = "Email Promotion";
$advArray['74'] = "SNAP Magazine";
$advArray['75'] = "Beach Metro";
$advArray['85'] = "Ming Pao";
$advArray['86'] = "Azure Magazine";
$advArray['87'] = "Email/Website";
$advArray['88'] = "fab Magazine";
$advArray['94'] = "Facebook";
$advArray['95'] = "Twitter";
$advArray['100'] = "Realtor";
$advArray['110'] = "Epoch Times";
$advArray['119'] = "Buzz Buzz Homes";
$advArray['129'] = "The Grid";
$advArray['133'] = "Google Search";
$advArray['141'] = "Shahrvand";
$advArray['148'] = "Korean Harvest Festival";
$advArray['158'] = "Urban Toronto";
$advArray['159'] = "Baker Real Estate";
$advArray['164'] = "Luxury Living Magazine";
$advArray['168'] = "Weekly Voice";
$advArray['171'] = "Condo Elite";
$advArray['172'] = "Chinese Real Estate Weekly";
$advArray['175'] = "Property Weekly";
$advArray['177'] = "Realty Weekly";
$advArray['182'] = "Taste of Life Magazine";
$advArray['183'] = "Homes and Land";
$advArray['187'] = "Milborne Real Estate Inc.";
$advArray['192'] = "Internet Search";
$advArray['193'] = "Social Media";

// Age
$ageArray = array();
$ageMinArray = array();
$ageMaxArray = array();
$ageArray['1'] = "under 29";
$ageMinArray['1'] = 0;
$ageMaxArray['1'] = 29;
$ageArray['2'] = "30-39";
$ageMinArray['2'] = 30;
$ageMaxArray['2'] = 39;
$ageArray['3'] = "40-49";
$ageMinArray['3'] = 40;
$ageMaxArray['3'] = 49;
$ageArray['4'] = "50-59";
$ageMinArray['4'] = 50;
$ageMaxArray['4'] = 59;
$ageArray['5'] = "60 +";
$ageMinArray['5'] = 60;
$ageMaxArray['5'] = 80;

// Size
$sizeArray = array();
$sizeMinArray = array();
$sizeMaxArray = array();
$sizeArray['1'] = "900-1,000 sq.ft";
$sizeMinArray['1'] = 900;
$sizeMaxArray['1'] = 1000;
$sizeArray['2'] = "1,000-1,100 sq.ft";
$sizeMinArray['2'] = 1000;
$sizeMaxArray['2'] = 1100;
$sizeArray['3'] = "1,100-1,250 sq.ft";
$sizeMinArray['3'] = 1100;
$sizeMaxArray['3'] = 1250;
$sizeArray['4'] = "1,250-1,450 sq.ft";
$sizeMinArray['4'] = 1250;
$sizeMaxArray['4'] = 1450;
$sizeArray['5'] = "1,450 sq.ft and over";
$sizeMinArray['5'] = 1450;
$sizeMaxArray['5'] = 1600;

// Price
$priceArray = array();
$priceMinArray = array();
$priceMaxArray = array();
$priceArray['1'] = "$600,000 - 750,000";
$priceMinArray['1'] = 600;
$priceMaxArray['1'] = 750;
$priceArray['2'] = "$750,000 - 850,000";
$priceMinArray['2'] = 750;
$priceMaxArray['2'] = 850;
$priceArray['3'] = "$850,000 - 950,000";
$priceMinArray['3'] = 850;
$priceMaxArray['3'] = 950;
$priceArray['4'] = "$950,000 +";
$priceMinArray['4'] = 950;
$priceMaxArray['4'] = 1000;

// Space
$spaceArray = array();
$spaceArray['1'] = "Studio";
$spaceArray['2'] = "1 Bedroom";
$spaceArray['3'] = "1 Bedroom + Den";
$spaceArray['4'] = "2 Bedroom";
$spaceArray['5'] = "2 Bedroom + Den";
$spaceArray['6'] = "Penthouse";
$spaceArray['11'] = "3 bedroom";
$spaceArray['14'] = "Jr. One Bedroom";
$spaceArray['16'] = "Modern Townhome";
$spaceArray['15'] = "3 bedroom and den";
$spaceArray['28'] = "Lofthouse";

// Style
$styleArray = array();
$styleArray['1'] = "1 Storey Loft";
$styleArray['2'] = "2 Storey Loft";
$styleArray['3'] = "Flats";
$styleArray['4'] = "Bi-level Loft";
$styleArray['5'] = "2 Storey Live-Work Lofthouse";
$styleArray['25'] = "Condominium";
$styleArray['27'] = "Lofthouse";
$styleArray['33'] = "Single Level";
$styleArray['34'] = "Double Level";

// Purchaser Type
$purchaserArray = array();
$purchaserArray['1'] = "Move Up";
$purchaserArray['2'] = "Move Down";
$purchaserArray['3'] = "First time buyer";
$purchaserArray['4'] = "Investment";

// Status
$statusArray = array();
$statusArray['1'] = "Rent";
$statusArray['2'] = "Own";
$statusArray['3'] = "Live with family";

// Contact Means
$contactMeansArray = array();
$contactMeansArray['1'] = "Email";
$contactMeansArray['2'] = "Mail";
$contactMeansArray['3'] = "Phone";

// Contact Time
$contactTimeArray = array();
$contactTimeArray['1'] = "Morning";
$contactTimeArray['2'] = "Afternoon";
$contactTimeArray['3'] = "Evening";

?>