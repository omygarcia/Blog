<?php

class Inicio extends CI_Controller {
	
	public function index($info = "")
	{
		$data = array("titulo"=>"inicio","info"=>$info);
		$this->load->view("west/head",$data);
		$data = array("app"=>"blog");
		$this->load->view("west/nav",$data);
		$data = array("post"=>"Blog","mensaje" => "Hola mundo CodeIgniter");
		$this->load->view("west/header",$data);
		//$result = $this->load->db->get("blog");
		//$this->load->model("post");
		//$result = $this->post->getPost();
		$result = $this->post->getPostById($info);
		$data = array("contenido"=>$result);
		$this->load->view("west/contenido",$data);
		$this->load->view("west/footer");
		//$this->load->view("Inicio");
	}

	public function acerca($info = "")
	{
		$data = array("titulo"=>"Acerca","info"=>$info);
		$this->load->view("west/head",$data);
		$data = array("app"=>"blog");
		$this->load->view("west/nav",$data);
		$data = array("post"=>"Acerca","mensaje" => "Conoce quienes somos");
		$this->load->view("west/header",$data);
		$result = $this->post->getPostById($info);
		$data = array("contenido"=>$result);
		$this->load->view("acerca",$data);
		$this->load->view("west/footer");
	}

	public function contacto($info = "")
	{
		$data = array("titulo"=>"Contacto","info"=>$info);
		$this->load->view("west/head",$data);
		$data = array("app"=>"blog");
		$this->load->view("west/nav",$data);
		$data = array("post"=>"Contacto","mensaje" => "visitanos , estamos para servirte");
		$this->load->view("west/header",$data);
		$result = $this->post->getPostById($info);
		$data = array("contenido"=>$result);
		$this->load->view("contecto",$data);
		$this->load->view("west/footer");
	}


	public function perfil($info = "")
	{
		$data = array("titulo"=>"perfil","info"=>$info);
		$this->load->view("west/head",$data);
		$data = array("app"=>"blog");
		$this->load->view("west/nav",$data);
		$data = array("post"=>"Perfil","mensaje" => "Administra tus post");
		$this->load->view("west/header",$data);
		$result = $this->post->getPostById($info);
		$data = array("contenido"=>$result);
		$this->load->view("perfil",$data);
		$this->load->view("west/footer");
	}

	public function delete()
	{
		$post = $this->input->post();
		$id = $post['id'];
		$consulta = "DELETE FROM blog WHERE id_blog=".$id;
		if($this->db->query($consulta))
		{
			if($this->db->affected_rows() > 0)
			{
				echo $id;
			}
			else
			{
				echo false;
			}
			
		}
		else
		{
			echo false;
		}
	}

}
