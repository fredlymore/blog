<?php

class Data_artikel extends CI_Controller{
    public function __Construct(){
        parent::__Construct();

        $this->load->model('Artikel_model');
    }
    public function index($offset = 0){
        $this->load->library('pagination');

        $config['base_url'] = site_url('dashboard/index');
        $config['total_rows'] = $this->Artikel_model->getTotal();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['halaman'] = "Data Artikel";
        $query = $this->Artikel_model->getArtikel($config['per_page'], $offset);
        $data['artikel'] = $query->result_array();
        $this->template->load('template_admin', 'admin/data_artikel', $data);
    }
    public function hapus($id){

        $result = $this->Artikel_model->hapusData($id);
        // $where = array('id' => $id);
        // $this->Artikel_model->hapusData($where, 'artikel');
        // $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fadde show" role="alert">
        // <strong>Data Berhasil di hapus!</strong>
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        // <span aria-hidden="true">&time</span>
        // </button>
        // </div>');
        redirect('admin/data_artikel');
    }
}