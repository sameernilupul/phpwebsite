<?php

class Main extends CI_Controller {

    function Main() {
        parent::__construct();
    }

    function home() {
        $this->load->model('offer_model');
        $data['base'] = $this->config->item('base_url');
        $data['css'] = $this->config->item('css');
        $data['result'] = $this->offer_model->offer_getall();
        $this->load->helper('url');
        $this->load->view('home', $data);
    }

}

?>
