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

            $this->load->view('includes/header', $data);
            $this->load->view('users/login',$data);
            $this->load->view('includes/footer');
        }
    } // end of fucntion