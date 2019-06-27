
<?php
    class Help extends CI_Controller
    {
        function index()
        {
            $data['title'] = 'Using Notes/Frequently Asked Questions';
            $data['pinn'] = $this->note_model->get_pin();
            $this->load->view('includes/header', $data);
            $this->load->view('pages/help', $data);
            $this->load->view('includes/footer');
        }
    }