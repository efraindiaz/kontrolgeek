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
      <a class="navbar-brand" href="index.php">Kontrolgeek</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <form class="navbar-form navbar-left" action="search.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar" required name="engine">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>
        <li class="dropdown">
          <a style="" href="#" class="dropdown-toggle font-opc-nav" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "".$_SESSION['nombre']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="EditarUsuario.php">Perfil</a></li>
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
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>
        <?php require_once('db/conexion.php'); 
          $conn = dbConexion();

          $sqlArt = "SELECT SUM(cantidad) as cantidadArt from carrito WHERE idUsuario = ".$_SESSION['idusuario'];
          $resultArt = $conn->query($sqlArt);
          $rowArt = $resultArt->fetch(PDO::FETCH_ASSOC);
        ?>
        <li><a style="" class="cart-ico-nav" role="" data-toggle="collapse" href="#collapseCart" aria-expanded="false" aria-controls="collapseExample">
        <span class="glyphicon glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"><span id="badgeCantArt" class="badge badge-cant-cart"><?php echo $rowArt['cantidadArt'];?></span>   
        </a></li>
        <?php } else{ ?>
        <li><a style="" class="cart-ico-nav" role="" data-toggle="collapse" href="#collapseCart" aria-expanded="false" aria-controls="collapseExample">
        <span class="glyphicon glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"><span id="badgeCantArt" class="badge badge-cant-cart"></span>   
        </a></li>
        <?php } ?>         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="collapse cart-prod" id="collapseCart">
    <div class="contenedor-carrito">
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>

      <?php require_once('db/conexion.php'); 
      $conn = dbConexion();
      $sql = "SELECT producto.id, producto.nombre, producto.imgPrev, stock.cantidad as disponible, stock.precioCompra, stock.precioVenta, carrito.cantidad as carritoCantidad from producto join stock on producto.id = stock.id_producto join carrito on producto.id = carrito.idArticulo where carrito.idUsuario = ".$_SESSION['idusuario'];
      $result = $conn->query($sql);
      $rows = $result->fetchAll();

      $checkCart = "SELECT COUNT(*) FROM carrito WHERE idUsuario  = ".$_SESSION['idusuario'];
      $resultCart = $conn->query($checkCart);
      $check = $resultCart->fetch(PDO::FETCH_ASSOC);

      ?>
      <?php if($check['COUNT(*)'] == '0'){ ?>
        <div id="cart" class="text-center" style="padding-top:50px;min-height:100px;">
          <p><strong>¡Tu carrito está vacio!</strong></p>
        </div>
      <?php }else{?>
      <!--Si tiene articulos muestra esto --> 
      <p>Tienes <?php echo $rowArt['cantidadArt'];?> artículo(s) en tu carrito</p>
      <?php foreach ($rows as $row) { ?>

      <div class="col-xs-12 col-md-12" style="background-color:white;padding:0px; border-bottom: 1px solid #d0cdcd;">
        <div class="col-xs-3 col-md-3" style="padding:0px; background-color:white;"><img src="<?php echo $row['imgPrev'];?>" alt="" style="height:50px;"></div>
        <div class="col-xs-7 col-md-7" style="">
          <div class="col-md-12" style="padding:0px;"><?php echo $row['nombre'];?></div>
          <div class="col-md-12" style="padding:0px;">$<?php echo $row['precioVenta']*$row['carritoCantidad']?></div>          
        </div>
        <div class="col-xs-1 col-md-1" style="padding:0px;">x<?php echo $row['carritoCantidad'];?></div>
        <!--Boton eliminar del carrito-->
        <div class="col-xs-1 col-md-1" style="padding:0px;">
          <form action="db/remover_del_carrito.php">
            <input type="text" value="<?php echo $_SESSION['idusuario'];?>" name="idUser" hidden>
            <input type="text" value="<?php echo $row['id'];?>" name="idArt" hidden>
            <input type="submit" value="x" class="x-cart">
          </form>
        </div>
      </div>
      
      <?php } ?> 
      
      <div class="row">
        <div class="col-md-12">
          <div class="text-right div-botones-cart"><a href="db/vaciar_carrito.php" class="btn btn-vaciar-cart">Vaciar Carrito</a></div>
          <div class="text-right div-botones-cart"><a href="mi-carrito.php" class="btn btn-detalle-cart">Ver Detalles</a></div>
        </div>
      </div>
      <!--FIN Si tiene articulos muestra esto -->
      <?php } ?>
      <?php } else{ ?>
        <p>No has iniciado sesion</p>
        <a href="" class="btn-block" data-toggle="modal" data-target=".modalLogin">Iniciar sesión</a>
      <?php } ?>
    </div>
    <!--Fin contenedor del carrito-->
</div>
<div class="row" style="margin:0px;">
  <div class="col-md-12" style="padding:0px;">
    <div class="col-xs-6 col-sm-3 col-md-3 cat-opc"><a href="drones.php" class="btn btn-lg btn-block" role="button">Drones</a></div>
    <div class="col-xs-6 col-sm-3 col-md-3 cat-opc"><a href="helicopteros.php" class="btn btn-lg btn-block" role="button">Helicopteros</a></div>
    <div class="col-xs-6 col-sm-3 col-md-3 cat-opc"><a href="carros.php" class="btn btn-lg btn-block" role="button">Carros RC</a></div>
    <div class="col-xs-6 col-sm-3 col-md-3 cat-opc"><a href="botes.php" class="btn btn-lg btn-block" role="button">Botes RC</a></div>
  </div>
</div>
