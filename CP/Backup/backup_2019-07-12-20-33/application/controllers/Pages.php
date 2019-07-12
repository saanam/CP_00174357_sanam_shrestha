<!-- this is controller class of page-->
<?php
    class Pages extends CI_Controller
    {
        //function that calls model function when called
        public function view($page = 'login')
        {
            if(!file_exists(APPPATH.'views/users/'.$page.'.php'))
            {
                show_404();
            }
            $data['title'] = ucfirst($page);

            $this->load->view('includes/header', $data);
            $this->load->view('users/'.$page, $data);
            $this->load->view('includes/footer');
        }
    } // end of fucntion