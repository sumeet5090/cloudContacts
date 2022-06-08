<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

    private $table = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    public function select_conditional(string $where = '')
    {

        $sql = "SELECT * FROM " . $this->table . (!empty($where) ? " where {$where}" : '');
        $query = $this->db->query($sql);

        // Returning the objects
        return ['obj' => $query->result(), 'num_rows' => $query->num_rows()];
    }

    public function register_user($data){
        if(is_array($data) && !empty($data)){
            $this->db->insert($this->table, $data);
            return $this->db->affected_rows() > 0 ? TRUE : FALSE;
        }
    }
}
