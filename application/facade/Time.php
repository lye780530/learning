<?php
namespace app\facade;

use \think\facade;

class Time extends facade
{
    protected static function getFacadeClass()
    {
        return 'Time';
    }
}