  <link rel="stylesheet" href="../style.css" type="text/css">
<?php
  class Hit{
    public function footHit($players){
      $line = "";
      $rand = rand(1,10)/10;
      $players[0]->setLife(round(($players[0]->getLife()) - round(($players[1]->getStrength()*2*$rand))));
      if($players[0]->getName() == $_GET['player1']){
        $line.='<img src=\'../ressources/'.$_GET['player1'].'/kick.png\' border=\'0\' /></div> ';
        $line.='<img class=\'returnImg\' src=\'../ressources/'.$_GET['player2'].'/take.png\' border=\'0\' /></div> ';
      }else{
        $line.='<img src=\'../ressources/'.$_GET['player1'].'/take.png\' border=\'0\' /></div> ';
        $line.='<img class=\'returnImg\' src=\'../ressources/'.$_GET['player2'].'/kick.png\' border=\'0\' /></div> ';
      }
      return $line;
    }

    public function handHit($players){
      $line = "";
      $rand = rand(1,10)/10;
      $players[0]->setLife(round(($players[0]->getLife()) - round(($players[1]->getStrength()*$rand))));
      if($players[0]->getName() == $_GET['player1']){
        $line.='<img src=\'../ressources/'.$_GET['player1'].'/punch.png\' border=\'0\' /></div> ';
        $line.='<img class=\'returnImg\' src=\'../ressources/'.$_GET['player2'].'/take.png\' border=\'0\' /></div> ';
      }else{
        $line.='<img src=\'../ressources/'.$_GET['player1'].'/take.png\' border=\'0\' /></div> ';
        $line.='<img class=\'returnImg\' src=\'../ressources/'.$_GET['player2'].'/punch.png\' border=\'0\' /></div> ';
      }
      return $line;
    }

    public function dickSlap($players){
      $line = "";
      $rand = rand(1,10)/10;
      $players[0]->setLife(round(($players[0]->getLife()) - round(($players[1]->getStrength()*3*$rand))));
      if($players[0]->getName() == $_GET['player1']){
        $line.='<img src=\'../ressources/'.$_GET['player1'].'/alt.png\' border=\'0\' /></div> ';
        $line.='<img class=\'returnImg\' src=\'../ressources/'.$_GET['player2'].'/take.png\' border=\'0\' /></div> ';
      }else{
        $line.='<img src=\'../ressources/'.$_GET['player1'].'/take.png\' border=\'0\' /></div> ';
        $line.='<img class=\'returnImg\' src=\'../ressources/'.$_GET['player2'].'/alt.png\' border=\'0\' /></div> ';
      }
      return $line;
    }

    public function doubleKick(){
      return;
    }
  }
 ?>
