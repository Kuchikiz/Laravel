
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap !-->
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <!-- Fonte -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">

</head>


<header>
  <div class ="container" id="nav-container">
    <nav class ="navbar navbar-expand-lg">
      <a href ="#" class ="navbar-brand">
      <img id="logo" src="img/iconelogo.png" alt="Adega Logo"> Adega Irmãos Aliados
</a>
<button class ="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
  <span class ="navbar-toggler-icon">
</span>
</button>

<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
  <div class="navbar-nav">

<a class="nav-item nav-link" id="index-menu" href="/">Home</a>
<a class="nav-item nav-link" id="categoria-menu" href="/categoria">Categoria</a>
<a class="nav-item nav-link" id="cliente-menu" href="/Cliente">Cliente</a>
<a class="nav-item nav-link" id="contato-menu" href="/Contato">Contato</a>
<a class="nav-item nav-link" id="pedido-menu" href="/pedido">Pedido</a>
<a class="nav-item nav-link" id="produto-menu" href="/produto">Produto</a>
</div>
</div>
 
</div>
</header>


<!-- Scripts !-->
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Font Awesome !-->
<script src="https://kit.fontawesome.com/4b2b8e1b2d.js" crossorigin="anonymous"></script>
<!-- Progress bar !-->
<script src="js/progressbar.min.js"></script>
<!-- Paralax -->
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
<script src="js/scripts.js"> </script>

@yield ('content')

<footer class="bg-light text-center text-lg-start site-foote fixed-bottom">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-12 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Adega Irmãos Aliados</h5>

        <p>
          Aproveite, a felicidade é algo passageiro assim como um sinal de fumaça.</br>
          Somos uma loja especializada em trazer o melhor do mercado nacional. </br>
          Venha conhecer uma de nossas filiais!
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
    
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: Adega Irmãos Aliados
   
  </div>
  <!-- Copyright -->
</footer>
</html>
