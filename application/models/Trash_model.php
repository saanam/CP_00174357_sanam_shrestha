<?php 
    class Trash_model extends CI_Model
    {
        function trash_note($noteid)
        {
            $this->db->query('INSERT INTO trash (noteid, notename, notedetail, user_id, notebook_id, slug, post_image)
            SELECT noteid, notename, notedetail, user_id, notebook_id, slug, post_image
            FROM notes WHERE noteid = '.$noteid.'');
        }

        function view_trash()
        {
            $id= array(
                'user_id' => $this->session->userdata('user_id'));
            $query = $this->db->get_where('trash', $id);
            return $query->result_array(); 
        }
        
        function recover($tid)
        {
            $this->db->query('INSERT INTO notes (notename, notedetail, user_id, notebook_id, slug, post_image)
            SELECT notename, notedetail, user_id, notebook_id, slug, post_image
            FROM trash WHERE tid = '.$tid.'');
        }

        function delete($tid)
        {
            //delete data query and returns true
            $this->db->where('tid',$tid);
            $this->db->delete('trash');
            return True;
        }
    }