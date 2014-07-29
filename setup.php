<?php

function squirrelmail_plugin_init_redirect() {

   global $squirrelmail_plugin_hooks;

   $squirrelmail_plugin_hooks['logout_error']['aaa'] = 'redirect_logout';
   $squirrelmail_plugin_hooks['login_cookie']['aaa'] = 'redirect_login';

}

function redirect_logout() {

    include_once(SM_PATH . 'plugins/redirect/functions.php');
    return redirect_logout_do();

}

function redirect_login() {

    include_once(SM_PATH . 'plugins/redirect/functions.php');
    return redirect_login_do();

}
