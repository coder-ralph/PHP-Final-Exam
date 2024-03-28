<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Assignment extends CI_Model
{
    /**
     * Filter assignments based on given criteria.
     *
     * @param array $post The filtering criteria submitted via POST request.
     * @param string $request The type of request ('result' or 'count').
     * @return mixed Fetched assignments or count based on the request type.
     */
    public function filter_assignments($post, $request)
    {
        $query = "SELECT * FROM assignments";
        $count_query = "SELECT COUNT(id) AS count FROM assignments";
        $where = array();

        if (!empty($post["level"])) {
            $where[] = "level = '" . $this->db->escape_str($post["level"]) . "'";
        }

        if (!empty($post["track"])) {
            $where[] = "track = '" . $this->db->escape_str($post["track"]) . "'";
        }

        if (!empty($where)) {
            $query .= " WHERE " . implode(" AND ", $where);
            $count_query .= " WHERE " . implode(" AND ", $where);
        }

        if ($request == "result") {
            return $this->db->query($query)->result_array();
        }

        if ($request == "count") {
            return $this->db->query($count_query)->row_array();
        }
    }
}
?>
