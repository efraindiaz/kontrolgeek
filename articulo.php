
<?php require_once('db/conexion.php'); 
  $conn = dbConexion();

  //Informacion de articulo
  //$sqlCamp = "SELECT * FROM producto WHERE id = ".$_POST['id-article']."";
  $sqlCamp = "SELECT * from producto join stock on producto.id = stock.id_producto where producto.id = '".$_REQUEST['sku']."'";
  $resultCamp = $conn->query($sqlCamp);
  $rowCamp = $resultCamp->fetch(PDO::FETCH_ASSOC);

  $sqlImg = "SELECT * from imagenproducto where id_producto = '".$_REQUEST['sku']."'";
  $resultImg = $conn->query($sqlImg);
  $rowImg = $resultImg->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php print $rowCamp['nombre']; ?></title>
  <meta charset="utf-8">
  <script src="js/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/login.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/lightbox.js"></script>
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/ficha.css" rel="stylesheet">
  

</head>
<body>
<?php require_once('header.php'); ?>

<div class="row" style="margin:0px; margin-bottom:80px;">

  <div class="col-md-10 col-md-offset-1" style="margin-top:50px; min-height:400px;">

    <div class="col-md-8 div-img-art">
      <div class="col-md-9">
        <img  src="<?php print $rowCamp['imgPrev']; ?>"  class="img-prev">
      </div>
      <div class="col-xs-12 col-md-3" style="height:100%; max-height:400px;">

        <?php foreach ($rowImg as $thumb) { ?>
        <div class="col-xs-3 div-img-thumbnail light" style="background-image:url('<?php echo $thumb['urlImagen']; ?>');"><a class="display" href="<?php echo $thumb['urlImagen']; ?>" data-lightbox="roadtrip"></a></div>
        <?php } ?>
      </div>
    </div>

    <div class="col-md-4 div-nom-art">
      <h3 class = "text-left nombre-art"><?php print $rowCamp['nombre']; ?></h3>
      <br>
      <h3 class = "text-left precio-art">$<?php print $rowCamp['precioVenta']; ?></h3>
      <br>
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>
      <input type="text" value="<?php print $rowCamp['cantidad']; ?>" hidden> 
      <form id="formInfoAddToCart" action="db/enviar_al_carrito.php">
        <input type="text" value="<?php print $rowCamp['id']; ?>" name="idProd" hidden>
        <input type="text" value="<?php echo $_SESSION['idusuario']; ?>" name="idUser" hidden>

        <?php if($rowCamp['cantidad'] == '0'){?>
          <div class="alert alert-danger text-center">
            <strong>Artículo no disponible*</strong>
          </div>
        <?php }else {?>
        <input type="submit" class="btn btn-lg btn-block btn-agregar-producto" value="Añadir al Carrito">
        <?php } ?>
      </form>
      <?php } else{?>
        <a type="button" class="btn btn-lg btn-block btn-agregar-producto" data-toggle="modal" data-target=".modalLogin">Añadir al Carrito</a>
      <?php } ?>      
    </div>
  </div>
</div>

<div class="row" style="margin:0px;">
  <div class="col-md-7 col-md-offset-1">
    <p class="bg-primary text-center ">Descripcion</p>
    <p><?php print $rowCamp['descripcion']; ?></p>
  </div>
</div>
<div class="row" style="margin:0px;">
  <div class="col-md-7 col-md-offset-1" style="padding:0px;">
    <div class="col-md-6" style="">
      <p class="bg-primary text-center ">fichaTecnica</p>
      <p><?php print $rowCamp['descripcion']; ?></p>
    </div>
    <div class="col-md-6" style="">
      <p class="bg-primary text-center ">Medidas</p>
      <p><?php print $rowCamp['dimenciones']; ?></p>
    </div>
  </div>
</div>

  <?php include 'footer.php'; ?>
  <?php require_once('Login.php'); ?>
  <?php require_once('Registro.php'); ?>
</body>
</html>
