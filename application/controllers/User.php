<?php

/**
 * 
 */
class User extends CI_Controller
{
	
	function index()
	{
		
        $data ['judul'] = 'Halaman Home';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/v_home');
        $this->load->view('user/templates/footer');
    }
}