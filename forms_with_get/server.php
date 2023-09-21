<?php
// Debug (Validate if all necessary values are obtained)
/*echo "<pre>";
var_dump($_GET);
echo "</pre>";*/
$username = $_GET['username'];
$age = $_GET['age'];

echo "El usuario <b>$username</b> tiene <b>$age</b> años de edad";