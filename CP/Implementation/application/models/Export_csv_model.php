<?php
    class Export_csv_model extends CI_Model
    {
        function fetch_data() //this function will fetch data
        {
            $id= array(
                'user_id' => $this->session->userdata('user_id'));
                $query = $this->db->get('notes');
                $this->db->order_by('noteid', 'DESC');
 
                $query = $this->db->get('notes');
                return $this->db->get_where('notes', $id);

        }
    }