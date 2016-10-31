<!Doctype html>
<html lang="es">
   <head>
      <title><?php echo $titulo ?></title>
      <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/floatlabel.js')?>"></script>
      <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/css/formadd.css')?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/css/form.css')?>" rel="stylesheet">
      <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>

   </head>

   <body>
      <header>
      <br>
         <center><img src="https://auth.ultravision.tv/registro/encabezado.png" ></img></center>
      </header>
      <div id="container">
         <!-- Aqui va el contenido -->
         <div class="col-md-12">
            <?php
               $this -> load -> view($contenido);
            ?>
         </div>
      </div>
      <footer class="footer">
      	<div class="container">
      		<p align="center"><font color="white"><b>Ultravision &reg; 2016 <br> Todos los derechos reservados</b></font></p>
	    </div>
	  </footer>
   </body>
</html>