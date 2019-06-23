<?php
    class Help_model extends CI_Model
    {
        //defulat constructor which load data from database 
        public function __constructor()
                {
                    $this->load->database();
                }
    }