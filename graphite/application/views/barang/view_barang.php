<h2 class="page-title" style="color : #F1BBD5;">
    Daftar Produk
</h2>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-azure mb-3" style="background-color: #5F1854" id="tambahbarang">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><line x1="9" y1="14" x2="15" y2="14" /></svg>
                    Tambah Produk</a>
                <div class="md-3"><?php echo $this->session->flashdata('msg');?></div>
                <table class="table table-striped table-bordered" id="tabelbarang">
                    <thead style="background-color: #153149">
                        <tr>
                            <th style="color: white">No.</th>
                            <th style="color: white">ID Barang/jasa</th>
                            <th style="color: white">Jenis Barang/Jasa</th>
                            <th style="color: white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($barang as $b){
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $b->id_barang; ?></td>
                                <td><?php echo $b->jenis_barang; ?></td>
                                <td>
                                    <a href="#" data-href="<?php echo base_url(); ?>barang/hapusbarang/<?php echo $b->id_barang; ?>" class="btn btn-sm btn-danger hapus" style="background-color : #A12559;">
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
<div class="modal modal-blur fade" id="modalbarang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambahkan Produk Baru</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputbarang"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modalhapusbarang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Apakah anda ingin menghapus data barang ini?</div>
                <div>Data tidak bisa dikembalikan setelah dihapus.</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary mr-auto" style="color : #A12559;" data-dismiss="modal">Batal</button>
                <a href="#" id="hapusbarang" class="btn btn-danger" style="background-color : #A12559;">Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $("#tambahbarang").click(function(){
            $("#modalbarang").modal("show");
            $("#loadforminputbarang").load("<?php echo base_url(); ?>barang/inputbarang");
        });
        $(".hapus").click(function(){
            var href = $(this).attr('data-href');
            $("#modalhapusbarang").modal("show");
            $('#hapusbarang').attr('href', href);
        });
        $('#tabelbarang').DataTable();
    });
</script>