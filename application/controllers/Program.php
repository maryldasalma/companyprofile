<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

    public function index()
    {
        $this->load->view('jtv/program');
    }
}