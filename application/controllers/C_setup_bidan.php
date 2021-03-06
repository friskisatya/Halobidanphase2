<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_setup_bidan extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        if (($this->session->userdata('email')=="" OR empty($this->session->userdata('email')))OR$this->session->userdata('status_admin')!=1) {
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Sebagai Admin</font></span>");
            redirect('C_login');
        }
        //$this->load->model('M_bidan');
        $this->load->model('M_bidan');
        $this->load->model('M_klinik');
        //$this->load->model('m_siswa');
    }
    // mobile-based
	public function index()
	{
        $data["rs_bidan"] = $this->M_bidan->getAllbidan();
		$this->template->load('static','setup_bidan',$data);
	}

    public function create()
	{
        $data["rs_klinik"] = $this->M_klinik->getAllKlinikActive();
		$this->template->load('static','C_bidan',$data);
	}

    public function edit($id)
	{
        $data["id"]=$id;
        $data["rs_bidan"] = $this->M_bidan->getAllbidanById($id);
        $data["rs_klinik"] = $this->M_klinik->getAllKlinikActive();
		$this->template->load('static','U_bidan',$data);
	}

    public function post_create()
	{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = array('error' => $this->upload->display_errors());
            $data = array(
                'nama_bidan' =>$this->input->post('nama_bidan'),
                'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
                'alamat_bidan'        =>$this->input->post('alamat_bidan'),
                'telp_bidan'        =>$this->input->post('telp_bidan'),
                'gelar'        =>$this->input->post('gelar'),
                
            );
            $create = $this->M_bidan->create($data);

            $data = array();
            foreach($this->input->post('klinik') as $klinik){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_bidan'=>$create,
                    'id_klinik'=>$klinik,
                ));
                
                $index++;
            }

            $this->db->insert_batch('t_klinik_anggota', $data);

            if($create){
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan,Tetapi Gambar gagal upload</font></span>");
            }else{
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }
        else
        {
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name'];

            $data = array(
                'nama_bidan' =>$this->input->post('nama_bidan'),
                'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
                'alamat_bidan'        =>$this->input->post('alamat_bidan'),
                'telp_bidan'        =>$this->input->post('telp_bidan'),
                'gelar'        =>$this->input->post('gelar'),
                'img_profile'   =>$filename
                
            );
            $create = $this->M_bidan->create($data);

            $data = array();
            foreach($this->input->post('klinik') as $klinik){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_bidan'=>$create,
                    'id_klinik'=>$klinik,
                ));
                
                $index++;
            }

            $this->db->insert_batch('t_klinik_anggota', $data);

            if($create){
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
            }else{
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }
        redirect("C_setup_bidan/index");
	}

    public function post_edit($id)
	{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $where = array('id_bidan'=>$id);
            $data = array(
                'nama_bidan' =>$this->input->post('nama_bidan'),
                'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
                'alamat_bidan'        =>$this->input->post('alamat_bidan'),
                'telp_bidan'        =>$this->input->post('telp_bidan'),
                'gelar'        =>$this->input->post('gelar'),
            );
            $edit = $this->M_bidan->edit($data,$where);

            $data = array();
            foreach($this->input->post('klinik') as $klinik){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_bidan'=>$id,
                    'id_klinik'=>$klinik,
                ));
                
                $index++;
            }

            $this->db->query("DELETE FROM t_klinik_anggota where id_bidan ='$id'");
            $this->db->insert_batch('t_klinik_anggota', $data);
            if($edit){
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
            }else{
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }
        else
        {
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name'];

            $where = array('id_bidan'=>$id);
            $data = array(
                'nama_bidan' =>$this->input->post('nama_bidan'),
                // 'status'        =>$this->input->post('status'),
                'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
                'alamat_bidan'        =>$this->input->post('alamat_bidan'),
                'telp_bidan'        =>$this->input->post('telp_bidan'),
                'gelar'        =>$this->input->post('gelar'),
                'img_profile'   =>$filename
            );
            $edit = $this->M_bidan->edit($data,$where);

            $data = array();
            foreach($this->input->post('klinik') as $klinik){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_bidan'=>$id,
                    'id_klinik'=>$klinik,
                ));
                
                $index++;
            }

            $this->db->query("DELETE FROM t_klinik_anggota where id_bidan ='$id'");
            $this->db->insert_batch('t_klinik_anggota', $data);

            if($edit){
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
            }else{
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }       

        redirect("C_setup_bidan/edit/".$id);
	}

    public function delete($id)
	{
        $where = array('id_bidan'=>$id);
        $this->db->query("DELETE FROM t_klinik_anggota where id_bidan='$id'");
        $delete = $this->M_bidan->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_bidan");
	}
    // web based
    public function index_web()
	{
        $data["rs_bidan"] = $this->M_bidan->getAllbidan();
		$this->template->load('static_web','setup_bidan_web',$data);
	}

    public function create_web()
	{
        $data["rs_klinik"] = $this->M_klinik->getAllKlinikActive();
		$this->template->load('static_web','C_bidan_web',$data);
	}

    public function edit_web($id)
	{
        $data["id"]=$id;
        $data["rs_bidan"] = $this->M_bidan->getAllbidanById($id);
        $data["rs_klinik"] = $this->M_klinik->getAllKlinikActive();
		$this->template->load('static_web','U_bidan_web',$data);
	}

    public function post_create_web()
	{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = array('error' => $this->upload->display_errors());
            $data = array(
                'nama_bidan' =>$this->input->post('nama_bidan'),
                'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
                'alamat_bidan'        =>$this->input->post('alamat_bidan'),
                'telp_bidan'        =>$this->input->post('telp_bidan'),
                'gelar'        =>$this->input->post('gelar'),
                
            );
            $create = $this->M_bidan->create($data);

            $data = array();
            foreach($this->input->post('klinik') as $klinik){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_bidan'=>$create,
                    'id_klinik'=>$klinik,
                ));
                
                $index++;
            }

            $this->db->insert_batch('t_klinik_anggota', $data);

            if($create){
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan,Tetapi Gambar gagal upload</font></span>");
            }else{
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }
        else
        {
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name'];

            $data = array(
                'nama_bidan' =>$this->input->post('nama_bidan'),
                'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
                'alamat_bidan'        =>$this->input->post('alamat_bidan'),
                'telp_bidan'        =>$this->input->post('telp_bidan'),
                'gelar'        =>$this->input->post('gelar'),
                'img_profile'   =>$filename
                
            );
            $create = $this->M_bidan->create($data);

            $data = array();
            foreach($this->input->post('klinik') as $klinik){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_bidan'=>$create,
                    'id_klinik'=>$klinik,
                ));
                
                $index++;
            }

            $this->db->insert_batch('t_klinik_anggota', $data);

            if($create){
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
            }else{
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }
        redirect("C_index/setup_web");
	}

    public function post_edit_web($id)
	{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $where = array('id_bidan'=>$id);
            $data = array(
                'nama_bidan' =>$this->input->post('nama_bidan'),
                'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
                'alamat_bidan'        =>$this->input->post('alamat_bidan'),
                'telp_bidan'        =>$this->input->post('telp_bidan'),
                'gelar'        =>$this->input->post('gelar'),
            );
            $edit = $this->M_bidan->edit($data,$where);

            $data = array();
            foreach($this->input->post('klinik') as $klinik){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_bidan'=>$id,
                    'id_klinik'=>$klinik,
                ));
                
                $index++;
            }

            $this->db->query("DELETE FROM t_klinik_anggota where id_bidan ='$id'");
            $this->db->insert_batch('t_klinik_anggota', $data);
            if($edit){
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
            }else{
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }
        else
        {
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name'];

            $where = array('id_bidan'=>$id);
            $data = array(
                'nama_bidan' =>$this->input->post('nama_bidan'),
                // 'status'        =>$this->input->post('status'),
                'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
                'alamat_bidan'        =>$this->input->post('alamat_bidan'),
                'telp_bidan'        =>$this->input->post('telp_bidan'),
                'gelar'        =>$this->input->post('gelar'),
                'img_profile'   =>$filename
            );
            $edit = $this->M_bidan->edit($data,$where);

            $data = array();
            foreach($this->input->post('klinik') as $klinik){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_bidan'=>$id,
                    'id_klinik'=>$klinik,
                ));
                
                $index++;
            }

            $this->db->query("DELETE FROM t_klinik_anggota where id_bidan ='$id'");
            $this->db->insert_batch('t_klinik_anggota', $data);

            if($edit){
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
            }else{
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }       

        redirect("C_setup_bidan/edit_web/".$id);
	}

    public function delete_web($id)
	{
        $where = array('id_bidan'=>$id);
        
        $delete = $this->M_bidan->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_index/setup_web");
	}
}