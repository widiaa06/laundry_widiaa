<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title"><?php echo  $judul ?></h5>
                <div class="card-tools">
                <a href="<?= base_url('outlet') ?>" class="btn btn-primary"><i class="fa fa-"></i> Kembali</a>
             </div>
             </div>
             <div class="card-body">

            <div class="row">
              <div class="col-md-12">
                <form method="post">
                  <div class="form-group">
                     <label for="">Id outlet</label>
                      <input type="number" name="id outlet" id="id outlet" class="form-control" placeholder="id outlet" required="" value="<?= $outlet['id_outlet'] ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">Nama outlet</label>
                        <input type="text" name="nama" id="nama outlet" class="form-control" placeholder="nama outlet" required="" value="<?= $outlet['nama'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="" value="<?= $outlet['alamat'] ?>">
                      </div>
                      </div>
                      <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="number" name="telepon" id="telepon" class="form-control" placeholder="Telepon" required="" value="<?= $outlet['tlp'] ?>">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
