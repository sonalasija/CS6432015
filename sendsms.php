<?php
require_once ("inc/Services/Twilio.php");

$strfromnumber = "+16693420551";
$strtonumber = "+19177429168";
$strmsg = "Hello from Moududul sonal";
 
$accountsid = "ACc46a1b9b305360be197092c68e81fa12";
$authtoken = "142b34fda66568c79b26aec5219c779c";
 
$objconnection = new Services_Twilio($accountsid, $authtoken);
 
$bsuccess = $objconnection->account->sms_messages->create(
      $strfromnumber,
      $strtonumber,
      $strmsg
);

echo "Success! <b>Text</b>: $strmsg, <b>Number</b>: $strtonumber";
?>
