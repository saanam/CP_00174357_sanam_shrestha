<?php
    class Profile extends CI_Controller
    {
        public function index()
        {
            $this->load->model('user_model');
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $this->load->view('includes/header');
            $data['title'] = 'Profile';
            $id = $this->session->userdata('user_id');
            $data['row'] = $this->user_model->count_rows($id);
            $data['task'] = $this->user_model->count_ctasks($id);
            $this->load->view('users/profile', $data);
            $this->load->view('includes/footer');
        }
    }