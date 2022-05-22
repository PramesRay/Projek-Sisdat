<h2 class="page-title" style="color : #F1BBD5;">
    Laporan Penjualan
</h2>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-azure mb-3" style="background-color: #5F1854" id="tambahpenjualan">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><line x1="9" y1="14" x2="15" y2="14" /></svg>
                    Tambah Penjualan</a>
                <div class="md-3"><?php echo $this->session->flashdata('msg');?></div>
                <table class="table table-striped table-bordered" id="tabelpenjualan">
                    <thead style="background-color: #153149">
                        <tr>
                            <th style="color: white">No.</th>
                            <th style="color: white">ID Penjualan</th>
                            <th style="color: white">Tanggal</th>
                            <th style="color: white">Waktu Terjual</th>
                            <th style="color: white">Barang</th>
                            <th style="color: white">Total Penjualan</th>
                            <th style="color: white">Lokasi Penjualan</th>
                            <th style="color: white">Penginput</th>
                            <th style="color: white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($penjualan as $p){
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $p->id_penjualan; ?></td>
                                <td><?php echo format_indo($p->tanggal); ?></td>
                                <td><?php echo $p->waktu; ?></td>
                                <td><?php echo $p->id_barang; ?></td>
                                <td><?php echo "Rp." . number_format($p->total_penjualan, 0, '', '.'); ?></td>
                                <td><?php echo $p->id_lokasi; ?></td>
                                <td><?php echo $p->id_user; ?></td>
                                <td>
                                    <a href="#" data-href="<?php echo base_url(); ?>penjualan/hapuspenjualan/<?php echo $p->id_barang; ?>" class="btn btn-sm btn-danger hapus" style="background-color : #A12559;">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php
                        $no++; 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modalpenjualan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambahkan Data Penjualan Baru</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputpenjualan"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modalhapuspenjualan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Apakah anda ingin menghapus data penjualan ini?</div>
                <div>Data tidak bisa dikembalikan setelah dihapus.</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary mr-auto" style="color : #A12559;" data-dismiss="modal">Batal</button>
                <a href="#" id="hapuspenjualan" class="btn btn-danger" style="background-color : #A12559;">Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $("#tambahpenjualan").click(function(){
            $("#modalpenjualan").modal("show");
            $("#loadforminputpenjualan").load("<?php echo base_url(); ?>penjualan/inputpenjualan");
        });
        $(".hapus").click(function(){
            var href = $(this).attr('data-href');
            $("#modalhapuspenjualan").modal("show");
            $('#hapuspenjualan').attr('href', href);
        });
        $('#tabelpenjualan').DataTable();
    });
</script>