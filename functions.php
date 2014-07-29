<?php

function redirect_logout_do() {

    global $signout_page;
    header("location: $signout_page?fail=1");

    exit;

}

function redirect_login_do() {

    global $signout_page;
    header("Status: 303 See Other");
    header("location: $signout_page");

    exit;

}
