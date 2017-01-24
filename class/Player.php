<?php
  class Player{
      private $_name;
      private $_strength;
      private $_experience;
      private $_stuff;
      private $_life;
      private $_speed;
      private $_position;
      private $_maxLife;

      public function __construct($name, $position){
        $this -> _name = $name;
        $this -> _strength = rand(10,20);
        $this -> _maxLife = rand(150,300);
        $this -> _life = $this -> _maxLife;
        $this -> _speed = rand(1,10);
        $this -> _position = $position;
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
    public function getPosition()
    {
        return $this->_position;
    }
    public function setPosition($_position)
    {
        $this->_position = $_position;

        return $this;
    }
    public function getMaxLife()
    {
        return $this->_maxLife;
    }
    public function setMaxLife($_maxLife)
    {
        $this->_maxLife = $_maxLife;

        return $this;
    }

}
 ?>
