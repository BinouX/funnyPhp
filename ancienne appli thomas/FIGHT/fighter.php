<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 23/01/2017
 * Time: 10:06
 */
class fighter
{
    private $name;
    private $str;
    private $stuff;
    private $pix;
    private $hp;
    private $speed;
    private $bragsentence;

    public function __construct($name){
        $this->name = $name;
    }
    public function punch($partner){
        echo "<p>".$this->getName()." punches ";
        $partner->isaggro($this->getStr());
    }
    public function kick($partner){
        echo "<p>".$this->getName()." kicks";
        $partner->isaggro($this->getStr());
    }
    public function bifle($partner){
        echo "<p>".$this->getName()." dickslaps ";
        $partner->isaggro($this->getStr());
    }
    public function slap($partner){
        echo "<p>".$this->getName()." slaps ";
        $partner->isaggro($this->getStr());
    }
    public function brag(){
    echo "  His/her ennemy won the  battle , spitting on the corpse of his/her ennemy, he/she says ".$this->getBragsentence()."</p>";
    }
    public function isalive(){
        if($this->getHp() <=  0 ){
            echo "<p> ".$this->getName()." is dead ".$this->brag()." ";
            return false;
        } else{
            return true;
        }
    }

    /**
     * @return mixed
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * @param mixed $str
     */
    public function setStr($str)
    {
        $this->str = $str;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getStuff()
    {
        return $this->stuff;
    }

    /**
     * @param mixed $stuff
     */
    public function setStuff($stuff)
    {
        $this->stuff = $stuff;
    }

    /**
     * @return mixed
     */
    public function getPix()
    {
        return $this->pix;
    }

    /**
     * @param mixed $pix
     */
    public function setPix($pix)
    {
        $this->pix = $pix;
    }

    /**
     * @return mixed
     */
    public function getBragsentence()
    {
        return $this->bragsentence;
    }

    /**
     * @param mixed $bragsentence
     */
    public function setBragsentence($bragsentence)
    {
        $this->bragsentence = $bragsentence;
    }

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }
    /**
     * @param mixed $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    public function getstats(){
        return " ".$this->getName()." has ".$this->getStr()." in strength, ".$this->getSpeed()." in speed and  ".$this->getHp()." in health ";
    }

    public function isaggro($partnerstr){
        //a chace to dodge
        $luck = new luck();
        if($luck->getRand(100) > 80){
            echo " but ".$this->getName()." dodged the attack</p>";
        }else{
            echo " ".$this->getName()." .";
            $this->setHp($this->getHp()-$partnerstr);
            echo " ".$this->getName()." loses ".$partnerstr." HP , he/she has ".$this->getHp()." HP left </p>";
        }
}

    public function aggro($partner){
        $luck = new luck();
        switch ($luck->getRand(4)) {
            case 0:
                $this->punch($partner);
                break;
            case 1:
                $this->kick($partner);
                break;
            case 2:
                $this->bifle($partner);
                break;
            case 4:
                $this->slap($partner);
                break;
        }

    }









}