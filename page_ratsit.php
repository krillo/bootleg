<?php
/*
  Template Name: Ratsit
 */
get_header();
?>

<?php
echo 'Check for response from webservice<br/>';
echo '----------------------------------<br/><br/>';
$client = new SoapClient("https://www.ratsit.se:7443/ratsvc/apipackageservice.asmx?WSDL");
$result = $client->GetPersonInformationPackage(array('token' => '86833014aefc41e8838ad88e5834e52d', 'packages' => 'Small 1', 'pnr' => '196703033933'));

$person = $result->GetPersonInformationPackageResult->any;
var_dump($person);
//echo 'Response: <br/> '.$result->GetPersonInformationPackageResult->any;
?>

<?php get_footer(); ?>