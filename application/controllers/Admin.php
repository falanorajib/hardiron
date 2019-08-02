<?php

/**
 * 
 */
class Admin extends CI_Controller
{
	function index()
	{
		$data['user'] = $this->db->get_where('tb_akun', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('admin/v_dashboard_admin', $data);
	}

	function client()
	{
		$data['user'] = $this->db->get_where('tb_akun', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('admin/v_client_admin', $data);
	}

	function lawyer()
	{
		$data['user'] = $this->db->get_where('tb_akun', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('admin/v_lawyer_admin', $data);
	}

}