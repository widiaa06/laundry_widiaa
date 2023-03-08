<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #94BDF2;">
              <div class="card-header">
                <h5 class="card-title"><?php echo  $judul ?></h5>
                <div class="card-tools">
                <a href="<?= base_url('member') ?>" class="btn btn-primary" style="background-color:#94BDF2; border-color: #94BDF2;"><i class="fa fa-"></i> Kembali</a>
             </div>
             </div>
             <div class="card-body">

            <div class="row">
              <div class="col-md-12">
                <form method="post">
                  <div class="form-group">
                     <label for="">Id Member</label>
                      <input type="number" name="id_member" id="id_member" class="form-control" placeholder="id_member" required="" value="<?= id('tb_member','id_member') ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" >
                      </div>
                      <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="">
                      </div>
                      </div>
                      <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="number" name="tlp" id="telepon" class="form-control" placeholder="Telepon" required="">
                      </div>
                      <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                          <option value="L">Laki-Laki</option>
                          <option value="P">Perempuan</option>
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
