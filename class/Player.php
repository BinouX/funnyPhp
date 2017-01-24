<?php
  class Player{
      private $_name;
      private $_strength;
      private $_experience;
      private $_stuff;
      private $_life;
      private $_speed;

      public function __construct($name, $strength, $life, $speed){
        $this -> _name = $name;
        $this -> _strength = $strength;
        $this -> _life = $life;
        $this-> _speed = $speed;
      }

    public function getName()
    {
        return $this->_name;
    }
    public function setName($_name)
    {
        $this->_name = $_name;

        return $this;
    }
    public function getStrength()
    {
        return $this->_strength;
    }
    public function setStrength($_strength)
    {
        $this->_strength = $_strength;

        return $this;
    }
    public function getExperience()
    {
        return $this->_experience;
    }
    public function setExperience($_experience)
    {
        $this->_experience = $_experience;

        return $this;
    }
    public function getStuff()
    {
        return $this->_stuff;
    }

    public function setStuff($_stuff)
    {
        $this->_stuff = $_stuff;

        return $this;
    }
    public function getLife()
    {
        return $this->_life;
    }
    public function setLife($_life)
    {
        $this->_life = $_life;

        return $this;
    }
    public function getSpeed()
    {
        return $this->_speed;
    }

    public function setSpeed($_speed)
    {
        $this->_speed = $_speed;

        return $this;
    }

}
 ?>
