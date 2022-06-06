<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    private $table = 'users';

    public function __construct(){
        parent::__construct();
            
    }

    public function select_conditional(string $where = ''){
    
        $sql = "SELECT * FROM " . $this->table . ( ! empty($where) ? " where {$where}" : '' );    
        $query = $this->db->query($sql);

        // Returning the objects
        return ['obj' => $query->result(), 'num_rows' => $query->num_rows()];
    }

}