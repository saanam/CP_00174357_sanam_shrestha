<!--this is a model of export_csv form-->
<?php
    class Export_csv_model extends CI_Model
    {
        function fetch_data() //this function will fetch data
        {
            //here user id is extracted from session
            $id= array(
                'user_id' => $this->session->userdata('user_id'));
                //here user notes data are extracted from database of current logged in user
                $query = $this->db->get('notes');
                $this->db->order_by('noteid', 'DESC');
                $query = $this->db->get('notes');
                return $this->db->get_where('notes', $id);
        }
    }