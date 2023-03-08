<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #94BDF2;">
              <div class="card-header">
                <h5 class="card-title"><?=  $judul ?></h5>
              </div>
            <div class="card-body">
             <div class="row">
               <div class="col-md-12">
                <form action="<?= base_url('laporan/pdf') ?>" method="get">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                         <label for="dari">Dari</label>
                         <input type="date" name="dari" id="dari" class="form-control">
                        </div>
                        <div class="form-group">
                         <label for="sampai">Sampai</label>
                         <input type="date" name="sampai" id="sampai" class="form-control">
                        </div>
                       <div class="form-group">
                         <label for="id_paket">Paket</label>
                         <select name="id_paket" id="id_paket" class="form-control">
                           <option value="">Semua Paket</option>
                           <?php foreach ($paket as $row) :?>
                           <option value="<?= $row['id_paket'] ?>"><?= $row['nama_paket'] ?></option>
                           <?php endforeach ?>
                         </select>
                       </div>
                       <div class="form-group">
                         <label for="id_outlet">Outlet</label>
                         <select name="id_outlet" id="id_outlet" class="form-control">
                           <option value="">Semua Outlet</option>
                           <?php foreach ($outlet as $row) :?>
                           <option value="<?= $row['id_outlet'] ?>"><?= $row['nama'] ?></option>
                           <?php endforeach ?>
                         </select>
                       </div>
                       <div class="form-group">
                         <label for="id_outlet">Status Pembayaran</label>
                         <select name="dibayar" id="dibayar" class="form-control">
                           <option value="dibayar">Dibayar</option>
                           <option value="belum dibayar">Belum dibayar</option>
                         </select>
                       </div>
                      <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-block btn-primary" style="background-color:#94BDF2; border-color: #94BDF2;">Cetak</button>
                      </div>
                    </div>
                  </div>
                </form>
              <hr>
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Nama Paket</th>
                    <th>Outlet</th>
                    <th>Status Pembayaran</th>
                    <th>Harga</th>
                    <th>Terjual</th>
                    <th>Pendapatan</th>
                  </tr>
                </thead>
                  <tbody>
                  <?php $total = 0; ?>
                    <?php $index=1; foreach ($laporan as $row): ?>
                      <tr>
                        <td><?= $index++ ?></td>
                        <td><?= $row['tgl'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['nama_paket'] ?></td>
                        <td><?= $row['nama_outlet'] ?></td>
                        <td><?= $row['dibayar'] ?></td>
                        <td><?= "Rp." . number_format($row['harga']) ?></td>
                        <td><?= $row['terjual'] ?></td>
                        <td><?= "Rp." . number_format($row['pendapatan']) ?></td>
                      </tr>
                      <?php $total += $row['pendapatan'] ?>
                    <?php endforeach; ?>
                    <tr>
                      <td colspan="8">Total</td>
                      <td>
                        <?= "Rp. " . number_format($total) ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>