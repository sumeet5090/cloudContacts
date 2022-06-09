<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Functions
{

    private $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function is_logged_in(int $var = NULL)
    {
        // we will check onlyif the user session is set or not
        if (isset($_SESSION['current_user']) && is_array($_SESSION['current_user'])) {
            $current_user = $_SESSION['current_user'];

            if ($var !== NULL && $var > 0) {
                if ($current_user['id'] === $var) {
                    return TRUE;
                }
            } else {
                return true;
            }
        }
    }

    public function is_authorised_user($username, $password, $return_id = FALSE)
    {
        $ret = $this->CI->users_model->select_conditional("`email` = '{$username}'");

        if (!empty($ret)) {
            if ($ret['num_rows'] === 1) {
                $saved_password = $ret['obj'][0]->password;
                return ($return_id == TRUE) ? $ret['obj'][0]->id : password_verify($password, $saved_password);
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function set_session($id){
        $ret = $this->CI->users_model->select_conditional("`id` = '{$id}'");

        if (!empty($ret)) {
            if ($ret['num_rows'] === 1) {
                $_SESSION['current_user']['id'] = $id;
                $_SESSION['current_user']['email'] = $ret['obj'][0]->email;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function unset_session(){
        
        unset($_SESSION['current_user']);

        return !isset($_SESSION['current_user']) ? TRUE : FALSE;
    }
}
