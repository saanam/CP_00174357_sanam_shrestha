<!-- this is a controller class of user-->
<?php
    class Users extends CI_Controller
    {
        //register user
        public function register()
        {
           $data['title'] =  'Sign Up';
            // setting validation on name, email, password, and password2
           $this->form_validation->set_rules('name', 'Name', 'required');
           $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
           $this->form_validation->set_rules('password', 'Password', 'required');
           $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
            $password = $this->input->post('password');
            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
           //start of if condition
            if($this->form_validation->run() === FALSE ||!$uppercase || !$lowercase 
            || !$number || !$specialChars || strlen($password) < 8)
            {
                //load following assets if above condition match
                $data['pinn'] = $this->note_model->get_pin();
                $this->load->view('includes/header', $data);
                $this->load->view('users/register', $data);
                $this->load->view('includes/footer');
            }
            else
            {
                //encrypt password
                $enc_password = md5($password);
                //sends encrypted password in user_model register function
                $this->user_model->register($enc_password);
                //set message
                $this->session->set_flashdata('user_registered', 'Registretion complete.
                 Please proceed to login page for login.');
                //redirect page to notes
                redirect('notes');
            }
            // end of if condition
        } // end od function

        //login user
        public function login()
        {
            //setting page title
           $data['title'] =  'Sign In';
            $data['pinn'] = $this->note_model->get_pin();
           // setting validation on email and password
           $this->form_validation->set_rules('email', 'Email', 'required');
           $this->form_validation->set_rules('password', 'Password', 'required');
          
           // start of if condition
            if($this->form_validation->run() === FALSE)
            {
                $this->load->view('includes/header', $data);
                $this->load->view('users/login', $data);
                $this->load->view('includes/footer');
            }
            else
            {
                //get email
                $email = $this->input->post('email');

                //get and encrypt password
                $password= md5($this->input->post('password'));

                //login user
                $user_id = $this->user_model->login($email, $password);

                //start of nested if condion
                if($user_id)
                {
                    //create session
                    $user_data= array(
                        'user_id'=> $user_id,
                        'email' => $email,
                        'password' => $password,
                        'logged_in' => true
                    );
                    //stores above array data so it can be access anytime we need
                    $this->session->set_userdata($user_data);
                    $this->user_model->login_history_set();
                    //set message
                    $this->session->set_flashdata('user_loggedin', 'Login sucessfull.');
                    //redirecr page to notes
                    redirect('notes');

                }
                else
                {
                 //set message
                 $this->session->set_flashdata('login_failed', 'Username or password incorect');

                 //redurect page to users/login
                 redirect('users/login');
                }
                // end of nested if condition
                // end of if condition
            }
        } // end of function

        //Log user out
        public function logout()
        {
            //unset userdata(session)
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('password');

            //set message
            $this->session->set_flashdata('user_logout', 'logout complete');
            //redurect page to users/login
            redirect('users/login');
        } // end of fucniton

        //check email exists or not
        public function check_email_exists($email)
        {
            $this->form_validation->set_message('check_email_exists', 'Email is taken');
            if($this->user_model->check_email_exists($email))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        } // end of fucntion

        //function that calls model function when called
        public function edit_profile()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                //redirect page to users/login
                redirect('users/login');
            }
            $data['user']= $this->user_model->get_user();
            $data['title'] = 'Edit Profile';
            $data['pinn'] = $this->note_model->get_pin();
            $this->load->view('includes/header', $data);
            $this->load->view('users/edit_profile', $data);
            $this->load->view('includes/footer');
        } // end of fucnton

        //function that calls model function when called
        public function change_password()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $data['user']= $this->user_model->get_user();
            $data['title'] = 'Change password';
            $data['pinn'] = $this->note_model->get_pin();
            $this->load->view('includes/header', $data);
            $this->load->view('users/change_password', $data);
            $this->load->view('includes/footer');
        } // end of fucntion

        //function that calls model function when called
        public function update()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $this->user_model->update_user();

            //set message
            $this->session->set_flashdata('profile_updated', 'Profile updated.');
            //redirect page to profile
            redirect('profile');            
        } // end of function

        //function that calls model function when called
        public function update_password()
        {
                 //check login
                 if(!$this->session->userdata('logged_in'))
                 {
                     redirect('users/login');
                 }
                    $this->form_validation->set_rules('password', 'Password', 'required');
                    $this->form_validation->set_rules('password1', 'Password1', 'required');
                    $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password1]');
                    $enc_password = md5($this->input->post('password'));
                    $password = $this->input->post('password1');
                    // Validate password strength
                    $uppercase = preg_match('@[A-Z]@', $password);
                    $lowercase = preg_match('@[a-z]@', $password);
                    $number    = preg_match('@[0-9]@', $password);
                    $specialChars = preg_match('@[^\w]@', $password); 
                    $enc_password1 = md5($password);
                       if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
                       {
                            //set message
                            $this->session->set_flashdata('old_passwordwrong', 'Your 
                            current password or new password is incorrect.
                             Note: Password should be at least 8 characters in length
                              and should include at least one upper case letter, one
                               number, and one special character.');
                            //redurect page to users/login
                            redirect('users/change_password');
                       }  
                        else
                        {
                            if($enc_password == $this->session->userdata('password'))
                            {
                                $email = $this->session->userdata('email');
                                $this->user_model->change_password_m($enc_password1);
                                //unset userdata(session)
                                $this->session->unset_userdata('logged_in');
                                $this->session->unset_userdata('user_id');
                                $this->session->unset_userdata('email');
                                $this->session->unset_userdata('password');
                                //set message
                                $this->session->set_flashdata('password_updated', 'Your 
                                has been updated, Login to verify password.');
                                //redurect page to users/login
                                redirect('users/login');
                            }
                            else
                            {
                                //set message
                                $this->session->set_flashdata('old_passwordwrong', 'Your 
                                current password is incorrect');
                                //redurect page to users/login
                                redirect('users/change_password');

                            }
                        }
                            
        } // end of function

        //function that calls model function when called
        public function login_history()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
           
            //setting page title
           $data['title'] =  'Loggin history';
           $data['login_history'] = $this->user_model->login_history_view();
           $data['pinn'] = $this->note_model->get_pin();
           $this->load->view('includes/header', $data);
           $this->load->view('users/history', $data);
           $this->load->view('includes/footer');
        } // end of fucntion
        
        //function that calls model function when called
        public function count_note()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $data['count'] = $this->note_model->count_note();
            $this->load->view('users/profile', $data);
        } //end of function
    } // end of user class