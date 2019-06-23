
<?php
    class Help extends CI_Controller
    {
        function index()
        {
            $data['title'] = 'Using Notes/Frequently Asked Questions';
            $this->load->view('includes/header');
            $this->load->view('pages/help', $data);
            $this->load->view('includes/footer');
        }
    }