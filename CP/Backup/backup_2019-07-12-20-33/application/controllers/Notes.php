<!-- thisi a controller class ofnotes-->
<?php
    class Notes extends CI_Controller
    {
        //function that calls model function when called
        public function index($offset = 0)
        {
            //pagination config
            $config['base_url'] = base_url() . 'notes/index/';
            $config['total_rows'] = $this->db->count_all('notes');
            $config['per_page'] = 3;
            $config['uri_segment'] = 3;
            // Produces: class="pagination-link"
            $config['attributes'] = array('class' => 'pagination-link');

            //initate pagination
            $this->pagination->initialize($config);

            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $data['title'] = 'Latest notes';
            $data['notify'] = $this->todo_model->notify_tasks();
            $data['notes'] = $this->note_model->get_notes(FALSE,
             $config['per_page'], $offset);
             $data['pinn'] = $this->note_model->get_pin();
            $this->load->view('includes/header', $data);
            $this->load->view('notes/index', $data);
            $this->load->view('includes/footer');
            
        }

        //function that calls model function when called
        public function view($slug = NULL)
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $data['note']= $this->note_model->get_notes($slug);

            if (empty($data['note']))
            {
                show_404();
            }
            $data['notename'] = $data['note']['notename'];
            $data['pinn'] = $this->note_model->get_pin();
            $this->load->view('includes/header', $data);
            $this->load->view('notes/view', $data);
            $this->load->view('includes/footer');
        }

        //function that calls model function when called
        public function add()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $data['title'] = 'Add note';
            $data['notebooks'] = $this->note_model->get_notebooks();
            $this->form_validation->set_rules
            ('notename', 'Notename', 'required');
            $this->form_validation->set_rules
            ('notedetail', 'Notedetail', 'required');
            
            if($this->form_validation->run() === FALSE)
            {
                $data['pinn'] = $this->note_model->get_pin();
                $this->load->view('includes/header', $data);
                $this->load->view('notes/add', $data);
                $this->load->view('includes/footer');
            }
            else
            {
                //upload image
                $config['upload_path'] = './assets/images
                /notes';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '2048';
                $config['max_width'] = '1500';
                $config['max_height'] = '1500';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload())
                {
                    $errors = array('error' =>$this->
                    upload->display_errors());
                    $post_image = 'noimage.jpg';
                }
                else
                {
                    $data = array('upload_data' =>$this->
                    upload->data());
                    $post_image = $_FILES['userfile']['name'];
                }
                $this->note_model->add_note($post_image);
                //set message
                $this->session->set_flashdata('note_added', 
                'Note saved.');
                //redirect page to notes
                redirect('notes');
                
            }
        } //end of the function

        public function delete($noteid)
        {
             //check login
            if(!$this->session->userdata('logged_in'))
            {
                //redirect page to users/login
                 redirect('users/login');
            }
            //insert into trash table
            $this->trash_model->trash_note($noteid);
            //delete selected note
            $this->note_model->delete_note($noteid);
           //set message
           $this->session->set_flashdata('note_deleted', 
           'Note deleted.');
           //redirect page to notes
           redirect('notes');
        } //end of the function

        //function that calls model function when called
        public function edit($slug)
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                //redirect page to users/login
                redirect('users/login');
            }
            $data['note']= $this->note_model->get_notes($slug);
            //check user
            if($this->session->userdata('user_id') != 
            $this->note_model->get_notes($slug)['user_id'])
            {
                //redirect page to users/login
                redirect('users/login');
            }
            $data['notebooks'] = $this->note_model->
            get_notebooks();
            //show page 404 error if empty
            if (empty($data['note']))
            {
                show_404();
            }
            $data['title'] = 'Edit Note';
            $data['pinn'] = $this->note_model->get_pin();
            $this->load->view('includes/header', $data);
            $this->load->view('notes/edit', $data);
            $this->load->view('includes/footer');
        } // end of function

        //function that calls model function when called
        public function update()
            {
                //check login
                if(!$this->session->userdata('logged_in'))
                {
                    redirect('users/login');
                }
                $this->note_model->update_note();
                //set message
                $this->session->set_flashdata('note_updated', 
                'Note updated.');
                redirect('notes');
            } 
    } // end of note class