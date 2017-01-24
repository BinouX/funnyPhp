<?php

/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 23/01/2017
 * Time: 10:29
 */
class luck
{

    public  function __construct(){

}

public function getRand($max){
        return rand(0,$max);
}

}