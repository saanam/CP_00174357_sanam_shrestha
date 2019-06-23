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

        public function login_history_set()
        {
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
                'email' => $this->session->userdata('email')
            );

            $this->db->insert('login_history', $data);
        }

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

        public function get_user()
        {          
            $id= array(
                'userid' => $this->session->userdata('user_id'));
            $query = $this->db->get('users');
            $query = $this->db->get_where('users', $id);
            return $query->row_array();; //returns $query in result_array()
        }



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

        public function change_password_m($enc_password)
        {
            $id = $this->session->userdata('user_id');

            $data = array(
                'password'=> $enc_password
            );

                $this->db->where('userid', $id);
                return $this->db->update('users', $data); 
        }
    }