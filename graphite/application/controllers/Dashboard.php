<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        checklogin();
        $this->load->model('Model_Dashboard');
    }
    function index(){
        $data['saleshariini'] = $this->Model_Dashboard->getSalesHariIni()->row_array();
        $data['salesbulanini'] = $this->Model_Dashboard->getSalesBulanIni()->row_array();
        $data['penjualanperbulan'] = $this->Model_Dashboard->getPenjualanPerBulan()->result();
        $data['salesoverview'] = $this->Model_Dashboard->getSalesOverview()->result();
        $this->template->load('template/template', 'dashboard/dashboard', $data);
    }
}