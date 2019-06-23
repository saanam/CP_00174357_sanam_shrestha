<!--this is a controller class of search-->
<?php
    class Search extends CI_Controller
    {
        //function that calls model function when called
        public function __constructor()
        {
            $this->load->library('session');
        } //end of fucntion

        //function that calls model function when called
        public function index()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
        } //end of function

        //function that calls model function when called
        public function note_search()
        {
            $data['title'] = 'Search notes (Showing relavent data)';
            $this->load->view('includes/header');
            $key = $this->input->post('search');
            $data['notes'] = $this->search_model->search_note($key);
            $this->load->view('search/view', $data);
            $this->load->view('includes/footer');
        }
    } // end of function