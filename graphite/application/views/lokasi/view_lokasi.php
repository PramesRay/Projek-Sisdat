<h2 class="page-title" style="color : #F1BBD5;">
    Daftar Lokasi
</h2>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-azure mb-3" style="background-color: #5F1854" id="tambahlokasi">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="12" y1="11" x2="12" y2="17" /><line x1="9" y1="14" x2="15" y2="14" /></svg>
                    Tambah Lokasi</a>
                <div class="md-3"><?php echo $this->session->flashdata('msg');?></div>
                <table class="table table-striped table-bordered" id="tabellokasi">
                    <thead style="background-color: #153149">
                        <tr>
                            <th style="color: white">No.</th>
                            <th style="color: white">ID Lokasi</th>
                            <th style="color: white">Nama Lokasi</th>
                            <th style="color: white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($lokasi as $l){
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $l->id_lokasi ?></td>
                                <td><?php echo $l->nama_lokasi; ?></td>
                                <td>
                                    <a href="#" data-href="<?php echo base_url(); ?>lokasi/hapuslokasi/<?php echo $l->id_lokasi; ?>" class="btn btn-sm btn-danger hapus" style="background-color : #A12559;">
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
<div class="modal modal-blur fade" id="modallokasi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambahkan Lokasi Baru</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputlokasi"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modalhapuslokasi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Apakah anda ingin menghapus data lokasi ini?</div>
                <div>Data tidak bisa dikembalikan setelah dihapus.</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary mr-auto" style="color : #A12559;" data-dismiss="modal">Batal</button>
                <a href="#" id="hapuslokasi" class="btn btn-danger" style="background-color : #A12559;">Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        $("#tambahlokasi").click(function(){
            $("#modallokasi").modal("show");
            $("#loadforminputlokasi").load("<?php echo base_url(); ?>lokasi/inputlokasi");
        });
        $(".hapus").click(function(){
            var href = $(this).attr('data-href');
            $("#modalhapuslokasi").modal("show");
            $('#hapuslokasi').attr('href', href);
        });
        $('#tabellokasi').DataTable();
    });
</script>