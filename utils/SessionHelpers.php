<?php


namespace utils;


class SessionHelpers
{
    static function init()
    {
        session_start();
    }

    static function login($equipe)
    {
        $_SESSION['LOGIN'] = $equipe;
    }

    static function logout()
    {
        unset($_SESSION['LOGIN']);
    }

    static function getConnected()
    {
        if (SessionHelpers::isLogin()) {
            return $_SESSION['LOGIN'];
        } else {
            return array();
        }
    }

    static function isLogin()
    {
        return isset($_SESSION['LOGIN']);
    }
}