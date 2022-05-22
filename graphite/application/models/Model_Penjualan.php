<?php
class Model_Penjualan extends CI_Model{
    function getDataPenjualan(){
        return $this->db->get('penjualan');
    }

    function insertPenjualan($data){
        $simpan = $this->db->insert('penjualan', $data);
        if($simpan){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getPenjualan($jenisbarang){
        return $this->db->get_where('penjualan', array('jenis_barang' => $jenisbarang));
    }

    function deletePenjualan($jenisbarang){
        $hapus = $this->db->delete('penjualan', array('jenis_barang' => $jenisbarang));
        if($hapus){
            return 1;
        }
        else{
            return 0;
        }
    }
}