<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 23/01/2017
 * Time: 10:35
 */
class arena
{
    private $player1;
    private $player2;
    private $arenaname;

    public function __construct($arenaname)
    {
        $this->arenaname = $arenaname;
    }
    public function advertise($sentence)
    {
        echo $sentence ;
    }
    public function setarena($player1, $player2)
    {
        $this->setPlayer1($player1);
        $this->setPlayer2($player2);
        $this->setPlayer1name($player1->getName());
        $this->setPlayer2name($player2->getName());
        $this->advertise("Today , in this beautiful arena of " . $this->getArenaname() . ", two champions will fight ...(applause)...their names are " . $player1->getName() . " and " . $player2->getName(). " ");
        $this->advertise("<br>");
        $this->advertise($player1->getstats());
        $this->advertise("<br>");
        $this->advertise($player2->getstats());
        $this->advertise("...<br>...<br>...REAAAAAAADY to RUMBLE !!!!!<br>");
        $this->advertise("FIGHT");
    }
    /**
     * @param $p1
     * @param $p2
     */
    public function fight($p1,$p2){
        if($this->init($p1,$p2)){
            $p1->aggro($p2);
        }else{
            $p2->aggro($p1);
        }
    }
    /**
     * @param $p1
     * @param $p2
     * @return bool
     */
    public function init($p1,$p2){
        if($p1->getSpeed()>$p2->getSpeed()){
            return true;
        }else{
            return false;
        }
    }
    /**
     * @return mixed
     */
    public function getArenaname()
    {
        return $this->arenaname;
    }

    /**
     * @param mixed $arenaname
     */
    public function setArenaname($arenaname)
    {
        $this->arenaname = $arenaname;
    }

    /**
     * @return mixed
     */
    public function getPlayer1name()
    {
        return $this->player1name;
    }

    /**
     * @param mixed $player1name
     */
    public function setPlayer1name($player1name)
    {
        $this->player1name = $player1name;
    }
    /**
     * @return mixed
     */
    public function getPlayer2name()
    {
        return $this->player2name;
    }
    /**
     * @param mixed $player2name
     */
    public function setPlayer2name($player2name)
    {
        $this->player2name = $player2name;
    }

    /**
     * @return mixed
     */
    public function getPlayer1()
    {
        return $this->player1;
    }

    /**
     * @param mixed $player1
     */
    public function setPlayer1($player1)
    {
        $this->player1 = $player1;
    }
    /**
     * @return mixed
     */
    public function getPlayer2()
    {
        return $this->player2;
    }
    /**
     * @param mixed $player2
     */
    public function setPlayer2($player2)
    {
        $this->player2 = $player2;
    }
}