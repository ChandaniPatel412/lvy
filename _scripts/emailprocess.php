<?php
/*
* test_simple_html_mail_message.php
*
* @(#) $Header: /home/mlemos/cvsroot/mimemessage/test_simple_html_mail_message.php,v 1.1 2005/02/10 03:45:02 mlemos Exp $
*
*/

//require("email_message.php");

function thankYouMsg($recipientArray)
{
/*
*  Trying to guess your e-mail address.
*  It is better that you change this line to your address explicitly.
*  $from_address="me@mydomain.com";
*  $from_name="My Name";
*/
	$sName = $recipientArray['recipient_name'];
	$email_recip = $recipientArray['recipient_email'];
	$broker = $recipientArray['recipient_broker'];

	$from_name = $recipientArray['projectName'];
    $from_address = $recipientArray['projectOriginEmail'];
	
    $reply_name = $recipientArray['projectName'];
    $reply_address = $recipientArray['projectEmail'];
	
    $error_delivery_name = $from_name;
    $error_delivery_address = $recipientArray['projectErrorEmail'];

/*
*  Change these lines /per project
*/
    $to_name = $recipientArray['recipient_name'];
    $to_address = $recipientArray['recipient_email'];
	$subject = $recipientArray['projectName']." : ".$recipientArray['recipient_subject'];
    
    $email_message=new email_message_class;
    $email_message->SetEncodedEmailHeader("To",$to_address,$to_name);
    $email_message->SetEncodedEmailHeader("From",$from_address,$from_name);
    $email_message->SetEncodedEmailHeader("Reply-To",$reply_address,$reply_name);
    //$email_message->SetEncodedEmailHeader("BCC",$adm_address,$adm_name);
    $email_message->SetHeader("Sender",$from_address);

/*
*  Set the Return-Path header to define the envelope sender address to which bounced messages are delivered.
*  If you are using Windows, you need to use the smtp_message_class to set the return-path address.
*/
    if(defined("PHP_OS")
    && strcmp(substr(PHP_OS,0,3),"WIN"))
        $email_message->SetHeader("Return-Path",$error_delivery_address);


    $email_message->SetEncodedHeader("Subject",$subject);

	$html_message = $recipientArray['recipient_messsage'];
    
    $email_message->CreateQuotedPrintableHTMLPart($html_message,"",$html_part);

/*
*  It is strongly recommended that when you send HTML messages,
*  also provide an alternative text version of HTML page,
*  even if it is just to say that the message is in HTML,
*  because more and more people tend to delete HTML only
*  messages assuming that HTML messages are spam.
*/
    $text_message="This is an HTML message. Please use an HTML capable mail program to read this message.";
    $email_message->CreateQuotedPrintableTextPart($email_message->WrapText($text_message),"",$text_part);

/*
*  Multiple alternative parts are gathered in multipart/alternative parts.
*  It is important that the fanciest part, in this case the HTML part,
*  is specified as the last part because that is the way that HTML capable
*  mail programs will show that part and not the text version part.
*/
    $alternative_parts=array(
        $text_part,
        $html_part
    );
    $email_message->AddAlternativeMultipart($alternative_parts);

/*
*  The message is now ready to be assembled and sent.
*  Notice that most of the functions used before this point may fail due to
*  programming errors in your script. You may safely ignore any errors until
*  the message is sent to not bloat your scripts with too much error checking.
*/
    $error=$email_message->Send();
    if(strcmp($error,""))
	{
        echo "Error: $error\n";
	}
    else
	{
        //echo "Message sent to $to_name\n";
	}
}
?> 