<?php
// Password to be encrypted for a .htpasswd file
$clearTextPassword = $_POST['pwd'];
$clearTextName = $_POST['name'];

// Encrypt password
$password = crypt($clearTextPassword, base64_encode($clearTextPassword));

// Print encrypted password
echo 'Втавьте это новой строкой в файл .htpasswd:<br><br>'.$clearTextName.':'.$password;
?>