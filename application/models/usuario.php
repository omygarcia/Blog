<?php

class Usuario extends CI_Model
{
	public function getUser($email = "")
	{
		$result = $this->db->query("SELECT * FROM tb_usuarios WHERE email = '".$email."' LIMIT 1");
		if($result->num_rows() > 0)
		{
			return $result->row();
		}
		else
		{
			return null;
		}
	}
}

?>