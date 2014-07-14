<?php
if ($_POST["gid"] == null) { // avoid direct access of this page, will implement validation process
  echo '<html><body><script>alert("Wrong log info!");window.location="/index.php";</script></body></html>';
}
$gid  = $_POST["gid"];
$gid  = stristr ($gid, '=');
$gid  = stristr ($gid, '&', true);
$gid2 = str_replace("=", "?", $gid);
$gid  = htmlspecialchars($gid);
$gid2 = htmlspecialchars($gid2);

$mjlog = "http://tenhou.net/5/mjlog2json.cgi".$gid2;
$refer = "http://tenhou.net/5/log".$gid;

$headers = array("GET ". $mjlog. " HTTP/1.1", "Host: tenhou.net", "Referer: ". $refer, "Accept: text/html, application/xhtml+xml, */*", "User-Agent: Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)");
$htmlmeta = '<meta http-equiv="content-type" content="text/html; charset=utf-8" />';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $mjlog);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$fetch = curl_exec($ch);
if (curl_errno($ch)) {
  echo "Error: ".curl_error($ch);
} else {
  echo "<html><body>". $htmlmeta. $fetch. $start. $end. "</body></html>";
  curl_close($ch);
}
?>
