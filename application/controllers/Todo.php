<?php 
    class Todo extends CI_Controller
    {
        public function index()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }

            $data['title'] = "Your's today's perform list ";
            $data['todos'] = $this->todo_model->get_todo();

            //load following assets
            $this->load->view('includes/header');
            $this->load->view('todo/index', $data);
            $this->load->view('includes/footer');
        }

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
                $this->load->view('includes/header');
                $this->load->view('todo/add', $data);
                $this->load->view('includes/footer');
            }
            else{
                $this->todo_model->add_todo();

                //set message
                $this->session->set_flashdata('notebook_added', 'Notebook has been added.');

                redirect('todo');
            }           
        }

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
        }

        public function view_c()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }

            $data['title'] = "Completed tasks ";
            $data['todos'] = $this->todo_model->get_todo_c();

            //load following assets
            $this->load->view('includes/header');
            $this->load->view('todo/view', $data);
            $this->load->view('includes/footer');            
        }



}