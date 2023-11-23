<?php
function generateRandomPassword($length) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?@';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $alphabet[rand(0, strlen($alphabet) - 1)];
    }

    return $password;
}
?>