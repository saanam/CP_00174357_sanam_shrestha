<!-- this is a controller class of extport_csv
<?php
    class Export_csv extends CI_Controller
    {
        //This methode will be exectuded when new object from this class has been created
        public function __construct()
        {
            //when new object from this class has been created __construct methode will be executed
            parent::__construct();
            $this->load->model('export_csv_model');//this methodwill load export_csv_model
        }// end of function

        // this is root methode of this class. when we type base url/export_csv then this method will execute
        function index()
        {
            //check login
            if(!$this->session->userdata('logged_in'))
            {
                redirect('users/login');
            }
            $this->load->view('includes/header');
            //this methode will return data which have been stored under $data variable
            $data['note_data'] = $this->export_csv_model->fetch_data(); 
            $this->load->view('export_csv', $data);
            $this->load->view('includes/footer');
        }// end of function

        //function to export data and to call respetive model
        function export()
        {
            $file_name = 'note_detail_on'.date('Ymd').'.csv';
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$file_name");
            header("Content-Type: application/csv;");
            $note_data = $this->export_csv_model->fetch_data();

            $file = fopen('php://output', 'w');   
            $header = array("notename", "notedetail");
            
            fputcsv($file, $header);

            foreach($note_data->result_array() as $key => $value)
            {
                fputcsv($file, $value);
            }

            fclose($file);

            exit;
        } // end of function
    }