<?php

namespace Artaxerxes\Educaciona\lib;

class DatabaseSingleton
{
public static function getInstance(){
    if (self::$instance == null){
        self::$instance = new Database();
    }
}
}