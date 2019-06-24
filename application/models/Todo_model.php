<!--this is a model of todo-->
<?php
    class Todo_model extends CI_Model
    {
        public function __construct()
        {
            $this->load->database();
        }
        
        //function to add tasks
        public function add_todo()
        {
            $data = array(
                'todoname'=> $this->input->post('todoname'),
                'user_id' => $this->session->userdata('user_id'),
                'tododate' => $this->input->post('date')
            );
            return $this->db->insert('todo', $data);
        }
        
        //function to set tasks  from database
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
        
        //function to get tasks
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

        //function to count incomplete tasks
        function notify_tasks()
        {
            $id= array(
                'user_id' => $this->session->userdata('user_id'));
                $this->db->count_all_results('todo');  // Produces an integer
                $this->db->where('user_id', $this->session->userdata('user_id'));
                $this->db->where('status', 'incompleted');
                $this->db->where('tododate', date('Y-m-d'));
                $this->db->from('todo');
                return $this->db->count_all_results();
        }
    } //end of class