<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #94BDF2;">
              <div class="card-header">
                <h5 class="card-title"><?php echo  $judul ?></h5>
                <div class="card-tools">
                <a href="<?= base_url('transaksi') ?>" class="btn btn-block" style="background-color: #94BDF2; color: white"><i class="fa fa-arrow-left"></i>Kembali</a>
             </div>
             </div>
             <div class="card-body">
               <form method="post">
               <?= validation_errors() ?>
                 <div class="row">
                   <div class=" col-md-6">
                     <div class="form-group">
                        <label for="">Kd_invoice</label>
                        <input type="text" name="kd_invoice" id="kd_invoice" class="form-control" value="<?= $transaksi['kode_invoice'] ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="datetime-local" name="tgl" id="tgl" class="form-control" value="<?= date('Y-m-d\TH:i:s', strtotime($transaksi['tgl'])) ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">Batas Waktu</label>
                        <input type="datetime-local" name="batas_waktu" id="batas_waktu" class="form-control" value="<?= date('Y-m-d\TH:i:s', strtotime($transaksi['batas_waktu'])) ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">Tanggal Bayar <span class="small text-primary">(Diisi setelah dibayar.)</span></label>
                        <input type="datetime-local" name="tgl_bayar" id="tgl_bayar" class="form-control" value="<?= date('Y-m-d\TH:i:s', strtotime($transaksi['tgl_bayar'])) ?>">
                      </div>
                    </div>
                    <div class=" col-md-6">
                      <div class="form-group">
                        <label for="">Pelanggan</label>
                       <select id="member" class="form-control member"  disabled>
                         <?php foreach ($member as $row): ?>
                           <option <?= $row['id_member'] == $transaksi['id_member'] ? 'selected' : '' ?>  value="<?php echo $row['id_member'] ?>"><?php echo $row['nama'] ?></option>
                         <?php endforeach ?>
                       </select>
                       <input type="hidden" name="member" value="<?php echo $row['id_member'] ?>">
                    </div>
                      <div class="form-group">
                        <label for="">Status</label>
                          <select name="status" id="status" class="form-control">
                             <option <?= $transaksi['status'] == 'baru' ? 'selected' : '' ?> value="baru">baru</option>
                             <option <?= $transaksi['status'] == 'proses' ? 'selected' : '' ?> value="proses">proses</option>
                             <option <?= $transaksi['status'] == 'selesai' ? 'selected' : '' ?> value="selesai">selesai</option>
                             <option <?= $transaksi['status'] == 'diambil' ? 'selected' : '' ?> value="diambil">diambil</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="">Status Dibayar</label>
                          <select name="dibayar" id="dibayar" class="form-control">
                             <option <?= $transaksi['id_member'] == 'dibayar' ? 'selected' : '' ?> value="dibayar">dibayar</option>
                             <option <?= $transaksi['id_member'] == 'belum dibayar' ? 'selected' : '' ?> value="belum dibayar">belum dibayar</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                     <button type="submit" class="btn btn-block" style="background-color: #94BDF2; color: white;">SUBMIT</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>                     
      </div>
    </div>
  </div>
</div>
</div>
<script>
   const base_url = '<?= base_url() ?>'
</script>
