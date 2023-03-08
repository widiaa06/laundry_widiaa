<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title"><?php echo  $judul ?></h5>
                <div class="card-tools">
                <a href="<?= base_url('user') ?>" class="btn btn-primary" style="background-color:#94BDF2; border-color: #94BDF2;"><i class="fa fa-arrow-left"></i> Kembali</a>
             </div>
             </div>
             <div class="card-body">

            <div class="row">
              <div class="col-md-12">
                <form method="post">
                  <div class="form-group">
                     <label for="">Id user</label>
                      <input type="number" name="id user" id="id user" class="form-control" placeholder="id user" required="" value="<?php echo id('tb_user', 'id_user') ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Id Outlet</label>
                    <select name="id_outlet" id="id_outlet" class="form-control" required="">
                      <option value="">Pilih Outlet</option>
                      <?php foreach ($outlet as $row): ?>
                        <option value=" <?= $row['id_outlet'] ?>"><?= $row['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Nama user</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="nama user" >
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="password" required="">
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="password" required="">
                  </div>
                  <div class="form-group">
                    <label for="">Role</label>
                    <select name="role" id="role" class="form-control">
                      <option value="admin">admin</option>
                      <option value="kasir">kasir</option>
                      <option value="owner">owner</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="background-color:#94BDF2; border-color: #94BDF2;">Submit</button>
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
