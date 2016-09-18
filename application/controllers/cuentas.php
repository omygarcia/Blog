<?php

class Cuentas extends CI_Controller
{
	public function login()
	{
		$email = $this->input->post("user");
		$password = $this->input->post("password");
		$this->load->model("usuario");
		$fila = $this->usuario->getUser($email);

		if($email ==$fila->email && $password == $fila->password)
		{
			$data = array(
					"email" => $email,
					"id" => $fila->id_usuario,
					"login" => true
				);
			$this->session->set_userdata($data);
			header("location: ".base_url()."cuentas/perfil");
		}
		else
		{
			header("location: ".base_url());
		}
	}

	public function perfil($info = "")
	{
		$this->load->helper("bootstrap");
		($this->session->userdata("login")==true)?:header("location:".base_url());
		$data = array("titulo"=>"perfil","info"=>$info);
		$this->load->view("west/head",$data);
		$data = array("app"=>"blog");
		$this->load->view("west/nav",$data);
		$data = array("post"=>"Perfil","mensaje" => "Bienvenido: ".$this->session->userdata("email"));
		$this->load->view("west/header",$data);
		$result = $this->post->getPostById($info);
		$data = array("contenido"=>$result);
		$this->load->view("perfil",$data);
		$this->load->view("west/footer");
	}

	public function logout()
	{
		$this->session->sess_destroy();
		header("location:".base_url());
	}
}

?>