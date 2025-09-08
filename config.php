<?php
require_once "vendor/autoload.php";

use QuickBooksOnline\API\DataService\DataService;

function getDataService() {
    $dataService = DataService::Configure(array(
        'auth_mode' => 'oauth2',
        'ClientID' => "",
        'ClientSecret' => "",
        'accessTokenKey' => '',
        'refreshTokenKey' => "",
        'QBORealmID' => "",
        'baseUrl' => "Development"
    ));
    
    $dataService->setLogLocation("");
    $dataService->throwExceptionOnError(true);
    
    return $dataService;
}
?>
