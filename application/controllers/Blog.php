<?php

class Blog Extends CI_Controller
{
    public function __Construct(){
        parent::__Construct();

        // $this->load->database();
        // $this->load->helper('url');
        // $this->load->helper('form');
        $this->load->model('Blog_model');

    }

    public function index($offset = 0){
        $this->load->library('pagination');

        $config['base_url'] = site_url('blog/index');
        $config['total_rows'] = $this->Blog_model->getTotalBlog();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);


        // $query = $this->db->query("SELECT * FROM blog");
        $data['halaman'] = "Selamat datang";
        $query = $this->Blog_model->getBlogs($config['per_page'], $offset);
        $data['blogs']= $query->result_array();

        $this->template->load('template_blog', 'home/blog', $data);

        // print_r($data);
        // $this->load->view('template/template_blog', 'home/blog', $data);
    }

    public function detail($url){
        // $query = $this->db->query('SELECT * From blog WHERE url = "'.$url.'"');
        $query = $this->Blog_model->getSingleBlog('url', $url);
        $data['blog'] = $query->row_array();

        $this->template->load('template_blog', 'home/detail', $data);

        // print_r($data);
        // $this->load->view('template/template_blog', 'home/detail', $data);
    }

    public function tambah(){
        $this->form_validation->set_rules('title','Judul', 'required');
        $this->form_validation->set_rules('url','URL', 'required|alpha_dash');
        $this->form_validation->set_rules('content','Content', 'required');
        
        if($this->form_validation->run() === TRUE){
            $data['title'] = $this->input->post('title');
            $data['content'] = $this->input->post('content');
            $data['url'] = $this->input->post('url');

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 10000;
            $config['overwrite']            =  FALSE;
            $config['file_name']            =   'Gambar';
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('cover'))
            {
                echo $this->upload->display_errors();
            }
            else
            {
                $data['cover'] = $this->upload->data()['file_name'];
            }
            // print_r($data);
            
           $id = $this->Blog_model->insertBlog($data);

           if($id){
                $this->session->set_flashdata("message",'<div class="alert alert-success">Data Berhasil di simpan</div>');
                redirect('/');
           }
            else{
                $this->session->set_flashdata("message", '<div class="alert alert-warning">Data Gagal di simpan</div>');
                redirect('/');
            }
        }
        $this->template->load('template_blog', 'home/form_tambah');
        // $this->load->view('template/template_blog', 'home/form_tambah');
    }

    public function edit($id){
        $query = $this->Blog_model->getSingleBlog('id' , $id);
        $data['blog'] = $query->row_array();

        $this->form_validation->set_rules('title','Judul', 'required');
        $this->form_validation->set_rules('url','URL', 'required|alpha_dash');
        $this->form_validation->set_rules('content','Content', 'required');

        if($this->form_validation->run() === TRUE){

            $post['title']      = $this->input->post('title');
            $post['content']    = $this->input->post('content');
            $post['url']        = $this->input->post('url');

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 10000;
            $config['overwrite']            =  FALSE;
            $config['file_name']            =   'Gambar2';
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->do_upload('cover');

            if (!empty($this->upload->data()['file_name']))
            {
                $post['cover'] = $this->upload->data()['file_name'];
            }
            // print_r($data);
            
           $id_blog = $this->Blog_model->updateBlog($id, $post);

           if($id){
            $this->session->set_flashdata("message",'<div class="alert alert-success">Data Berhasil di simpan</div>');
            redirect('/');
            }
            else{
                $this->session->set_flashdata("message", '<div class="alert alert-warning">Data Gagal di simpan</div>');
                redirect('/');
            }
    }
        $this->template->load('template_blog', 'home/form_edit', $data);
        // $this->load->view('template/template_blog', 'home/form_edit', $data);
        
    }

    public function delete($id){
        $result = $this->Blog_model->deleteBlog($id);
        if($result){
            $this->session->set_flashdata("message", '<div class="alert alert-success">Data berhasil di hapus</div>');
        }else{
            $this->session->set_flashdata("message", '<div class="alert alert-warning">Data Gagal di hapus</div>');
        }


        redirect('/');
    }

    public function login(){

        if($this->input->post()){

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($username == 'admin' && $password == 'admin'){
                $_SESSION['username'] = 'admin' ;
                redirect('/');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-warning">Username/Password tidak valid.</div>');
                redirect('blog/login');
            }
            // $this->load->view('login');
        }

        $this->template->load('template_blog', 'login');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
}