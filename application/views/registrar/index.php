<br>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<?php
        		//1 means registered email
				if ($mensaje == '1')
				{
					echo '<div class="alert alert-danger">';
			    	echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
			    	echo '<strong>¡Error!</strong> El correo electrónico ya se encuentra registrado. </div>';
				}
				//2 means success
				if ($mensaje == '2')
				{
					echo '<div class="alert alert-success">';
			    	echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
			    	echo '<strong>¡Usuario registrado con éxito!</strong></div>';
				}
				//3 means wrong passwords
				if ($mensaje == '3')
				{
					echo '<div class="alert alert-danger">';
			    	echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
			    	echo '<strong>¡Error!</strong> Las contraseñas no coinciden.</div>';
				}
			?>
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Por favor ingrese sus datos</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post" action="<?php echo base_url().'RegistrarUsuario/agregar'?>">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                			<input 	type        = "text" 
												name        = "nombre" 
												class       = "form-control input-sm floatlabel" 
												value       = "<?php if (isset($name)) {echo $name;}?>" 
												placeholder = "Nombre(s)" 
												required
			                			>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input 	type        = "text" 
												name        = "apellidop"
												value       = "<?php if (isset($apellidop)) {echo $apellidop;}?>" 
												class       = "form-control input-sm" 
												placeholder = "Apellidos" 
												required
			    						>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input 	type        = "email" 
										name        = "email"
										value       = "<?php if (isset($email)) {echo $email;}?>"
										class       = "form-control input-sm" 
										placeholder = "Correo Electrónico" 
			    						required
			    				>
			    			</div>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input 	type        = "password" 
												name        = "password" 
												class       = "form-control input-sm" 
												placeholder = "Contraseña" 
					    						required
					    				>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<input 	type        = "password"
												name        = "password_confirmation"
												class       = "form-control input-sm"
												placeholder = "Confirmar Contraseña"
					    						required
			    					>
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>