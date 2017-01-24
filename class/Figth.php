  <link rel="stylesheet" href="../style.css" type="text/css">
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
      $this->_Player1 = new Player($_GET['player1'], 1);
      $this->_Player2 = new Player($_GET['player2'], 2);
      $this->_Hit = new Hit();
      $this->_array = array();
      $this->punch($this->_Player1, $this->_Player2);
      return $this->_array;
    }

    public function punch($player1, $player2){
      for($ii=0; $ii <4 ; $ii++){
        $line = '';
        $line.='<img src=\'../ressources/'.$player1->getName().'/present.png\' border=\'0\' /></div> ';
        $line.='<img class=\'returnImg\' src=\'../ressources/'.$player2->getName().'/present.png\' border=\'0\' /></div> ';
        array_push($this->_array,$line);
      }

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
      if($player->getName() == $this-> _Player1->getName()){
        $line.='<img class="win1" src=\'../ressources/'.$this-> _Player1->getName().'/dance1.png\' border=\'0\' />';
        $line.='<img class="win1 returnImg" src=\'../ressources/'.$this-> _Player2->getName().'/kick.png\' border=\'0\' />' ;
        array_push($this->_array,$line);

        $line = '';
        $line.='<img class="win1" src=\'../ressources/'.$this-> _Player1->getName().'/dance1.png\' border=\'0\' />';
        $line.='<img class="win1 returnImg" src=\'../ressources/'.$this-> _Player2->getName().'/fall.png\' border=\'0\' />' ;
        array_push($this->_array,$line);

        $line = '';
        $line.='<img class="win1" src=\'../ressources/'.$this-> _Player1->getName().'/dance1.png\' border=\'0\' />';
        $line.='<img class="win1 returnImg" src=\'../ressources/'.$this-> _Player2->getName().'/down.png\' border=\'0\' />' ;
        array_push($this->_array,$line);
      }else{
        $line.='<img class="win2" src=\'../ressources/'.$this-> _Player1->getName().'/kick.png\' border=\'0\' />';
        $line.='<img class="win2 returnImg" src=\'../ressources/'.$this-> _Player2->getName().'/dance1.png\' border=\'0\' />';
        array_push($this->_array,$line);

        $line = '';
        $line.='<img class="win2" src=\'../ressources/'.$this-> _Player1->getName().'/fall.png\' border=\'0\' />';
        $line.='<img class="win2 returnImg" src=\'../ressources/'.$this-> _Player2->getName().'/dance1.png\' border=\'0\' />';
        array_push($this->_array,$line);

        $line = '';
        $line.='<img class="win2" src=\'../ressources/'.$this-> _Player1->getName().'/down.png\' border=\'0\' />';
        $line.='<img class="win2 returnImg" src=\'../ressources/'.$this-> _Player2->getName().'/dance1.png\' border=\'0\' />';
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
  $player1JS = $_GET['player1'];
  $player2JS = $_GET['player2'];
?>

<div class="container">

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
<?php
  $php_array = $arrayFight;
  $js_array =json_encode($php_array);
  echo "var javascript_array = ". $js_array . ";\n";
  $jsPlayer1_array =json_encode($player1JS);
  $jsPlayer2_array =json_encode($player2JS);
  echo "var player1 = ".$jsPlayer1_array.";\n";
  echo "var player2 = ".$jsPlayer2_array.";\n";
?>
var $i = 0;
var $tailleMax = javascript_array.length;
var punch = new Audio('img/PUNCH.wav');
var slap = new Audio('img/slap.wav');
var start = new Audio('img/start.wav');
var over = new Audio('img/end.wav');
var bell = new Audio('img/bell.wav');
start.play();
  setInterval(function(){
    if(start.ended){
      if($i < 4){
        bell.play();
        $('.container').empty();
        $('.container').append(javascript_array[$i]);
      }else if($i < $tailleMax){
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
                $('.container').append('<img class="win1" src=\'../ressources/'+player1+'/dance1.png\' border=\'0\' /> <img class="win1 returnImg" src=\'../ressources/'+player2+'/down.png\' border=\'0\' />');
              }else{
                $('.container').append('<img class="win1" src=\'../ressources/'+player1+'/dance2.png\' border=\'0\' /> <img class="win1 returnImg" src=\'../ressources/'+player2+'/down.png\' border=\'0\' />');
              }
          }else{
            if($i%2 == 0){
              $('.container').append('<img class="win2" src=\'../ressources/'+player1+'/down.png\' border=\'0\' /> <img class="win2 returnImg" src=\'../ressources/'+player2+'/dance1.png\' border=\'0\' /> ');
            }else{
              $('.container').append('<img class="win2" src=\'../ressources/'+player1+'/down.png\' border=\'0\' /> <img class="win2 returnImg" src=\'../ressources/'+player2+'/dance2.png\' border=\'0\' />');
            }
          }
      }
      $i++;
    }
  },250);

</script>
