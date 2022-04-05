<?php
require 'vendor/autoload.php';
require 'config.php';

use GuzzleHttp\Client;

$client = new Client([
    'timeout' => 2.0,
    'verify' => __DIR__ . '/cacert.pem'
]);

try{

    $response = $client->request('GET','https://accounts.google.com/.well-known/openid-configuration');
     $discoveryJSON = json_decode((string)$response->getBody());
     $tokenEndpoint = $discoveryJSON->token_endpoint;
     $userinfoEndpoint = $discoveryJSON->userinfo_endpoint;
    $response = $client->request('POST', $tokenEndpoint, [
        'form_params' => [
            'code' => $_GET['code'],
            'client_id' => GOOGLE_ID,
            'client_secret' => GOOGLE_SECRET,
            'redirect_uri' => 'http://localhost/F2I2022INITSLAM/JavaScript/SitedelaM2L/connect.php',
            'grant_type' => 'authorization_code'
        ]
    ]);
    $accessToken = json_decode($response->getBody())->access_token;
    $response = $client->request('GET', $userinfoEndpoint, [
        'headers' => [
            'Authorization' => 'Bearer' . $accessToken
        ]
    ]);
    $response = json_decode($response->getBody());
    if ($response->email_verified === true) {
        session_start();
        $_SESSION['email'] = $response->email;
        header('Location: /F2I2022INITSLAM/JavaScript/SitedelaM2L/secret.php');
    }

} catch (\GuzzleHttp\Exception\ClientException $exception){
    var_dump($exception->getMessage());
}
var_dump((string)$response->getBody());

?>