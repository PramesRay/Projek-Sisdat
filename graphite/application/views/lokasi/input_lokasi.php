<form action="<?php echo base_url(); ?>lokasi/simpanlokasi" class="formlokasi" method="POST">
    <div class="mb-3 form-group">
        <input type="text" class="form-control" name="idlokasi" placeholder="ID Lokasi">
    </div>
    <div class="mb-3 form-group">
        <input type="text" class="form-control" name="namalokasi" placeholder="Nama Lokasi">
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
        $('.formlokasi').bootstrapValidator({
            fields: {
                idlokasi: {
                    message: 'ID lokasi harus diisi!',
                    validators: {
                        notEmpty: {
                            message: 'ID lokasi harus diisi!'
                        }
                    }
                },
                jenislokasi: {
                    message: 'Nama lokasi harus diisi!',
                    validators: {
                        notEmpty: {
                            message: 'Nama lokasi harus diisi!'
                        }
                    }
                },
            }
        });
    });
</script>