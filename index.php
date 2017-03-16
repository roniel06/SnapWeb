<!DOCTYPE html>
<html>
  <head>
    <title> SnapDCU </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/kickstart.js"></script> <!-- KICKSTART -->
    <link rel="stylesheet" href="css/kickstart.css" media="all" /> <!-- KICKSTART -->

  </head>
  <header>

    <nav>
      <div class="barraMenu">
        <ul class="menu">
          <li class="current"> <a href="#"> Inicio </a> </li>
          <li><a href="#">Subir Foto Externa </a> </li>
        </ul>

      </div>
    </nav>

  </header>

  <body onload="activateCamera()">
    <style>
    .canvasCamara{
      position: relative;
    }
    .canvasCamara>.botonesAccion{
        background: url('css/img/shotpng.png') bottom center no-repeat;
       height: 145px;
       left: 50%;
       margin: -64px 0 0 -64px;
       position: absolute;
       top: 85%;
       border: 15px solid transparent;
       width: 145px;
       z-index: 1;
    }



    .canvasCamara>.btnGuard{
      visibility: hidden;
      background: url('css/img/derecha.png') bottom right no-repeat;
       height: 145px;
       left: 50%;
       margin: -64px 0 0 -64px;
       position: absolute;
       top: 85%;
       border: 15px solid transparent;
       width: 145px;
       z-index: 1;

    }




    </style>

    <div class="container">
      <div class="canvasCamara">
        <video autoplay="true" width="1080" id="camaraOn" height="650"> </video>
        <button class="botonesAccion" onclick="tomarFoto()" type="button" id="btnTake" name="btnTake"></button>
        <button  id="btnGuard" type="button" class="btnGuard" onclick="guardarFoto()"  name="button"> </button>
      </div>

      <div class="divCanv">
            <canvas id="fotoTomada" height="1" width="1" ></canvas>

      </div>





    </div>


<script src="js/script.js"> </script>

  </body>


</html>
