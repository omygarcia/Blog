<?php

class Post extends CI_Model
{

	public function getPost()
	{
		return $this->load->db->query("SELECT id_blog,titulo,descripcion,DATE_FORMAT(fecha,'%M %Y') as 'fecha' FROM blog");
	} 

	public function getPostById($id = "")
	{
		//echo $id;
		$consulta = "";
		if($id != "")
		{
			$consulta = "SELECT id_blog,titulo,descripcion,fecha FROM blog WHERE id_blog = ".$id." LIMIT 1";
		}
		else
		{
			$consulta = "SELECT id_blog,titulo,descripcion,DATE_FORMAT(fecha,'%M %Y') as 'fecha' FROM blog";
		}
		//echo $consulta;
		$result = $this->load->db->query($consulta);
		return $result;
	}
}

?>