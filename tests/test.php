<?php

require_once 'src/EbicsApiClient.php';
$env = parse_ini_file('.env');

$client = new EbicsApi\Client\EbicsApiClient($env['API_KEY'], $env['API_HOST']);

$connection = $client->connectionCreate([
    'host_url'   => $env['HOST_URL'],
    'host_id'    => $env['HOST_ID'],
    'partner_id' => $env['PARTNER_ID'],
    'user_id'    => $env['USER_ID'],
    'keyring_op' => 'NOT_STORE',
    'name'       => 'My Connection',
]);

var_dump($connection);