

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Alphabet Soup</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"  media="all">
  <link rel="stylesheet" href="bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.tagit.css">
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script type="text/javascript" src="js/wordfind.js"></script> 
  <script type="text/javascript" src="wordfindgame.js"></script> 
  <script type="text/javascript" src="bootstrap/bootstrap.min.js" ></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/tag-it.js"></script>
</head>

<body>


<div class="container">
    
<header>
  <div class="row  hiding text-center">
    <div class="panel panel-default">
      <div class="panel-heading logo">
        <img class="logo" src="images/banner-916673__340.jpg" alt="">
      </div>
    </div>
  </div>
</header>

  <div class="row">     
    <!-- Call function create game -->
    <script type="text/javascript">
        var mytag;
        $(document).ready(function () {
            mytag = $("#myTags").tagit({});
            Create();
        });
    </script>
  </div>
  
<div class="row text-center">
  <div class="panel panel-default">
    <div class="panel-heading"><h4><strong>Welcome to the Alphabet Soup!</strong> Write the words and <strong>click</strong> on the button <strong>Game</strong></h4></div>

      <div class="panel-body">   
        <ul id="myTags">
          <li>Powered</li>
          <li>by</li>
          <li>Mocion</li>
          <li>MocionSoft</li>
        </ul>
      </div>
      <div class="panel-heading hiding"><h4><strong>Ready!!! Go!</strong></h4></div>
        <div class="panel-body">
          <div class="hiding">
            <button onclick="Create();" class="btn btn-success btn-lg">Game</button>
            <button id='solve' class="btn btn-primary btn-lg">Solve</button>
          </div>
        <div class="row">
        <div class="col-md-3">
        <div id='words'></div>
        </div>
          <div class="col-md-9">
            <div id='game'></div>
          </div>
        </div>
        <!--button onclick="window.print();" class="btn btn-warning btn-lg "> Print</button-->
      </div>
      <footer>
        <a href="https://andersonbello.herokuapp.com/">Anderson Bello</a>
      </footer>
    </div>


  </div>

    <script>
      var words = [];
      var gamePuzzle;
      function Create() {
        datos = mytag[0].textContent.trim().split("×");
          for (i = 0; i < (datos.length)-1; i++) {
            words.push(datos[i]);
          }
        $('#games').show();
        gamePuzzle = wordfindgame.create(datos, '#game', '#words');
        var puzzle = wordfind.newPuzzle(datos, { height: 18, width: 18, fillBlanks: false });
          wordfind.print(puzzle);   
        }
		  $('#solve').click( function() {wordfindgame.solve(gamePuzzle, words);});
    </script>

</div>

</body>
</html>