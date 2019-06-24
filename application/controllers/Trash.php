<?php 
    class Trash extends CI_Controller
    {
        function index()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }            
            $data['title'] = 'Trash';
            $data['trash'] = $this->trash_model->view_trash();
            $this->load->view('includes/header');
            $this->load->view('notes/trash', $data);
            $this->load->view('includes/footer');

        }

        function recover($tid)
        {
            if(!$this->session->userdata('logged_in'))
            {
                //redirect page to users/login
                 redirect('users/login');
            }
            $this->trash_model->recover($tid); 
            $this->trash_model->delete($tid); 
            
            redirect('profile/trash');
        }
    }