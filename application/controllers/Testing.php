<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Testing extends CI_Controller
    {
        public function _construct()
        {
            parent::_construct();
            $this->load->library('unit_test');
        }

        public function index()
        {
            $test = $this->check_array();
            $expected_result = 'is_array';
            $test_name = 'Array check';
            $test_note = 'This is a test for checking array input and output';

            $test1 = $this->pass_login('asd@asd', 'Sanamasd@12345');
            $expected_result1 = 1;
            $test_name1 = 'Login Test';
            $test_note1 = 'This is a test for pass login';

            $test2 = $this->fail_login('asdasd@asd', 'Sanamasd@12345');
            $expected_result2 = True;
            $test_name2 = 'Login Test';
            $test_note2 = 'This is a test for fail login';

            $test3 = $this->chk_email('sanam@gmail.com');
            $expected_result3 = False;
            $test_name3 = 'Check email';
            $test_note3 = 'This is a test for checking email exists or not';

            $test4 = $this->chk_email('test@gmail.com');
            $expected_result4 = True;
            $test_name4 = 'Check email';
            $test_note4 = 'This is a test for checking email exists or not';

            $test5 = $this->count_notes('1');
            $expected_result5 = 6;
            $test_name5 = 'count all notes';
            $test_note5 = 'This is a test for counting notes';

            $test6 = $this->count_tasks('1');
            $expected_result6 = 21;
            $test_name6 = 'count all tasks';
            $test_note6 = 'This is a test for counting tasks';

            $try['try'] = $this->unit->run($test, $expected_result, $test_name, $test_note);
            $try['try1'] = $this->unit->run($test1, $expected_result1, $test_name1, $test_note1);
            $try['try2'] = $this->unit->run($test2, $expected_result2, $test_name2, $test_note2);
            $try['try3'] = $this->unit->run($test3, $expected_result3, $test_name3, $test_note3);   
            $try['try4'] = $this->unit->run($test4, $expected_result4, $test_name4, $test_note4);  
            $try['try5'] = $this->unit->run($test5, $expected_result5, $test_name5, $test_note5); 
            $try['try6'] = $this->unit->run($test6, $expected_result6, $test_name6, $test_note6);         
            $this->load->view('testing/index',$try);
            $this->load->view('includes/footer');
        }

        function check_array()
        {
            $ut = array(
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => 'password');
                return $ut;  
        }
        
        function pass_login($email, $password)
        {
            return $this->user_model->login($email, md5($password));
        }

        function fail_login($email, $password)
        {
            return $this->user_model->login($email, md5($password));
        }     
        
        function chk_email($email)
        {
            return $this->user_model->check_email_exists($email);
        }

        function count_notes($id)
        {
            return $this->user_model->count_rows($id);
        }

        function count_tasks($id)
        {
            return $this->user_model->count_ctasks($id);
        }
    }
?>