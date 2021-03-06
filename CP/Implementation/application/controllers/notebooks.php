<?php
    class Notebooks extends CI_Controller
    {
        public function index()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            
            $data['title'] = "Notebooks";
            $data['notebooks'] = $this->notebook_model->get_notebooks();

            //load following assets
            $this->load->view('includes/header');
            $this->load->view('notebooks/index', $data);
            $this->load->view('includes/footer');
        }

        //function to add new notebook
        public function add()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            
            $data['title'] = "Add Notebook";

            $this->form_validation->set_rules('name','Name', 'required');
            if($this->form_validation->run() === FALSE)
            {
                $this->load->view('includes/header');
                $this->load->view('notebooks/add', $data);
                $this->load->view('includes/footer');
            }
            else{
                $this->notebook_model->add_notebook();

                //set message
                $this->session->set_flashdata('notebook_added', 'Notebook has been added.');

                redirect('notebooks');
            }
        }

        //function
        public function notes($notebookid)
        {
            $data['title']= $this->notebook_model->get_notebook($notebookid)->notebookname;

            //load following assets
            $data['notes'] = $this->note_model->get_notes_by_notebook($notebookid);
            $this->load->view('includes/header');
            $this->load->view('notes/index', $data);
            $this->load->view('includes/footer');
        }

        public function delete($notebookid)
        {
             //check login
            if(!$this->session->userdata('logged_in'))
            {
                //redirect page to users/login
                 redirect('users/login');
            }

           $this->notebook_model->delete_notebook($notebookid);

           //set message
           $this->session->set_flashdata('notebook_deleted', 'Notebook deleted.');

           //redirect page to notes
           redirect('notebooks');
        }
    }