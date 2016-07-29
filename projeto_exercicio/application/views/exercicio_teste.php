<!DOCTYPE html>
<html>
<title>CodeRace - Exercicios</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
  <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i>&nbsp;Menu</button>
  <span class="w3-right"><img src="LogoUNIFEI.gif" style="width:30px;height:30px;" class="w3-circle" alt="unifei_logo" title="Logo UNIFEI"></span>
</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="NinjaAvatar.png" class="w3-circle w3-margin-right" style="width:48px">
    </div>
    <div class="w3-col s8">
      <span>Bem vindo,<strong> Aluno</strong></span><br>
      <a href="#" class="w3-hover-none w3-hover-text-red w3-show-inline-block"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-green w3-show-inline-block"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-blue w3-show-inline-block"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
  <a href="home.html" class="w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>&nbsp;Visão geral</a>
  <a href="exercicio.html" class="w3-padding"><i class="fa fa-file-code-o"></i>&nbsp;Exercícios</a>
  <a href="minhas_conquistas.html" class="w3-padding"><i class="fa fa-trophy"></i>&nbsp;Minhas conquistas</a>
  <a href="leaderboard.html" class="w3-padding"><i class="fa fa-bar-chart"></i>&nbsp;Leaderboard</a>
</nav>


<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:48px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:24px">
    <h4><b><i class="fa fa-file-code-o"></i>&nbsp;1.0) Criação de variáveis - Problema XX</b></h4>
  </header>
  <div class=""w3-container"">
<h5><?=$enunciado?></h5>

<p>
<input class="w3-radio" type="radio" name="alternativa" value="a" checked>
<label class="w3-validate" > <?=$a?> </label></p>

<p>
<input class="w3-radio" type="radio" name="alternativa" value="b">
<label class="w3-validate"> <?=$b?></label></p>

<p>
<input class="w3-radio" type="radio" name="alternativa" value="c">
<label class="w3-validate"> <?=$c?> </label></p>

<p>
<input class="w3-radio" type="radio" name="alternativa" value="b">
<label class="w3-validate"> <?=$d?> </label></p>

<p>
<input class="w3-radio" type="radio" name="alternativa" value="b">
<label class="w3-validate"> <?=$e?> </label></p>
    </div>
<hr>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <button class="w3-btn w3-round-large">Submeter</button>
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-round-large">Videos</button>
    <button onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-round-large">Exemplos</button>
  </footer>

<!-- Botão Videos -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-8">
    <header class="w3-container w3-black">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h2>Videos</h2>
    </header>
    <div class="w3-container">
       <p><video width="320" height="240" controls>
         <source src="https://www.youtube.com/watch?v=5W9YsbqnX0U" type="video/mp4">
           Your browser does not support the video tag.
         </video>
         <iframe width="420" height="315"
         src="http://www.youtube.com/embed/XGSy3_Czz8k?autoplay=0">
        </iframe>
      </p>
    </div>
  </div>
</div>

<!-- Botão Exemplos -->
<div id="id02" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-8">
    <header class="w3-container w3-black">
      <span onclick="document.getElementById('id02').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h2>Exemplos</h2>
    </header>
    <div class="w3-container">
      <p>Lembre-se que a sintaxe de criação de variáveis é a seguinte:</p>
      <pre><code><p>tipo nome_da_variavel;</p></code></pre>
    </div>
  </div>
</div>

  <!-- End page content -->
</div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}

function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>

</body>
</html>
