<?php

echo '<html><head><script type="text/javascript">';
echo 'function ctc(text) {window.prompt("Copy to clipboard", text);}</script></head>';

echo '<body>';
echo '<form action="fetchjson.php" method="post">';
echo 'Mahjong log info: <input type="text" name="gid"><br>';
echo '<input type="submit" value="send"></form>';

echo '<form action="createph.php" method="post">';
echo 'Create single printout for one game: <input type="text" name="json"><br>';
echo '<input type="submit" value="send"></form>';

echo '<form action="teamreg.php" method="post">';
echo 'Create a team account: <input type="text" name="idTeams"> Enter an access code: <input type="password" name="kTeams"><br>';
echo '<input type="submit" value="register"></form>';

echo "</body></html>";
?>
