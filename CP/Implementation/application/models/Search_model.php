<?php
    class Search_model extends CI_Model
    {
        //defulat constructor which load data from database 
        public function __constructor()
        {
            $this->load->library('session');
            $this->load->database();
        }

        public function search_note($key)
        {
            $id= array(
                'user_id' => $this->session->userdata('user_id'));
            $query = $this->db->get('notes');
            $query = $this->db->like('notename', $key);
            $query = $this->db->get('notes');
            $query = $this->db->get_where('notes', $id); //select query with userid filtred
            return $query->result();
        }
    }
