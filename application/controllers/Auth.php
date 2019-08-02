<?php
/**
 * 
 */
class Auth extends CI_Controller
{
	
	function _construct(){
		parent::__construct();
		// $this->load->model('m_auth');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	function index()
	{
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');

		if ($this->form_validation->run() == false)
		{
			$this->load->view('auth/v_login');
		}else{
			$this->_login();
		}
		
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_akun', ['username' => $username])->row_array();

		//jika usernya ada
		if ($user) {
				//jika usernya aktif
			if($user['is_active'] == 1){
				//cek pass
				if(password_verify($password, $user['password'])){
					$data = [
						'username' => $user['username'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id'] == 1){
						redirect('admin');
					}else{
						redirect('user');
						}
				}else{//cek_pass
					$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Wrong password!</div>');
					redirect('auth');
				}
			}else{//is_active
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">This username has not been activated!</div>');	
				redirect('auth');
			}
		}else{//username
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">username is not registered!</div>');
			redirect('auth');
		}
	}

	function register()
	{

		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('username','Username','required|trim|is_unique[tb_akun.username]',[
			'is_unique' => 'This username is already registered!'
		]);
		$this->form_validation->set_rules('password01','Password','required|trim|min_length[3]|matches[password02]',
				[
				 'matches' => 'Password dont match!',
				 'min_length' => 'Password too short!'
				]);
		$this->form_validation->set_rules('password02','Password','required|trim|matches[password01]');

		if ($this->form_validation->run() == false) 
		{
			$this->load->view('auth/v_regist');
		}else{
			$data = [
				'nama' => htmlspecialchars($this->input->post('name', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password01'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'is_active' => 1,
				'date_created' => time()
			];

			echo $this->db->insert('tb_akun', $data);
			echo $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Your account has been created. Please Login!</div>');
			redirect('auth');
		}
		
	}

	function forgot()
	{
		$this->load->view('auth/v_forgot-password');
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Kamu Telah Keluar</div>');
			redirect('auth');
	}

}