<form action="<?php echo base_url(); ?>penjualan/simpanpenjualan" class="formpenjualan" method="POST">
    <div class="mb-3 form-group">
        <input type="text" class="form-control" name="idpenjualan" placeholder="ID Penjualan">
    </div>
    <div class="mb-3 form-group">
        <label for="">Tanggal</label>
        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
    </div>
    <div class="mb-3 form-group">
        <label for="">Waktu Terjual</label>
        <input type="time" class="form-control" name="waktu" placeholder="Waktu Terjual">
    </div>
    <div class="mb-3 form-group">
        <input type="text" class="form-control" name="idbarang" placeholder="ID Barang">
    </div>
    <div class="mb-3 form-group">
        <input type="text" class="form-control" name="idlokasi" placeholder="ID Lokasi">
    </div>
    <div class="mb-3 form-group">
        <input type="text" class="form-control" name="total" placeholder="Total Penjualan">
    </div>
    <div class="mb-3 form-group">
        <input type="hidden" class="form-control" name="id_user" value="<?php echo $this->session->userdata('id_user')?>">
        <input type="text" readonly class="form-control" name="username" value="<?php echo $this->session->userdata('id_user')." - ".$this->session->userdata('nama_lengkap')?>">
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
        $('.formpenjualan').bootstrapValidator({
            fields: {
                tanggal: {
                    message: 'Tanggal harus diisi!',
                    validators: {
                        notEmpty: {
                            message: 'Tanggal harus diisi!'
                        }
                    }
                },
            }
        });
        $('.formpenjualan').bootstrapValidator({
            fields: {
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
        $('.formpenjualan').bootstrapValidator({
            fields: {
                total: {
                    message: 'Total penjualan harus diisi!',
                    validators: {
                        notEmpty: {
                            message: 'Total penjualan harus diisi!'
                        }
                    }
                },
            }
        });
    });
</script>