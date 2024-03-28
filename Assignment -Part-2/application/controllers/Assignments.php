<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assignments extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Assignment');
    }

    /**
     * DOCU: Display the list of assignments.
     * 
     * This function fetches assignments from the database and displays them.
     * By default, it displays 10 rows, but the limit can be customized.
     * 
     * @param int $limit The number of rows to display.
     * @return void
     */
    public function index($limit = 10)
    {
        $data['assignments'] = $this->Assignment->get_assignments_limit($limit);
        $data['total_rows'] = $this->Assignment->get_total_assignments();
        
        $data['title'] = "All Assignments - Showing $limit rows";

        $this->load->view('assignments', $data);
    }
}
?>