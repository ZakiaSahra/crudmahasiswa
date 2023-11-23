<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class Table extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
    }
    public function index()
    {
        $this->load->view('table_vw');
    }
}