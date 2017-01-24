<?php

/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 23/01/2017
 * Time: 10:35
 */
require 'arena.php';
require 'fighter.php';
require 'luck.php';
class spawner
{

    public function __construct()
    {
    }

    public function spawn($p1name,$p2name,$arenaname){
        $luck = new luck();
        $player1 = new fighter($p1name);
        $player1->setStr($luck->getRand(10));
        $player1->setSpeed($luck->getRand(10));
        $player1->setHp($luck->getRand(100));
        $player1->setBragsentence("Suck it bastard");
        $player2 = new fighter($p2name);
        $player2->setStr($luck->getRand(10));
        $player2->setSpeed($luck->getRand(10));
        $player2->setHp($luck->getRand(100));
        $player2->setBragsentence("See ya in hell");
        $arena =   new arena($arenaname);
        $arena->setarena($player1,$player2);
        return $arena;
    }


}