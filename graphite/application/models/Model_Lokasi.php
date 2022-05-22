<?php
class Model_Lokasi extends CI_Model{
    function getDataLokasi(){
        return $this->db->get('lokasi');
    }

    function insertLokasi($data){
        $simpan = $this->db->insert('lokasi', $data);
        if($simpan){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getLokasi($namalokasi){
        return $this->db->get_where('lokasi', array('nama_lokasi' => $namalokasi));
    }

    function deleteLokasi($idlokasi){
        $hapus = $this->db->delete('lokasi', array('id_lokasi' => $idlokasi));
        if($hapus){
            return 1;
        }
        else{
            return 0;
        }
    }
}