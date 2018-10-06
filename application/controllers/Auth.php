<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
 {
   public function get_csrf()
    {
    $csrf['csrf_name'] = $this->security->get_csrf_token_name();
    $csrf['csrf_token'] = $this->security->get_csrf_hash();

    echo json_encode($csrf);
    }
 }
?>