<?php
  class Hit{
    public function footHit($players){
      $line = "";
      $rand = rand(1,10)/10;
      $players[0]->setLife(round(($players[0]->getLife()) - round(($players[1]->getStrength()*2*$rand))));
      if($players[0]->getName() == "Jacky"){
        $line.='<img src=\'img/footPlayer1.png\' border=\'0\' /></div> ';
        $line.='<img src=\'img/takeHitPlayer2.png\' border=\'0\' /></div> ';
      }else{
        $line.='<img src=\'img/takeHitPlayer1.png\' border=\'0\' /></div> ';
        $line.='<img src=\'img/footPlayer2.png\' border=\'0\' /></div> ';
      }
      $line.="<br>";
      $line.=$players[0]->getName();
      $line.=" a perdu ";
      $line.=round($players[1]->getStrength()*3*$rand);
      $line.=", il lui reste ";
      $line.=$players[0]->getLife();
      $line.=" PV!";
      $line.=" Il a pris un coup de pied.";
      $line.="<br>";
      return $line;
    }

    public function handHit($players){
      $line = "";
      $rand = rand(1,10)/10;
      $players[0]->setLife(round(($players[0]->getLife()) - round(($players[1]->getStrength()*$rand))));
      if($players[0]->getName() == "Jacky"){
        $line.='<img src=\'img/handPlayer1.png\' border=\'0\' /></div> ';
        $line.='<img src=\'img/takeHitPlayer2.png\' border=\'0\' /></div> ';
      }else{
        $line.='<img src=\'img/takeHitPlayer1.png\' border=\'0\' /></div> ';
        $line.='<img src=\'img/handPlayer2.png\' border=\'0\' /></div> ';
      }
      $line.="<br>";
      $line.=$players[0]->getName();
      $line.=" a perdu ";
      $line.=round($players[1]->getStrength()*$rand);
      $line.=", il lui reste ";
      $line.=$players[0]->getLife();
      $line.=" PV!";
      $line.=" Il a pris un coup de poing.";
      $line.="<br>";
      return $line;
    }

    public function dickSlap($players){
      $line = "";
      $rand = rand(1,10)/10;
      $players[0]->setLife(round(($players[0]->getLife()) - round(($players[1]->getStrength()*3*$rand))));
      if($players[0]->getName() == "Jacky"){
        $line.='<img src=\'img/bifflePlayer1.png\' border=\'0\' /></div> ';
        $line.='<img src=\'img/takeHitPlayer2.png\' border=\'0\' /></div> ';
      }else{
        $line.='<img src=\'img/takeHitPlayer1.png\' border=\'0\' /></div> ';
        $line.='<img src=\'img/bifflePlayer2.png\' border=\'0\' /></div> ';
      }
      $line.="<br>";
      $line.=$players[0]->getName();
      $line.=" a perdu ";
      $line.=round($players[1]->getStrength()*3*$rand);
      $line.=", il lui reste ";
      $line.=$players[0]->getLife();
      $line.=" PV!";
      $line.=" Il a recu une biffle, LES DEGATS!!!!!!!!!!!!!";
      $line.="<br>";
      return $line;
    }

    public function doubleKick(){
      return;
    }
  }
 ?>
