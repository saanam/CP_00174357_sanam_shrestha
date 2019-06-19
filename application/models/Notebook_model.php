<?php   
    class Notebook_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_notebooks()
            {
                $id= array(
                    'user_id' => $this->session->userdata('user_id'));
                $this->db->order_by('notebookname');
                $query = $this->db->get('notebooks');
                $query = $this->db->get_where('notebooks', $id);
                return $query->result_array();
            }

        public function add_notebook()
        {
            $data = array(
                'notebookname'=> $this->input->post('name'),
                'user_id' => $this->session->userdata('user_id')
            );

            return $this->db->insert('notebooks', $data);
        }
 
        public function get_notebook($notebook_id)
        {
            $query = $this->db->get_where('notebooks', array('notebookid'=>$notebook_id));
            return $query->row();
        } 

        //delete note function where $noteid as parameter
        public function delete_notebook($notebookid)
        {
            $this->db->where('notebookid',$notebookid);
            $this->db->delete('notebooks');
             return True;
        }
       
    }