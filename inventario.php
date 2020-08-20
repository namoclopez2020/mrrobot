<?php

  $page_title = 'Ordenes de servicio';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<html>
	<head>
	<?php include ("./layouts/header.php");?>
		<!--BOTON DESPLEGABLE-->
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--FIN BOTON DESPLEGABLE-->
	</head>
<body>
<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul><!--
    <li><a href="admin.php" class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>-->
    <li><a href="admin.php" class="btn-floating blue"><i class="material-icons">arrow_back</i></a></li>
    <li><a href="configuracion.php" class="btn-floating green"><i class="material-icons">build</i></a></li>
  </ul>
</div>
    <header>
  	<?php include ("./layouts/nav.php");?>
	</header>
    <div  class="container-fluid">
	 <?php echo display_msg($msg); ?>
	<div class="menu-inicial ">
    
    <div class="mnu-container" style="margin-left: 0px;">
        
        <div class="colbot">
            <a href="product.php" class="taco taco-principal">
            
                <div class="taco-dato-principal">
                    <img alt="imglogon" class="imagen-tacoB" src="libs/images/modulo_principal.png">
                </div>

                <span class="taco-titulo-principal">
                    Productos
                </span>
               
            </a>
            <a href="compras.php" class="taco taco-principal-B">
            
                <div class="taco-dato-principal">
                    <img alt="imglogon" class="imagen-tacoB" src="libs/images/egresos.png">
                </div>

                <span class="taco-titulo-principal">
                    Compras
                </span>
               
            </a>
            <a href="facturas.php" class="taco tacoA">
             
                <div class="taco-dato-principal">
                    <img alt="imglogon" class="imagen-tacoB" src="libs/images/estatus.png">
                </div>

                <span class="taco-titulo-principal">
                   Ventas
                </span>
            </a>
            <a href="categorie.php" class="taco tacoA" style="background-color: #ADBBBD">
             
                <div class="taco-dato-principal">
                    <img alt="imglogon" class="imagen-tacoB" src="libs/images/categoria.png">
                </div>

                <span class="taco-titulo-principal">
                   Categorias
                </span>
            </a>
             <a href="media.php" class="taco tacoA" >
             
                <div class="taco-dato-principal">
                    <img alt="imglogon" class="imagen-tacoB" style="width: 220px;height: 170px"src="libs/images/imagen.png">
                </div>

                <span class="taco-titulo-principal">
                   Imagenes
                </span>
            </a>
			
           
            <!--<a href="" class="taco taco-imagenB">
               
                <div class="taco-contador-blue">
                  <span class="taco-titulo">
                    Estatus del taller
					
                </span>      
                </div>
                <div class="taco-dato"><br>
					
                    <img alt="imglogon" class="imagen-taco" src="./libs/images/mr robot logo1.png">
                </div>
            </a>-->
        </div>
		<div class="pie-menu-inicial">
    <div class="pie-logo-saint">
        <img src="./libs/images/mr robot logo1.png" alt="imglogon" width="484" height="65" style="width:130px">
        <span class="version-saint">Tecnek Web</span>
    </div>
    
    <input id="tbxFlag" name="FBFlag" type="hidden" value="1">
    <?php include ("./layouts/footer.php");?>

<!-- BOTON DEPLEGABLE-->
<script type="text/javascript" src="js/materialize.min.js"></script>
 <!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'top',
      hoverEnabled: false
    });
  });

</script>
<!--FIN BOTON DEPLEGABLE-->

</body></html>