<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>JS - Animated Modal</title>


    <!-- /*Links que precisa para fazer o animated modal -->
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/animatedModal.js"></script>
    <!-- */ -->

    <!-- <script src="js/jquery-3.3.1.js"></script> -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo próprio desse site -->
    <link href="css/customizado.css" rel="stylesheet">

    <script type="text/javascript">
    window.onload = function(){
      document.getElementById("fechar").style = "display: block; margin-left:90%; background: white; color: black; margin-top:1%;";
      document.getElementById("fechar02").style = "display: block; margin-left:90%; background: white; color: black; margin-top:1%;";

      var corpo = document.getElementById('corpo');
      var demo02 = document.getElementById('demo02');
      var campoModal02 = document.getElementById('campoModal02');
      var fechar02 = document.getElementById('fechar02');
      var tabela = document.getElementById('tabela');
      var navbar = document.getElementById('navbar');

      demo02.onclick = function(){
        navbar.style = 'background-color: rgba(50, 65, 100, 90);';
        navbar.style = 'color: rgba(50, 65, 100, 90);';
        corpo.style = 'background-color: rgba(50, 65, 100, 90);';
        tabela.style = 'background-color: rgba(50, 65, 100, 90);';
        campoModal02.style.display = 'block';
      }
      fechar02.onclick = function(){
        navbar.style.backgroundColor = 'black';
        navbar.style.color = 'white';
        corpo.style.backgroundColor = 'white';
        tabela.style.backgroundColor = 'white';
      }
    }
    </script>

    <style>
    /* Botao de Fechar */
        #btn-close-modal {
            width:100%;
            text-align: center;
            cursor:pointer;
            color:#fff;
            padding-top: 1%;
            padding-right: 10%;
        }
        #demo01{
          margin-left: 45.5%;
          margin-top: 10%;
        }
        #demo02{
          color: white;
          background-color: darkBlue;
          margin-top: 10%;
        }
      </style>

  </head>

  <body id="corpo" style="background-color:white">

    <header>
      <!-- Menu Fixo -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background:black" id="navbar">
        <a class="navbar-brand" href="index.php">JqueryAnimatedModal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Início<span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
            <!-- <div class="dropdown">
              <button style="color:white;" class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div> -->
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>


    <!-- Conteúdo do seu tutorial -->
    <main role="main" class="container">
      <h1 class="mt-5">Como utilizar o JQuery Animated Modal?</h1>
      <p class="lead">O animatedModal.js é um plugin jQuery para criar um modal de tela cheia com transições CSS3.
        <br>Você pode criar suas próprias transições ou usar as transições do animate.css.<br>
        <br>Este tutorial, irá lhe ensinar a como utilizar duas dessas transições: <br>
        <br><li class="lead">
          <b>
            Exemplo 1:
          </b>
          <ul>
            Ao abrir: 'zoom in';
          </ul>
          <ul>
            Ao fechar: 'bounceOut';
          </ul>
          <button type="button" name="button" id="demo01" href="#animatedModal" class="btn btn-primary"
          onClick="document.all.campoModal.style.display='block'" style="margin-left: 10%;margin-top:3%;margin-bottom:3%;">
          Exemplo 1 - Modal Animado </button>
        </li>
        <li class="lead">
          <b>
            Exemplo 2:
          </b>
          <ul>
            Ao abrir: 'lightSpeedIn';
          </ul>
          <ul>
            Ao fechar: 'bounceOutDown';
          </ul>
          <button type="button" name="button" id="demo02" href="#modal-02" class="btn"
          style="margin-left: 10%;margin-top:3%;margin-bottom:3%;"> Como fazer? </button>
        </li>

      <!-- Chamando o modal -->

      <!--DEMO01-->
      <div id="animatedModal">
          <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
          <div  id="btn-close-modal" class="close-animatedModal">
              <button id="fechar" type="btn button" style="display:none;">Fechar</button>
          </div>

          <!-- Conteúdo do Modal 1-->
          <div class="mt-2 pt-4 pl-4 pr-4" id="campoModal" style="display:none; margin:3%; color: white; height:80%; background-color:darkGray;">
            <!-- <?php include "conteudo.php"; ?> -->
            header("location:conteudo.php");
          </div>
      </div>

      <!--DEMO02-->
      <div id="modal-02">
          <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
          <div  id="btn-close-modal" class="close-modal-02">
            <!-- CLOSE MODAL -->
            <button id="fechar02" type="btn button" style="display:none;">Fechar</button>
          </div>

          <div id="campoModal02" class="modal-content mt-2 pt-4 pr-4" style="display: none;color: white;">
              <!-- Conteúdo do modal 02 -->
              <?php include "conteudo2.php"; ?>
      </div>
    </div>

      <script>

          //Configurando o modal 1 por meio do ID demo01
          $("#demo01").animatedModal({
            color:'gray',
            width:'60%',
            height:'60%',
            left: '20%',
            top: '10%',
            animationDuration: '.60s',
          });

          //Configurando o modal 2 por meio do ID demo02
          $("#demo02").animatedModal({
              animatedIn:'lightSpeedIn',
              animatedOut:'bounceOutDown',
              color:'darkBlue',
              width:'60%',
              height:'60%',
              left: '20%',
              top: '10%',
              animationDuration: '.2s',
          });

      </script>
    </main>
    <?php include "codigo.php"; ?>


    <!-- Rodapé -->
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Developed By Vinicius de Freitas Rangel.</span>
      </div>
    </footer>

  </body>
</html>
