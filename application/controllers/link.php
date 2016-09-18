<?php

class Link extends CI_Controller
{
	public function index()
	{
		$result = $this->post->getPost();
		$this->load->view("link/link");
	}
}

?>