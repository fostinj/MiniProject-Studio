<?php

session_start();

function setSession($index, $value)
{
    $_SESSION[$index] = $value;
    // return true;
}

function getSession($index)
{
    if(isset($_SESSION[$index])){
        return $_SESSION[$index];
    }
    return false;
}

function delSession($index)
{
    if(isset($_SESSION[$index])){
        unset($_SESSION[$index]);
        return true;
    }
    return false;
}