<?php
$kTeams = $_POST["kTeams"];
$idTeams = $_POST["idTeams"];
echo '<html><body>'. $idTeams. '; '. $kTeams;

$options = [
	'cost' => 12,
	'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
$hashTeams = password_hash($kTeams, PASSWORD_BCRYPT, $options);

echo '<br>'. $hashTeams;
echo '</body></html>';
?>