<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class template{
    var $ci;
    public function __Construct(){
        $this->ci =& get_instance();
        $this->page_title = 'BLOG';
        $this->navbar_menu = array();
    }

    public function load($tpl_view, $body_view = '', $data = array(), $js_ext= ''){
        $this->ci->load->model('Blog_model');
        $data['page_title'] = $this->page_title;
        $data['navbar_menu'] = $this->navbar_menu;
        $data['controller'] = $this->ci->uri->segment(1);

        // $cek 						= $this->ci->blog_model->status_mirroring()->row_array(); //STATUS MIRRORING
		// $data['status_mirroring'] 	= $cek['Value'];

		if(empty($data['controller'])) $data['controller'] = 'main';
		
        $data['body'] = ($body_view=='') ? '' : $this->ci->load->view($body_view, $data, TRUE);
		$data['js_ext'] = $js_ext;
        $this->ci->load->view('templates/'.$tpl_view, $data);
    }
}