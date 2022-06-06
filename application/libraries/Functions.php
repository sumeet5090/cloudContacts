<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions {

    private $CI;
    
    public function __construct(){
        $this->CI =& get_instance();      
    }

    public function is_logged_in(int $var = NULL)
    {
        // we will check onlyif the user session is set or not
        if (isset($_SESSION['current_user']) && is_array($_SESSION['current_user']))
        {
            $current_user = $_SESSION['current_user'];

            if($var !== NULL && $var > 0)
            {
                if($current_user['id'] === $var)
                {
                    return TRUE;
                }
            }
            else
            {
                return true;
            }
        }
    }

    public function is_authorised_user($username, $password)
    {
        $ret = $this->CI->users_model->select_conditional("`username` = {$username}");

        if (is_object($ret))
        {
            if ($ret['num_rows'] == 1)
            {
                $saved_password = $ret[0]->password;
                return password_verify($password, $saved_password);
            }
            else 
            {
                return FALSE;
            }
        }
        else{
            return FALSE;
        }
    }
}