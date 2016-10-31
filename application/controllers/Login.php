<?php
	
	class Login extends CI_Controller
	{
		public function index()
		{
			$data['titulo']    = 'Página Principal';
			$data['contenido'] = "login/login_Index";  //enviar a plantilla la vista index
			$this -> load -> view('plantilla/Header', $data);
		}

		public function entrar()
		{
			$data['titulo'] = 'Entrando a Ultra';
			$data['contenido']  = 'login/login_Entrar';
			$data['logeado'] = false;
			$this ->load -> view('plantilla/Header', $data);
		}
	}
?>