<?php
class Model_Barang extends CI_Model{
    function getDataBarang(){
        return $this->db->get('barang');
    }

    function insertBarang($data){
        $simpan = $this->db->insert('barang', $data);
        if($simpan){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getBarang($jenisbarang){
        return $this->db->get_where('barang', array('jenis_barang' => $jenisbarang));
    }

    function deleteBarang($idbarang){
        $hapus = $this->db->delete('barang', array('id_barang' => $idbarang));
        if($hapus){
            return 1;
        }
        else{
            return 0;
        }
    }
}