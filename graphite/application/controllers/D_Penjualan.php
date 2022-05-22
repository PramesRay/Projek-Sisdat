<?php
class D_Penjualan extends CI_Controller{
    function __construct(){
        parent::__construct();
        checklogin();
        $this->load->model('Model_Dpenjualan');
    }

    function index(){
        $data['saleshariini'] = $this->Model_Dpenjualan->getSalesHariIni()->row_array();
        $data['salesbulanini'] = $this->Model_Dpenjualan->getSalesBulanIni()->row_array();
        $data['salestahunini'] = $this->Model_Dpenjualan->getSalesTahunIni()->row_array();
        $data['dailyoverview'] = $this->Model_Dpenjualan->getDailyOverview()->result();
        $data['monthlyoverview'] = $this->Model_Dpenjualan->getMonthlyOverview()->result();
        $data['annualoverview'] = $this->Model_Dpenjualan->getAnnualOverview()->result();
        $data['penjualanperbulan'] = $this->Model_Dpenjualan->getPenjualanPerBulan()->result();
        $data['penjualanperhari'] = $this->Model_Dpenjualan->getPenjualanPerHari()->result();
        $this->template->load('template/template', 'd_penjualan/d_penjualan', $data);
    }
}