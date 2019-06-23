<!--this is a model of note-->
<?php
    class Note_model extends CI_Model
    {
        //defulat constructor which load data from database 
        public function __constructor()
        {
            $this->load->database();
        }

        //function to get note from database
        public function get_notes($slug = FALSE, $limit = FALSE, $offset = FALSE)
        {
            if($limit)
            {
                $this->db->limit($limit, $offset);
            }
            //user id is taken from session
            $user_id = $this->session->userdata('user_id');
            if($slug === FALSE)
            {
                $id= array(
                    'user_id' => $this->session->userdata('user_id'));
                //all notes are selected from database of current logged in user
                $this->db->order_by('noteid', 'DESC');
                $query = $this->db->get_where('notes', $id);
                return $query->result_array(); //returns $query in result_array()
            }
            $query = $this->db->get_where('notes', array('slug'=> $slug)); //starts query
            return $query->row_array();
        }

        //create new note function where $post_image as parameter
        public function add_note($post_image)
        {
            $slug = url_title($this->input->post('notename'));
            //array containing many data
            $data = array(
                'notename' => $this->input->post('notename'),
                'slug' => $slug,
                'notedetail' => $this->input->post('notedetail'),
                'notebook_id' => $this->input->post('notebook_id'),
                'user_id' => $this->session->userdata('user_id'),
                'post_image' => $post_image
            );
            return $this->db->insert('notes', $data); //runs insert query
        }

        //delete note function where $noteid as parameter
        public function delete_note($noteid)
            {
                //delete data query and returns true
                $this->db->where('noteid',$noteid);
                $this->db->delete('notes');
                return True;
            }

            //update note function
            public function update_note()
            {
                $slug = url_title($this->input->post('notename'));
                $data = array(
                    'notename' => $this->input->post('notename'),
                    'slug' => $slug,
                    'notedetail' => $this->input->post('notedetail'),
                    'notebook_id' => $this->input->post('notebook_id')
                );
                    $this->db->where('noteid', $this->input->post('id'));
                    return $this->db->update('notes', $data);
            }

            //function to get notebook
            public function get_notebooks()
            {
                //get user id from session of current logged in user
                $id= array(
                    'user_id' => $this->session->userdata('user_id'));
                $this->db->order_by('notebookname');
                $query = $this->db->get('notebooks');
                $query = $this->db->get_where('notebooks', $id);
                return $query->result_array();
            }
        
            //function to get notebook from passed notebook id from controller
            public function get_notes_by_notebook($notebook_id)
            {
                $this->db->order_by('notes.noteid', 'DESC');
                $this->db->join('notebooks', 'notebooks.notebookid = notes.notebook_id');
                $query = $this->db->get_where('notes', array('notebook_id'=> $notebook_id));
                return $query->result_array();
            }
    }