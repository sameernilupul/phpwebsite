<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Offer_model
 *
 * @author pancha
 */
class Offer_model extends CI_Model{
    function Offer_model(){
        parent::__construct();
    }
    function offer_getall(){
        $this->load->database();
        $query = $this->db->get('offer');
        return $query->result();
        
    }
}

?>
