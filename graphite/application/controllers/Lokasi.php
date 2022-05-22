<?php
class Lokasi extends CI_Controller{
    function __construct(){
        parent::__construct();
        checklogin();
        $this->load->model('Model_Lokasi');
    }
    function index(){
        $data['lokasi'] = $this->Model_Lokasi->getDataLokasi()->result();
        $this->template->load('template/template', 'lokasi/view_lokasi', $data);
    }

    function inputlokasi(){
        $this->load->view('lokasi/input_lokasi');
    }

    function simpanlokasi(){
        $namalokasi = $this->input->post('namalokasi');
        $idlokasi = $this->input->post('idlokasi');

        $data = array(
            'id_lokasi' => $idlokasi,
            'nama_lokasi' => $namalokasi,
        );

        $simpan = $this->Model_Lokasi->insertLokasi($data);
        if($simpan == 1){
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    Data lokasi baru berhasil disimpan.
                </div>');
            redirect('lokasi');
        }
        else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
                    Data lokasi gagal disimpan!
                </div>');
            redirect('lokasi');
        }
    }

    function hapusLokasi(){
        $idlokasi = $this->uri->segment(3);
        $hapus = $this->Model_Lokasi->deleteLokasi($idlokasi);
        if($hapus == 1){
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    Data lokasi berhasil dihapus.
                </div>');
            redirect('lokasi');
        }
        else{
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
                    Data lokasi gagal dihapus!
                </div>');
            redirect('lokasi');
        }
    }
}