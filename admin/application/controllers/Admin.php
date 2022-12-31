<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set("Asia/Jakarta");
class Admin extends CI_Controller
{
	public function __construct() //construct function 
	{
		parent::__construct();
		$this->db->query('SET time_zone="+7:00"');
		if (!$this->session->status) {
			redirect('login');
		}
		$this->load->model('M_Admin', 'm_admin');
	}

	//header code for admin
	private function header($data)
	{
		//admin
		if ($this->session->status == 'admin') {
			$data['perkelas'] = $this->m_admin->perkelas()->result();
		}
		//guru 
		if ($this->session->status == 'guru') {
			$guru = $this->session->id;
			$data['perkelas'] = $this->m_admin->perkelas_g($guru)->result();
		}
		$this->load->view('template/header', $data);
	}

	//logout
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	//index
	public function index()
	{
		//cek password guru
		if ($this->session->status == 'guru') {
			$where = array(
				'id_guru' => $this->session->id
			);
			$data['passwdguru'] = $this->m_admin->cek_password_guru($where)->row_array();
		}

		$data['jmlmapel'] = $this->m_admin->list_mapel()->num_rows();
		$data['jmlsiswa'] = $this->m_admin->list_siswa()->num_rows();
		$data['jmljurusan'] = $this->m_admin->list_jurusan()->num_rows();
		$data['jmlkelas'] = $this->m_admin->list_kelas()->num_rows();

		$data['title'] = 'Dashboard';

		$this->header($data);
		$this->load->view('utama');
		$this->load->view('template/footer');
	}
	//guru
	public function guru()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$data['title'] = 'Guru';
		$data['guru'] = $this->m_admin->list_guru()->result();
		$data['listmapel'] = $this->m_admin->list_mapel()->result();

		$this->header($data);
		$this->load->view('guru');
		$this->load->view('template/footer');
	}
	public function tambah_guru()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'mapel' => $mapel,
			'username' => $username,
			'password' => $password
		);
		$this->m_admin->insert_guru('guru', $data);
		redirect('guru');
	}
	public function edit_guru($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('id_guru' => $id);
		$data = array(
			'nama' => $nama,
			'mapel' => $mapel,
			'username' => $username,
			'password' => $password
		);
		$this->m_admin->update_guru($where, 'guru', $data);
		redirect('guru');
	}
	public function hapus_guru($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_guru' => $id);
		$this->m_admin->update_guru($where, 'guru');
		redirect('guru');
	}

	//mapel
	public function mapel()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$data['title'] = 'Mata Pelajaran';

		$data['mapel'] = $this->m_admin->list_mapel()->result();

		$this->header($data);
		$this->load->view('mapel');
		$this->load->view('template/footer');
	}
	public function tambah_mapel()
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$mapel = $this->input->post('mapel');
		$data = array('mapel' => $mapel);
		$this->m_admin->insert_mapel('mapel', $data);
		redirect('mapel');
	}
	public function edit_mapel($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$mapel = $this->input->post('mapel');
		$where = array('id_mapel' => $id);
		$data = array('mapel' => $mapel);
		$this->m_admin->update_mapel($where, 'mapel', $data);
		redirect('mapel');
	}
	public function hapus_mapel($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('id_mapel' => $id);
		$this->m_admin->delete_mapel($where, 'mapel');
		redirect('mapel');
	}

	//Siswa
}
