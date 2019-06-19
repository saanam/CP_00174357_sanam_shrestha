<?php
    class Profile extends CI_Controller
    {
        public function index()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }

            $data['title'] = 'Profile';
            $this->load->view('includes/header');
            $this->load->view('users/profile', $data);
            $this->load->view('includes/footer');
        }
    }