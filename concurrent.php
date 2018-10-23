<?php
  require 'vendor/autoload.php';

  use GuzzleHttp\Client;
  use GuzzleHttp\Psr7\Response;
  use GuzzleHttp\Exeption\RequestExeption;

  $client = new Client();

  $promise = $client->requestAsync(
    'GET',
    'https://jsonplaceholder.typicode.com/posts/1'
  );

  $promise2 = $client->requestAsync(
    'GET',
    'https://jsonplaceholder.typicode.com/posts/2'
  );

  $promises = [$promise, $promise2];

  $results = GUzzleHttp\Promise\settle($promises)->wait();

  foreach ($results as $result) {
    echo $result['value']->getBody();
  }
?>
