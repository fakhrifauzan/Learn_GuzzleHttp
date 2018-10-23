<?php
  require 'vendor/autoload.php';

  use GuzzleHttp\Client;

  $client = new Client();

  $response = $client->request(
    'POST',
    'https://jsonplaceholder.typicode.com/posts',
    [
      'body' => 'foo'
    ]
  );

  var_dump($response);

  echo $response->getStatusCode();
  echo "\n";
  echo $response->getBody();
?>
