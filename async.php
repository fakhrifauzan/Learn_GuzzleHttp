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

  $promise->then(
    function (Response $res) {
      echo $res->getBody();
    },
    function (RequestExeption $e){
      echo $e->getMessage();
    }
  );

  $promise->wait();
?>
