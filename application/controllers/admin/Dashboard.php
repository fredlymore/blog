<?php

class Dashboard extends CI_Controller{
    
    public function __Construct(){
    parent::__Construct();
    }

    public function index(){
        $data['Home'] = "Home";
        $this->template->load('template_admin', 'admin/dashboard', $data);
        // print_r($data);
    }
}