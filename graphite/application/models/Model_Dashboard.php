<?php
class Model_Dashboard extends CI_Model{
    function getSalesHariIni(){
        $hariini = date("Y-m-d");
        $this->db->select("SUM(total_penjualan) as dailysales");
        $this->db->from('penjualan');
        $this->db->where('tanggal', $hariini);
        return $this->db->get();
    }

    function getSalesBulanIni(){
        $bulanini = date("m");
        $this->db->select("SUM(total_penjualan) as monthlysales");
        $this->db->from('penjualan');
        $this->db->where('month(tanggal)',$bulanini);
        return $this->db->get();
    }

    function getPenjualanPerBulan(){
        $tahunini = date("Y");
        $query = "SELECT bulan.id, bulan.bulan, sum(penjualan.total_penjualan) as penjualanperbulan
        FROM bulan
        LEFT JOIN penjualan
        ON bulan.id=month(penjualan.tanggal)
        WHERE YEAR(tanggal)='$tahunini'
        GROUP BY month(penjualan.tanggal);";

        return $this->db->query($query);
    }

    function getSalesOverview(){
        $bulanini = date("m");
        $query2 = "SELECT id_barang, sum(total_penjualan) as totalpnj
        FROM penjualan
        WHERE MONTH(tanggal)='$bulanini'
        GROUP BY id_barang;";

        return $this->db->query($query2);
    }
}