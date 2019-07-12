<!--this is a model of user-->
<?php
    class User_model extends CI_Model
    {
        public function register($enc_password)
        {
            //user data array
            $data = array(
               'name'=> $this->input->post('name'),
               'email'=> $this->input->post('email'),
               'password'=> $enc_password
            );
            //insert user
            return $this->db->insert('users', $data);
        }

        //lOG USER IN
        public function login($email, $password)
        {
            //validate
            $this->db->where('email', $email);
            $this->db->where('password', $password);

            $result= $this->db->get('users');
            if($result->num_rows() == 1)
            {

                return $result->row(0)->userid;
            }
            else
            {
                return FALSE;
            }
        }

        //function to get login log from database
        public function login_history_set()
        {
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
                'email' => $this->session->userdata('email')
            );
            $this->db->insert('login_history', $data);
        }

        //function to view login log
        public function login_history_view()
        {
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
                'email' => $this->session->userdata('email')
            );

            $query = $this->db->get('login_history');
            $query = $this->db->get_where('login_history', $data);
            return $query->result();
        }

        //check email exists
        public function check_email_exists($email)
        {
            $query = $this->db->get_where('users', array('email'=> $email));
            if(empty($query->row_array()))
            {
                return TRUE;
            }
            else
            {
               return FALSE; 
            }
        }

        //function to get users
        public function get_user()
        {          
            $id= array(
                'userid' => $this->session->userdata('user_id'));
            $query = $this->db->get('users');
            $query = $this->db->get_where('users', $id);
            return $query->row_array();; //returns $query in result_array()
        }

        // function to update user
        public function update_user()
        {
            $id = $this->session->userdata('user_id');

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email')
            );

                $this->db->where('userid', $id);
                return $this->db->update('users', $data);           
        }

        //function to change password of user
        public function change_password_m($enc_password1)
        {
            $id = $this->session->userdata('user_id');
            $data = array(
                'password'=> $enc_password1
            );
                $this->db->where('userid', $id);
                return $this->db->update('users', $data); 
        }

        //function to count notes of that particular user
        public function count_note()
        {
            $id= array(
                'user_id' => $this->session->userdata('user_id'));
            $query = $this->db->query('SELECT * FROM notes where user_id ='.$id);
            return $query->num_rows();
        }

        //function to count rows and return integer value
        public function count_rows($id)
        {
            $this->db->count_all_results('notes');  // Produces an integer
            $this->db->where('user_id', ($id));
            $this->db->from('notes');
            return $this->db->count_all_results();;
        }

        //function to count tasks and reutrn integer value
        public function count_ctasks($id)
        {
            $this->db->count_all_results('todo');  // Produces an integer
            $this->db->where('user_id', ($id));
            $this->db->from('todo');
            return $this->db->count_all_results();
        }
    } // end of user_model class