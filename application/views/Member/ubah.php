<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #94BDF2;">
              <div class="card-header">
                <h5 class="card-title"><?php echo  $judul ?></h5>
                <div class="card-tools">
                <a href="<?= base_url('member') ?>" class="btn btn-primary" style="background-color:#94BDF2; border-color: #94BDF2; border-color: #94BDF2;"><i class="fa fa-"></i> Kembali</a>
             </div>
             </div>
             <div class="card-body">

            <div class="row">
              <div class="col-md-12">
                <form method="post">
                  <div class="form-group">
                     <label for="">Id Member</label>
                      <input type="number" name="id member" id="id member" class="form-control" placeholder="id member" required="" value="<?= $member['id_member'] ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" value="<?= $member['nama'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="" value="<?= $member['alamat'] ?>">
                      </div>
                      </div>
                      <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="number" name="telepon" id="telepon" class="form-control" placeholder="Telepon" required="" valule="<?= $member['tlp'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                          <option <?= $member['jenis_kelamin'] == 'L'? 'selected' : '' ?> value="L">Laki-Laki</option>
                          <option <?= $member['jenis_kelamin'] == 'p'? 'selected' : '' ?> value="P">Perempuan</option>
                        </select>
                      </div>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="background-color:#94BDF2; border-color: #94BDF2;">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>         
      </div>
    </div>
  </div>
</div>
</div>
