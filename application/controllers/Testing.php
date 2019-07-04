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

            $test1 = $this->check_array();
            $expected_result1 = 'is_array';
            $test_name1 = 'Array check';
            $test_note1 = 'This is a test for checking array input and output';

            $test2 = $this->check_array();
            $expected_result2 = 'is_array';
            $test_name2 = 'Array check';
            $test_note2 = 'This is a test for checking array input and output';

            $test3 = $this->check_array();
            $expected_result3 = 'is_array';
            $test_name3 = 'Array check';
            $test_note3 = 'This is a test for checking array input and output';

            $try['try'] = $this->unit->run($test, $expected_result, $test_name, $test_note);
            $try['try1'] = $this->unit->run($test1, $expected_result1, $test_name1, $test_note1);
            $try['try2'] = $this->unit->run($test2, $expected_result2, $test_name2, $test_note2);
            $try['try3'] = $this->unit->run($test3, $expected_result3, $test_name3, $test_note3);            
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
    }
?>