$service = new Rebilly\Sdk\CoreService($client);
$service->customers()->deleteLeadSource('customerId');
