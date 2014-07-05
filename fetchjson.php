<?php
$gid = htmlspecialchars($_POST["gid"]);
$mjlog = "http://tenhou.net/5/mjlog2json.cgi?".$gid;
$refer = "http://tenhou.net/5/log=".$gid;
echo "<html>";
$headers = array("GET ". $mjlog. " HTTP/1.1", "Host: tenhou.net", "Referer: ". $refer, "Accept: text/html, application/xhtml+xml, */*", "User-Agent: Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)");
echo "<body>";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $mjlog);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$fetch = curl_exec($ch);
if (curl_errno($ch)) {
  echo "Error: ".curl_error($ch);
} else {
  echo "<html><body>". $fetch. "</body></html>";
  curl_close($ch);
}
?>
