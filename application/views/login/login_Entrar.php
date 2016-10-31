<?php
	if ($logeado == true)
	{
		echo 'Usuario logeado';
	}
	else
	{
		redirect(base_url().'Login');
	}
?>