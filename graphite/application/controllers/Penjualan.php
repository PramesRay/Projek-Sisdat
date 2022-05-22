<?php
class Penjualan extends CI_Controller{
    function __construct(){
        parent::__construct();
        checklogin();
        $this->load->model('Model_Penjualan');
    }
    function index(){
        $data['penjualan'] = $this->Model_Penjualan->getDataPenjualan()->result();
        $this->template->load('template/template', 'penjualan/view_penjualan', $data);
    }

    function inputpenjualan(){
        $this->load->view('penjualan/input_penjualan');
    }

    function simpanpenjualan(){
        $idpenjualan = $this->input->post('idpenjualan');
        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('waktu');
        $idbarang = $this->input->post('idbarang');
        $idlokasi = $this->input->post('idlokasi');
        $total = $this->input->post('total');
        $id_user = $this->input->post('id_user');

        $data = array(
            'id_penjualan' => $idpenjualan,
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'id_barang' => $idbarang,
            'id_lokasi' => $idlokasi,
            'total_penjualan' => $total,
            'id_user' => $id_user
        );

        $simpan = $this->Model_Penjualan->insertPenjualan($data);
        if($simpan == 1){
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    Data penjualan baru berhasil disimpan.
                </div>');
            redirect('penjualan');
        }
        else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
                    Data penjualan gagal disimpan!
                </div>');
            redirect('penjualan');
        }
    }

    function hapusPenjualan(){
        $jenisbarang = $this->uri->segment(3);
        $hapus = $this->Model_Penjualan->deletePenjualan($jenisbarang);
        if($hapus == 1){
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    Data penjualan berhasil dihapus.
                </div>');
            redirect('penjualan');
        }
        else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
                    Data penjualan gagal dihapus!
                </div>');
            redirect('penjualan');
        }
    }
}