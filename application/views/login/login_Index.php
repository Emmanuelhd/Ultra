<?php ?>
<center>
    <!-- Inicio de la forma de login -->
	<div class="container">
		<div class="card card-container">
        	<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action= "<?php echo base_url()?>Login/Entrar" method="post">
            	<span id="reauth-email" class="reauth-email"></span>
            	<input type="email" id="inputEmail" class="form-control" name="email" placeholder="Correo Electrónico" required autofocus>
            	<input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Contraseña" required>
            	<div id="remember" class="checkbox">
                	<label>
                    	<input type="checkbox" value="remember-me"> Recordarme
                	</label>
               	</div>
            	<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form>
            <a href="<?php echo base_url() . 'RegistrarUsuario' ?>" class="forgot-password">
                Nuevo Usuario
            </a>
            <br>
            <a href="#" class="forgot-password">
                ¿Olvidó su contraseña?
            </a>            
            
        </div>
    </div>
    <!-- Fin de la forma de login -->
    </center>