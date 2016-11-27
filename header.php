<?php
session_start();
?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://www.kontrolgeek.com">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>
        <li class="dropdown">
          <a style="" href="#" class="dropdown-toggle font-opc-nav" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">#Nombre <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Perfil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="db/logout.php"><button type="button" class="btn btn-link btnCerrarSession">Cerrar Sesión</button></a></li>
          </ul>
        </li>
        <?php } else { ?>
        <li class="dropdown">         
          <a style="" href="#" class="dropdown-toggle font-opc-nav" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acceso <span class="caret"></span></a>
          <ul class="dropdown-menu">          
            <li><a><button type="button" class="btn btn-link" data-toggle="modal" data-target=".modalLogin">Iniciar Sesión</button></a></li>
            <li role="separator" class="divider"></li>
            <li><a><button type="button" class="btn btn-link" data-toggle="modal" data-target=".modalRegistro">Registrarse</button></a></li>
          </ul>
        </li>
        <?php } ?>
        <li><a style="" class="cart-ico-nav" role="" data-toggle="collapse" href="#collapseCart" aria-expanded="false" aria-controls="collapseExample">
        <span class="glyphicon glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"><span class="badge">42</span>   
      </a></li>         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="collapse cart-prod" id="collapseCart">
    <div class="well">
      <div><a href="" class="">Menor a Mayor</a></div>
      <div><a href="" class="">Mayor a Menor </a></div>
      <div><a href="" class="">Aa - zZ</a></div>
      <div><a href="" class="">Aa - zZ</a></div>
      <div><a href="" class="">Aa - zZ</a></div>
    </div>
</div>
<div class="row" style="margin:0px;">
  <div class="col-md-12" style="padding:0px;">
    <div class="col-xs-6 col-sm-3 col-md-3 cat-opc"><a href="drones.php" class="btn btn-lg btn-block" role="button">Drones</a></div>
    <div class="col-xs-6 col-sm-3 col-md-3 cat-opc"><a href="helicopteros.php" class="btn btn-lg btn-block" role="button">Helicopteros</a></div>
    <div class="col-xs-6 col-sm-3 col-md-3 cat-opc"><a href="carros.php" class="btn btn-lg btn-block" role="button">Carros RC</a></div>
    <div class="col-xs-6 col-sm-3 col-md-3 cat-opc"><a href="botes.php" class="btn btn-lg btn-block" role="button">Botes RC</a></div>
  </div>
</div>


<!--
<div class="col-md-12 no-padding-categorias">
  
    <div class="col-xs-6 col-sm-3 col-md-3 no-padding-categorias">
      <ul class="nav nav-pills">
        <li role="presentation" class="categorias"><a href="#">Drones</a></li>
      </ul>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 no-padding-categorias">
      <ul class="nav nav-pills">
        <li role="presentation" class="categorias"><a href="#">Helicopteros</a></li>
      </ul>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 no-padding-categorias">
      <ul class="nav nav-pills">
        <li role="presentation" class="categorias"><a href="#">Carros</a></li>
      </ul>
    </div>
    <div class="col-xs-6 col-sm-3 col-md-3 no-padding-categorias">
      <ul class="nav nav-pills">
        <li role="presentation" class="categorias"><a href="#">Botes</a></li>
      </ul>
    </div>
</div>-->