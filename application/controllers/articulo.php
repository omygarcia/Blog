<?php

class Articulo extends CI_Controller 
{	

	public function post($info = "")
	{
		$data = array("titulo"=>"inicio","info"=>$info);
		$this->load->view("west/head",$data);
		$data = array("app"=>"blog");
		$this->load->view("west/nav",$data);
		$data = array("post"=>"Blog","mensaje" => "Hola mundo CodeIgniter");
		$this->load->view("west/header",$data);
		$result = $this->post->getPostById($info);
		$data = array("contenido"=>$result);
		$this->load->view("articulo/post",$data);
		$this->load->view("west/footer");
	}
}

?>