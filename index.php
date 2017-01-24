<html>
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
        <img class="c1" src='characters/1.jpg'/>
      </td>
      <td>
        <img class="c2" src='characters/2.jpg'/>
      </td>
      <td>
        <img class="c3" src='characters/3.jpg'/>
      </td>
      <td>
        <img class="c4" src='characters/4.jpg'/>
      </td>
      <td>
        <img class="c5" src='characters/5.jpg'/>
      </td>
    </tr>
    <tr>
      <td>
        <img class="c6" src='characters/6.jpg'/>
      </td>
      <td>
        <img class="c7" src='characters/7.jpg'/>
      </td>
      <td>
        <img class="c8" src='characters/8.jpg'/>
      </td>
      <td>
        <img class="c9" src='characters/9.jpg'/>
      </td>
      <td>
        <img class="c10" src='characters/10.jpg'/>
      </td>
    </tr>
    <tr>
      <td>
        <img class="c11" src='characters/11.jpg'/>
      </td>
      <td>
        <img class="c12" src='characters/12.jpg'/>
      </td>
      <td>
        <img class="c13" src='characters/13.jpg'/>
      </td>
      <td>
        <img class="c14" src='characters/14.jpg'/>
      </td>
      <td>
        <img class="c15" src='characters/15.jpg'/>
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

  select.play();
  select.volume=0.8;
  $("img").mouseover(function(){
    if(player1 == false && $('.player1 img').length == 0){
      $(this).on("click", function(){
        chomp.play();
        $('.player1').append($(this).get()[0]);
        player1=true;
      });
    }else if(player2 == false && $('.player2 img').length == 0){
      $(this).on("click", function(){
        chomp.play();
        $('.player2').append($(this)  .get()[0]);
        player2=true;
      });
    }
  });

  $( "html" ).mousemove(function(){
    if(player1 == true && player2==true){
      window.location.href = "./class/Figth.php"
    }
  });
</script>
