<?php
if ($_POST["json"] == null) { // avoid direct access of this page, will implement validation process
  echo '<html><body><script>alert("Wrong log info!");window.location="/index.php";</script></body></html>';
}
$json = htmlspecialchars($_POST["json"]);

echo "<html><body>".$json. "</body></html>";

$phcreate = "http://tenhou.net/6/#json=";

$htmlmeta = '<meta http-equiv="content-type" content="text/html; charset=utf-8" />';

/*
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $phcreate .$json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);



$fetch = curl_exec($ch);
if (curl_errno($ch)) {
  echo "Error: ".curl_error($ch);
} else {
  echo "<html><body>". $htmlmeta. $fetch. "</body></html>";
  curl_close($ch);
}
*/
?>