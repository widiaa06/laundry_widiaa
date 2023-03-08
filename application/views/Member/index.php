<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #94BDF2;">
              <div class="card-header">
                <h5 class="card-title"><?=  $judul ?></h5>
                <div class="card-tools">
                <a href="<?php echo base_url('member/tambah') ?>" class="btn btn-primary" style="background-color:#94BDF2; border-color: #94BDF2;"><i class="fa fa-plus"></i> Tambah Registrasi</a>
             </div>
             </div>
         <div class="card-body">

            <div class="row">
              <div class="col-md-12">

              <?php if ($message = $this->session->flashdata('message')): ?>
              <div class="alert alert-success">
              <strong>Berhasil</strong>
              <p><?php echo $message ?></p>
              </div>
              <?php endif ?>

                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                       <th>Nama</th>
                       <th>Alamat</th>
                       <th>Jenis Kelamin</th>
                       <th>Telepon</th>
                       <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $index = 1; foreach ($member
                     as $row): ?>
                      <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['alamat']?></td>
                        <td><?= $row['jenis_kelamin']?></td>
                        <td><?= $row['tlp'] ?></td>
                      <td>
                    <a class="btn btn-warning" href="<?php echo base_url('member/ubah/') . $row['id_member'] ?>"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')" href="<?= base_url('member/hapus/') . $row['id_member'] ?>"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php endforeach  ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
