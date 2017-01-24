<html>
  <link rel="stylesheet" href="./style.css" type="text/css">
<table>
<tr>
  <td>
  <div class="player1" height="200px" width="100px" >
  </div>
  </td><td>
  <div>
    <h1>VS</h1>
  </div>
  </td><td>
  <div class="player2">
      </div>
  </td>
  </tr>
</table>
  <table>
    <tr>
      <td>
        <img id="anna" class="c1" src='./ressources/anna/name.png'/>
      </td>
      <td>
        <img id="brian" class="c2" src='./ressources/brian/name.png'/>
      </td>
      <td>
        <img id="crow" class="c3" src='./ressources/crow/name.png'/>
      </td>
      <td>
        <img id="eddy" class="c4" src='./ressources/eddy/name.png'/>
      </td>
      <td>
        <img id="gunjack" class="c5" src='./ressources/gunjack/name.png'/>
      </td>
    </tr>
    <tr>
      <td>
        <img id="heihachi" class="c6" src='./ressources/heihachi/name.png'/>
      </td>
      <td>
        <img id="hwoarang" class="c7" src='./ressources/hwoarang/name.png'/>
      </td>
      <td>
        <img id="jin" class="c8" src='./ressources/jin/name.png'/>
      </td>
      <td>
        <img id="king" class="c9" src='./ressources/king/name.png'/>
      </td>
      <td>
        <img id="kuma" class="c10" src='./ressources/kuma/name.png'/>
      </td>
    </tr>
    <tr>
      <td>
        <img id="law" class="c11" src='./ressources/law/name.png'/>
      </td>
      <td>
        <img id="lei" class="c12" src='./ressources/lei/name.png'/>
      </td>
      <td>
        <img id="mokujin" class="c13" src='./ressources/mokujin/name.png'/>
      </td>
      <td>
        <img id="panda" class="c14" src='./ressources/panda/name.png'/>
      </td>
      <td>
        <img id="yoshimitsu" class="c15" src='./ressources/yoshimitsu/name.png'/>
      </td>
    </tr>
  </table>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
  var select = new Audio('class/img/select.wav');
  var chomp = new Audio('class/img/chomp.wav');
  var player1 = false;
  var player2 = false;
  var perso1 = "";
  var perso2 = "";

  select.play();
  select.volume=0.8;
  $("img").mouseover(function(){
    if(player1 == false && $('.player1 img').length == 0){
      $(this).on("click", function(){
        chomp.play();
        $('.player1').append($(this).get()[0]);
        player1=true;
        perso1=$(this).clone().attr("id");
      });
    }else if(player2 == false && $('.player2 img').length == 0){
      $(this).on("click", function(){
        chomp.play();
        $('.player2').append($(this).get()[0]);
        player2=true;
        perso2=$(this).attr("id");
        console.log(perso2);
      });
    }
  });

  $( "html" ).mousemove(function(){
    if(player1 == true && player2==true){
      window.location.href = "./class/Figth.php?player1="+perso1+"&player2="+perso2;
    }
  });
</script>
