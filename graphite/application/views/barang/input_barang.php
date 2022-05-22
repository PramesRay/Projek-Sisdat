<form action="<?php echo base_url(); ?>barang/simpanbarang" class="formbarang" method="POST">
    <div class="mb-3 form-group">
        <input type="text" class="form-control" name="idbarang" placeholder="ID Barang">
    </div>
    <div class="mb-3 form-group">
        <input type="text" class="form-control" name="jenisbarang" placeholder="Jenis Barang">
    </div>
    <div class="mb-3 text-right">
        <button type="submit" class="btn btn-azure" style="background-color: #5F1854">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
            Tambahkan
        </button>
    </div>
</form>

<script>
    $(function(){
        $('.formbarang').bootstrapValidator({
            fields: {
                idbarang: {
                    message: 'ID barang/jasa harus diisi!',
                    validators: {
                        notEmpty: {
                            message: 'ID barang/jasa harus diisi!'
                        }
                    }
                },
                jenisbarang: {
                    message: 'Jenis barang harus diisi!',
                    validators: {
                        notEmpty: {
                            message: 'Jenis barang harus diisi!'
                        }
                    }
                },
            }
        });
    });
</script>