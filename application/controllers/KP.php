<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KP extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KP_model');
    }
    public function index()
    {
        $data['judul']= "Halaman Pengajuan KP";
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kp'] = $this->KP_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("KP/vw_PengajuanKP", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul']="Halaman Tambah Pengajuan KP";
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kp'] = $this->KP_model->get();
        $this->form_validation->set_rules('nama_instansi','Nama Instansi KP','required',[
            'required'=> 'Nama Instansi KP Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat','Alamat Instansi KP','required',[
            'required'=> 'Alamat Instansi KP Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_mulai','Tanggal Mulai KP','required',[
            'required'=> 'Tanggal Mulai KP Wajib di isi'
        ]);
        $this->form_validation->set_rules('bidang_kerja','Bidang Kerja','required',[
            'required'=> 'Bidang Kerja Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("KP/vw_tambah_KP", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data=[
                'nama_instansi' => $this->input->post('nama_instansi'),
                'alamat' => $this->input->post('alamat'),
                'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                'bidang_kerja' => $this->input->post('bidang_kerja'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            $ext = pathinfo($upload_image, PATHINFO_EXTENSION);
            if ($upload_image){
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']='2048';
                $config['upload_path'] = './assets/img/kp/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')){
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->KP_model->insert($data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Data Pengajuan Berhasil Ditambah!</div>');
            redirect('KP');
        }
    }
    public function hapus($id)
    {
        $this->KP_model->delete($id);
        $error = $this->db->error();
        if($error['code']!=0){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
            fas fa-info-circle"></i>Data Pengajuan KP tidak dapat dihapus (sudah berelasi)!</div>');
        } else{
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
            class="icon fas fa-check-circle"></i>Data Pengajuan KP Berhasil Dihapus!</div>');
        }
        redirect('KP');
    }
    public function edit($id)
    {
        $data['judul']="Halaman Edit Pengajuan KP";
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kp'] = $this->KP_model->get();
        $data['kp'] = $this->KP_model->getById($id);
        $this->form_validation->set_rules('nama_instansi','Nama Instansi KP','required',[
            'required'=> 'Nama Instansi KP Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat','Alamat Instansi KP','required',[
            'required'=> 'Alamat Instansi KP Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_mulai','Tanggal Mulai KP','required',[
            'required'=> 'Tanggal Mulai KP Wajib di isi'
        ]);
        $this->form_validation->set_rules('bidang_kerja','Bidang Kerja','required',[
            'required'=> 'Bidang Kerja Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("KP/vw_tambah_KP", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data=[
                'nama_instansi' => $this->input->post('nama_instansi'),
                'alamat' => $this->input->post('alamat'),
                'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                'bidang_kerja' => $this->input->post('bidang_kerja'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image){
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']='2048';
                $config['upload_path'] = './assets/img/KP/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')){
                    $old_image = $data['prodi']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/KP/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->KP_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
            Data Pengajuan KP Berhasil Diubah!</div>');
            redirect('KP');
        }
    }
}