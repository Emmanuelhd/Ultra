<?php
	class RegistrarUsuario extends CI_Controller
	{
		function __construct()
		   {
		      parent::__construct();
		      //comunicacion con el modelo
		      $this -> load -> model('Model_Usuario');
		   }

		public function index()
		{
			$data['titulo']    = 'Registrar Usuario';
			$data['contenido'] = "registrar/index";
			$data['mensaje']   = null;
			$this -> load -> view('plantilla/Header', $data);
		}

		public function agregar()
		{
			$email = $this -> input -> post('email');
			$query = $this->db->query('SELECT * FROM users WHERE email="'.$email.'"');
			$total = $query->num_rows();

			//Set all the variables into data doesnt matter if it is a successful registration
			$data = array(
						'name'               => $this -> input -> post('nombre'),
						'apellidop'          => $this -> input -> post('apellidop'),
						'email'              => $email,
						'password'           => $this -> input -> post('password'),
						'suscriber_id'       => 'PorDefinir'.rand(),
						'country_code'       => 'MX',
						'auth_level'         => 'PorDefinir',
						'SuscribedPackType'  => 'PorDefinir'
					);

			//Check mail for existence into DB
			if ($total>0)
			{
				$data['mensaje']   = '1';
			}
			else
			{
				$pass1 = $this -> input -> post ('password'); 
				$pass2 = $this -> input -> post ('password_confirmation');
				//passwords match?
				if ($pass1 == $pass2)
				{
					$this -> Model_Usuario -> Insertar($data);
					$data['mensaje'] = '2';
				}
				else
				{
					$data['mensaje'] = '3';
				}
			}
			$data['titulo']    = 'Registrar Usuario';
			$data['contenido'] = "registrar/index";
			$this -> load -> view('plantilla/Header', $data);
		}
	}
?>