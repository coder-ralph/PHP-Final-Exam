<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assignments extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('assignment');
    }

    /**
     * Display the main assignments page.
     */
    public function index() {
        $this->load->view('assignments');
    }

    /**
     * Update the assignments table based on filters.
     */
    public function update_table() {
        $output = $this->assignment->filter_assignments($this->input->post(NULL, TRUE), "result");
        $data["assignments"] = $output;
        $this->load->view("partial/assignment-table.php", $data);
    }    

    /**
     * Get the count of assignments based on filters.
     */
    public function get_count(){
        $output = $this->assignment->filter_assignments($this->input->post(NULL, TRUE), "count");
        echo(json_encode($output));
    }
}
?>
