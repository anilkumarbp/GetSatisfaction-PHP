<?php

require_once "vendor/autoload.php";


use GetSatisfactionAPILib\GetSatisfactionAPIClient;

$client = new GetSatisfactionAPIClient();
$controller = $client->getTopic();


$apiResponse = $controller->getCompaniesTopicsJsonByCompanyId('ringcentraldev',true);

print 'The get Company TopicsJSON by company ID '. PHP_EOL . print_r($apiResponse);



