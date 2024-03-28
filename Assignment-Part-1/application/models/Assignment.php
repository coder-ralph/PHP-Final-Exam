<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assignment extends CI_Model
{
    /**
     * DOCU: Retrieve assignments with a specified limit.
     * 
     * This function fetches assignments from the database with a specified limit.
     * 
     * @param int $limit The number of assignments to retrieve.
     * @return array Fetched assignments as an array.
     */
    public function get_assignments_limit($limit)
    {
        return $this->db->limit($limit)->get('assignments')->result_array();
    }

    /**
     * DOCU: Count total number of assignments.
     * 
     * This function counts the total number of assignments in the database.
     * 
     * @return int Total number of assignments.
     */
    public function get_total_assignments()
    {
        return $this->db->count_all_results('assignments');
    }
}
?>
