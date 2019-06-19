<?php
    class Search extends CI_Controller
    {
        public function __constructor()
        {
            $this->load->library('session');
        }
        public function index()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
        }

        public function note_search()
        {
            $data['title'] = 'Search notes (Showing relavent data)';
            $this->load->view('includes/header');
     
            $key = $this->input->post('search');
            $data['notes'] = $this->search_model->search_note($key);
            $this->load->view('search/view', $data);
            $this->load->view('includes/footer');
        }
    }