<?php
namespace controller\login;

use lib\Auth;
use lib\Msg;

function get() {
    require_once SOURCE_BASE . 'views/login.php';
}

function post() {
    $id = get_param('id','');
    $pwd = get_param('pwd','');

    if (Auth::login($id,$pwd)) {
        MSG::push(MSG::INFO,'認証成功');
        redirect(GO_HOME);
    } else {
        MSG::push(MSG::ERROR,'認証成功');
        redirect(GO_REFERER);
    }
}
