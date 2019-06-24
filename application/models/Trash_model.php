<!-- this is a model of trash-->
<?php 
    class Trash_model extends CI_Model
    {
        //this function copys data from note table to trash table
        function trash_note($noteid)
        {
            $this->db->query('INSERT INTO trash (noteid, notename, notedetail, user_id, notebook_id, slug, post_image)
            SELECT noteid, notename, notedetail, user_id, notebook_id, slug, post_image
            FROM notes WHERE noteid = '.$noteid.'');
        }

        //this function shows all data from trash table
        function view_trash()
        {
            $id= array(
                'user_id' => $this->session->userdata('user_id'));
            $query = $this->db->get_where('trash', $id);
            return $query->result_array(); 
        }
        
        //this function copy data from trsh table to note table
        function recover($tid)
        {
            $this->db->query('INSERT INTO notes (notename, notedetail, user_id, notebook_id, slug, post_image)
            SELECT notename, notedetail, user_id, notebook_id, slug, post_image
            FROM trash WHERE tid = '.$tid.'');
        }

        //this function delete data from trsh table
        function delete($tid)
        {
            //delete data query and returns true
            $this->db->where('tid',$tid);
            $this->db->delete('trash');
            return True;
        }
    } //end of class