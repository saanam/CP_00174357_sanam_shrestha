<?php
    class Todo_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }
        
        public function add_todo()
        {
            $data = array(
                'todoname'=> $this->input->post('todoname'),
                'user_id' => $this->session->userdata('user_id'),
                'tododate' => $this->input->post('date')
            );

            return $this->db->insert('todo', $data);
        }
        
        public function get_todo()
        {
            $id= array(
                'user_id' => $this->session->userdata('user_id'),
                'status' => 'incompleted',
                'tododate' => date('y-m-d')
            );

                $this->db->order_by('todoid', 'DESC');

                $query = $this->db->get_where('todo', $id);
                
                return $query->result_array();
        
        }

        public function get_todo_c()
        {
            $id= array(
                'user_id' => $this->session->userdata('user_id'),
                'status' => 'completed'
            );

                $this->db->order_by('todoid', 'DESC');

                $query = $this->db->get_where('todo', $id);
                
                return $query->result_array();
        
        }

        //update todo function
        public function update_todo($todoid)
        {
            $id = $this->session->userdata('user_id');
            $data = array(
                'status' => 'completed'
                );
        
                $this->db->where('todoid', $todoid);
                return $this->db->update('todo', $data);
        
        }
    }