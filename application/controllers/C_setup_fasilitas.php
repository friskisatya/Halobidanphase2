<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_setup_fasilitas extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        if (($this->session->userdata('email')=="" OR empty($this->session->userdata('email')))OR$this->session->userdata('status_admin')!=1) {
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Sebagai Admin</font></span>");
            redirect('C_login');
        }
        //$this->load->model('M_bidan');
        $this->load->model('M_fasilitas');
        //$this->load->model('m_siswa');
    }
    // mobile-based
	public function index()
	{
        $data["rs_fasilitas"] = $this->M_fasilitas->getAllfasilitas();
		$this->template->load('static','setup_fasilitas',$data);
	}

    public function create()
	{
		$this->template->load('static','C_fasilitas');
	}

    public function edit($id)
	{
        $data["id"]=$id;
        $data["rs_fasilitas"] = $this->M_fasilitas->getAllfasilitasById($id);
		$this->template->load('static','U_fasilitas',$data);
	}

    public function post_create()
	{
        $data = array(
            // 'id_fasilitas'   =>$this->input->post('kode_fasilitas'),
            'nama_fasilitas' =>$this->input->post('nama_fasilitas'),
            'status'        =>$this->input->post('status'),
        );
        $create = $this->M_fasilitas->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_setup_fasilitas/index");
	}

    public function post_edit($id)
	{
        $where = array('id_fasilitas'=>$id);
        $data = array(
            // 'kode_fasilitas'   =>$this->input->post('kode_fasilitas'),
            'nama_fasilitas' =>$this->input->post('nama_fasilitas'),
            'status'        =>$this->input->post('status'),
        );
        $edit = $this->M_fasilitas->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_fasilitas/edit/".$id);
	}

    public function delete($id)
	{
        $where = array('id_fasilitas'=>$id);
        
        $delete = $this->M_fasilitas->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_fasilitas");
	}
    // web based
    public function index_web()
	{
        $data["rs_fasilitas"] = $this->M_fasilitas->getAllfasilitas();
		$this->template->load('static_web','setup_fasilitas_web',$data);
	}

    public function create_web()
	{
		$this->template->load('static_web','C_fasilitas_web');
	}

    public function edit_web($id)
	{
        $data["id"]=$id;
        $data["rs_fasilitas"] = $this->M_fasilitas->getAllfasilitasById($id);
		$this->template->load('static_web','U_fasilitas_web',$data);
	}

    public function post_create_web()
	{
        $data = array(
            // 'id_fasilitas'   =>$this->input->post('kode_fasilitas'),
            'nama_fasilitas' =>$this->input->post('nama_fasilitas'),
            'status'        =>$this->input->post('status'),
        );
        $create = $this->M_fasilitas->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_index/setup_web");
	}

    public function post_edit_web($id)
	{
        $where = array('id_fasilitas'=>$id);
        $data = array(
            // 'kode_fasilitas'   =>$this->input->post('kode_fasilitas'),
            'nama_fasilitas' =>$this->input->post('nama_fasilitas'),
            'status'        =>$this->input->post('status'),
        );
        $edit = $this->M_fasilitas->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_fasilitas/edit_web/".$id);
	}

    public function delete_web($id)
	{
        $where = array('id_fasilitas'=>$id);
        
        $delete = $this->M_fasilitas->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_index/setup_web");
	}
}