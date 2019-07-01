<!-- this is controller class of page-->
<?php
    class Pages extends CI_Controller
    {
        //function that calls model function when called
        public function view()
        {
            if(!file_exists(APPPATH.'views/users/login.php'))
            {
                show_404();
            }
            $data['title'] = 'Login';
            $data['pinn'] = $this->note_model->get_pin();
            $this->load->view('includes/header', $data);
            $this->load->view('users/login',$data);
            $this->load->view('includes/footer');
        }
    } // end of fucntion