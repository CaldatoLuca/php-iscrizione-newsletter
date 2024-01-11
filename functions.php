<?php

function checkEmail($email)
{
    return str_contains($email, '.') && str_contains($email, '@');
}
