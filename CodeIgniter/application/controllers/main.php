<?php
class Main extends CI_Controller{
    function Main(){
        parent::__construct();
    }
    function home(){
        $this->load->view('home');
    }
}
?>
