<!-- this is a controlelr class of profile-->
<?php
    class Profile extends CI_Controller
    {
        //function that calls model function when called
        public function index()
        {
            $this->load->model('user_model');
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $data['pinn'] = $this->note_model->get_pin();
            $this->load->view('includes/header', $data);
            $data['title'] = 'Profile';
            $id = $this->session->userdata('user_id');
            $data['row'] = $this->user_model->count_rows($id);
            $data['task'] = $this->user_model->count_ctasks($id);
            $this->load->view('users/profile', $data);
            $this->load->view('includes/footer');
        }
    } //end of function