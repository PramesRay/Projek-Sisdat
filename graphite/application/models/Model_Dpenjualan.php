<?php
class Model_Dpenjualan extends CI_Model{
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

    function getSalesTahunIni(){
        $tahunini = date("Y");
        $this->db->select("SUM(total_penjualan) as annualsales");
        $this->db->from('penjualan');
        $this->db->where('year(tanggal)',$tahunini);
        return $this->db->get();
    }

    function getDailyOverview(){
        $hariini = date("Y-m-d");
        $query = "SELECT id_barang, sum(total_penjualan) as total1
        FROM penjualan
        WHERE tanggal ='$hariini'
        GROUP BY id_barang;";

        return $this->db->query($query);
    }

    function getMonthlyOverview(){
        $bulanini = date("m");
        $query = "SELECT id_barang, sum(total_penjualan) as total2
        FROM penjualan
        WHERE MONTH(tanggal)='$bulanini'
        GROUP BY id_barang;";

        return $this->db->query($query);
    }

    function getAnnualOverview(){
        $tahunini = date("Y");
        $query = "SELECT id_barang, sum(total_penjualan) as total3
        FROM penjualan
        WHERE YEAR(tanggal)='$tahunini'
        GROUP BY id_barang;";

        return $this->db->query($query);
    }

    function getPenjualanPerHari(){
        $bulanini = date("m");
        $query = "SELECT hari.id, hari.hari, sum(penjualan.total_penjualan) as penjualanperhari
        FROM hari
        LEFT JOIN penjualan
        ON hari.id=day(penjualan.tanggal)
        WHERE MONTH(tanggal) = '$bulanini'
        GROUP BY day(penjualan.tanggal);";

        return $this->db->query($query);
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
}