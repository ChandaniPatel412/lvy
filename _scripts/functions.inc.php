<?php
require_once("email_message.inc.php");
require_once("configuration.inc.php");
require_once("registrant.php");
require_once("emailprocess.php");

function base64url_encode($data) {
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
} 

function base64url_decode($base64)
{
  return base64_decode(strtr($base64, '-_', '+/'));
}

function nonce($size=64){//256 bit == 32byte. 
	$charRange = array_merge(range('A', 'Z'), range('a', 'z'),range(0, 9));
    $ret="";
    for($x=0;$x<$size;$x++){
        $ret.="".chr(mt_rand(0,count($charRange)-1));
    }
    return base64url_encode($ret);
}

/**
 * Converts an integer into the alphabet base (A-Z).
 *
 * @param int $n This is the number to convert.
 * @return string The converted number.
 * @author Theriault
 *
 */
function num2alpha($n) {
    $r = '';
    for ($i = 1; $n >= 0 && $i < 10; $i++) {
        $r = chr(0x41 + ($n % pow(26, $i) / pow(26, $i - 1))) . $r;
        $n -= pow(26, $i);
    }
    return $r;
}
/**
 * Converts an alphabetic string into an integer.
 *
 * @param int $n This is the number to convert.
 * @return string The converted number.
 * @author Theriault
 *
 */
function alpha2num($a) {
    $r = 0;
    $l = strlen($a);
    for ($i = 0; $i < $l; $i++) {
        $r += pow(26, $i) * (ord($a[$l - $i - 1]) - 0x40);
    }
    return $r - 1;
}

function html2txt($document){
$search = array('@<script[^>]*?>.*?</script>@si',  // Strip out javascript
               '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
               '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
               '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments including CDATA
);
$text = preg_replace($search, '', $document);
return $text;
}

class universalAnalyticsCookie {
	/*
	* Name: Universal Analytics Cookie Parser Class
	* Description: Parses the new format Universal Analytics cookie. 
	* Developer: Matt Clarke
	* Date: January 10, 2013
	* Modified by Audun Rundberg
	*/
	/*
	* Get cid from the cookie
	*/
	public function getCid () {
		if (isset ($_COOKIE["_ga"]) ){
			$contents = $this->parse ();
			return $contents['cid'];
		}
		else {
			return false;
		}
	}
	/*
	* Handle the parsing of the _ga cookie
	* This assumes the 32bit + 32bit CID format, not the new
	* UUID v4 format
	*/
	private function parse () {
		list ($version,$domainDepth, $cid1, $cid2) = explode ('.', $_COOKIE["_ga"], 4);
		return array ('version' => $version, 'domainDepth' => $domainDepth, 'cid' => $cid1.'.'.$cid2);
	}
	/*
	* Creates a new GA cookie and returns the tracking id (cid)
	*/
	public function set () {
		$cid1 = mt_rand (0, 2147483647);
		$cid2 = mt_rand (0, 2147483647);
		$cid = $cid1 . '.' . $cid2;
		setcookie  ('_ga', '1.2.' . $cid, time ()+60*60*24*365*2, '/');
		return $cid;
	}
}

?>