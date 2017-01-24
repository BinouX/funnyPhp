<?php
  require 'Player.php';
  require 'Hit.php';

  class Figth{
    private $_winner;
    private $_array;

    private $_Player1;
    private $_Player2;
    private $_Hit;

    public function getWinner()
    {
        return $this->_winner;
    }

    public function setWinner($_winner)
    {
        $this->_winner = $_winner;

        return $this;
    }

    public function getArray(){
      return $this->_array;
    }

    public function __construct(){
      $this->_winner = false;
      $this->_Player1 = new Player('Jacky', rand(10,20), rand(150,300), rand(1,10));
      $this->_Player2 = new Player('Michel', rand(10,20), rand(150,300), rand(1,10));
      $this->_Hit = new Hit();
      $this->_array = array();
      $this->punch($this->_Player1, $this->_Player2);
      return $this->_array;
    }

    public function punch($player1, $player2){
      $line = '';
      $line.='<img src=\'img/bifflePlayer1.png\' border=\'0\' /></div> ';
      $line.='<img src=\'img/bifflePlayer2.png\' border=\'0\' /></div> ';
      $line.='<br>';
      $line.='Go FIGHT!!!!!!!!!!!!!!!!!!!!!';
      $line.='<br>';

      array_push($this->_array,$line);
      while($this->_winner == false){
        $playerPunch = $this->whoTakePunch($player1, $player2);

        if($playerPunch == 0){
          $this->_Hit->doubleKick();
        }else{
          $this->whichStyle($playerPunch);
        }

        if($player1->getLife() < 0){
          $this->dead($player1);
        }
        if($player2->getLife() < 0){
          $this->dead($player2);
        }
      }
    }

    public function dead($player){
      $line = '';
      $this->setWinner(true);
      if($player->getName() == 'Jacky'){
        $line.='<img class="win1" src=\'img/bifflePlayer1.png\' border=\'0\' />';
        $line.='<img class="win1" src=\'img/chute21.png\' border=\'0\' />' ;
        $line.='<br>';
        $line.=$player->getName().' is dead';
        array_push($this->_array,$line);

        $line = '';
        $line.='<img class="win1" src=\'img/bifflePlayer1.png\' border=\'0\' />';
        $line.='<img class="win1" src=\'img/chute22.png\' border=\'0\' />' ;
        $line.='<br>';
        $line.=$player->getName().' is dead';
        array_push($this->_array,$line);
        $line = '';

        $line.='<img class="win1" src=\'img/bifflePlayer1.png\' border=\'0\' />';
        $line.='<img class="win1" src=\'img/diePlayer2.png\' border=\'0\' />' ;
        $line.='<br>';
        $line.=$player->getName().' is dead';
        array_push($this->_array,$line);
      }else{
        $line.='<img class="win2" src=\'img/chute11.png\' border=\'0\' />';
        $line.='<img class="win2" src=\'img/bifflePlayer2.png\' border=\'0\' />';
        $line.='<br>';
        $line.=$player->getName().' is dead';
        array_push($this->_array,$line);

        $line = '';
        $line.='<img class="win2" src=\'img/chute12.png\' border=\'0\' />';
        $line.='<img class="win2" src=\'img/bifflePlayer2.png\' border=\'0\' />';
        $line.='<br>';
        $line.=$player->getName().' is dead';
        array_push($this->_array,$line);

        $line = '';
        $line.='<img class="win2" src=\'img/diePlayer1.png\' border=\'0\' />';
        $line.='<img class="win2" src=\'img/bifflePlayer2.png\' border=\'0\' />';
        $line.='<br>';
        $line.=$player->getName().' is dead';
        array_push($this->_array,$line);
      }
    }

    public function whoTakePunch($player1, $player2){
      $player1Speed = rand(0, $player1->getSpeed());
      $player2Speed = rand(0, $player2->getSpeed());

      if($player1Speed < $player2Speed){
        return array($player1,$player2);
      }else if($player1Speed > $player2Speed){
        return array($player2,$player1);
      }else{
        return 0;
      }
    }

    public function whichStyle($players){
      $randHit = rand(1,3);

      if($randHit==1){
        array_push($this->_array,$this->_Hit->footHit($players));
      }
      if($randHit==2){
        array_push($this->_array,$this->_Hit->handHit($players));
      }
      if($randHit==3){
        array_push($this->_array,$this->_Hit->dickSlap($players));
      }
    }
}

  $Figth = new Figth();
  $arrayFight = $Figth->getArray();
?>

<div class="container">

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
<?php
  $php_array = $arrayFight;
  $js_array =json_encode($php_array);
  echo "var javascript_array = ". $js_array . ";\n";
?>
var $i = 0;
var $tailleMax = javascript_array.length;
var punch = new Audio('img/PUNCH.wav');
var slap = new Audio('img/slap.wav');
var start = new Audio('img/start.wav');
var over = new Audio('img/over.wav');

start.play();
  setInterval(function(){
    if(start.ended){
      if($i < $tailleMax){
        $('.container').empty();
        $('.container').append(javascript_array[$i]);
        if($i%2 == 0){
            punch.play();
        }else{
            slap.play();
        }
      }else if($i == $tailleMax){
        over.play();
      }
      else{
          var dance = $('img').hasClass("win1")
          $('.container').empty();
          if(dance){
              if($i%2 == 0){
                $('.container').append('<img class="win1" src=\'img/win1.png\' border=\'0\' /> <img class="win1" src=\'img/diePlayer2.png\' border=\'0\' />');
              }else{
                $('.container').append('<img class="win1" src=\'img/win2.png\' border=\'0\' /> <img class="win1" src=\'img/diePlayer2.png\' border=\'0\' />');
              }
          }else{
            if($i%2 == 0){
              $('.container').append('<img class="win2" src=\'img/diePlayer1.png\' border=\'0\' /> <img class="win2" src=\'img/win1.png\' border=\'0\' /> ');
            }else{
              $('.container').append('<img class="win2" src=\'img/diePlayer1.png\' border=\'0\' /> <img class="win2" src=\'img/win2.png\' border=\'0\' />');
            }
          }
      }
      $i++;
    }
  },250);

</script>
