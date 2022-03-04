<?php

$servername;
$username;
$password;

$conn = newsqli($servername, $username, $password);

if ($conn -> connect_error)
{
  die ("Connection failed: " . $conn -> connect_error);
}

?>
