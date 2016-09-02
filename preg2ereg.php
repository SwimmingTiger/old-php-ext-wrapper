<?php
#通过preg_*（PCRE扩展）实现ereg扩展的API

function ereg_replace($patten, $replace, $str) {
        $patten = '!' . str_replace('!', '\!', $patten) . '!s';
        return preg_replace($patten, $replace, $str);
}

function eregi_replace($patten, $replace, $str) {
        $patten = '!' . str_replace('!', '\!', $patten) . '!is';
        return preg_replace($patten, $replace, $str);
}

function ereg($patten, $str, & $arr = null) {
        $patten = '!' . str_replace('!', '\!', $patten) . '!s';
        return preg_match($patten, $str, $arr);
}

function eregi($patten, $str, & $arr = null) {
        $patten = '!' . str_replace('!', '\!', $patten) . '!is';
        return preg_match($patten, $str, $arr);
}
