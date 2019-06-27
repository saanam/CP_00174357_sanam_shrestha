<!-- this is a controller class of todo-->
<?php 
    class Todo extends CI_Controller
    {
        //function that calls model function when called
        public function index()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $data['title'] = "Your's today's perform list ";
            $data['todos'] = $this->todo_model->get_todo();
            $data['tos'] = $this->todo_model->get_todo7();
            $data['pinn'] = $this->note_model->get_pin();
            //load following assets
            $this->load->view('includes/header', $data);
            $this->load->view('todo/index', $data);
            $this->load->view('includes/footer');
        } // end of function

        //function that calls model function when called
        public function add()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $data['title'] = 'Add Todo';
            $this->form_validation->set_rules('todoname','Todoname', 'required');
            $this->form_validation->set_rules('date','Tododate', 'required');  
            if($this->form_validation->run() === FALSE)
            {
                $data['pinn'] = $this->note_model->get_pin();
                $this->load->view('includes/header',$data);
                $this->load->view('todo/add', $data);
                $this->load->view('includes/footer');
            }
            else{
                $this->todo_model->add_todo();

                //set message
                $this->session->set_flashdata('notebook_added', 'Notebook has been added.');

                redirect('todo');
            }           
        } // end of function

        //function that calls model function when called
        public function update($todoid)
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                //redirect page to users/login
                redirect('users/login');
            }
            $this->todo_model->update_todo($todoid);
             
            //redirect page to notes
            redirect('todo');
        } //end of function

        //function that calls model function when called
        public function view_c()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $data['title'] = "Completed tasks ";
            $data['todos'] = $this->todo_model->get_todo_c();
            $data['pinn'] = $this->note_model->get_pin();

            //load following assets
            $this->load->view('includes/header', $data);
            $this->load->view('todo/view', $data);
            $this->load->view('includes/footer');            
        } // end of fucntion
} // end of calss