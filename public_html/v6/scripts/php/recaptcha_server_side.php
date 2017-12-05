<?php

require_once "http_requests.php";

class RecaptchaServerSide {
  public static function verify(array $data): array {
    $hr = new HTTPRequests("https://www.google.com/recaptcha/api");
    $respStr = $hr->postRequest("siteverify", $data);
    return json_decode($respStr, true);
  }

  public static function getSecretKey(): string {
    $arr = json_decode(file_get_contents("recaptcha_secret.json"), true);
    return trim($arr["secret"]);
  }
}
