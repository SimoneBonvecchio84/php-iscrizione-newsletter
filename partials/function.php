<?php

function check_mail($mail_value, $user_mail) {
    return $mail_value === $user_mail ? true : false;
}

function check_simbol($mail_value) {
    return str_contains($mail_value, ".") && str_contains($mail_value, "@");
}