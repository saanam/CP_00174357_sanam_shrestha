<!-- this is controller class of page-->
<?php
    class Pages extends CI_Controller
    {
        //function that calls model function when called
        public function view($page = 'home')
        {
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                show_404();
            }
            $data['title'] = ucfirst($page);
            $this->load->view('includes/header');
            $this->load->view('pages/'.$page,$data);
            $this->load->view('includes/footer');
        }
    } // end of fucntion