<?php

class HTTPRequests {
  public function __construct(string $baseUrl) {
    $this->baseUrl = $baseUrl;
  }

  public function getRequest(string $endpoint): string {
    $url = sprintf("%s/%s", $this->baseUrl, $endpoint);
    return file_get_contents($url);
  }

  public function postRequest(string $endpoint, array $data): string {    
    $payload = http_build_query($data);

    $url = sprintf("%s/%s", $this->baseUrl, $endpoint);
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
      "Content-Type: application/x-www-form-urlencoded",
      "Content-Length: " . strlen($payload))
    );

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
  } 
}
