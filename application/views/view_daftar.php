<div class="content mt-3">
    <div class="animated">
        <div class="card">
            <div class="card-header">
                <i class="mr-2 fa fa-align-justify"></i>
                <strong class="card-title" v-if="headerText">Tambah Alat</strong>
            </div>
            <div class="card-body">

                <!-- Button trigger modal -->
              <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#staticModal">
                  Tambah Alat
              </button>

            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Daftar Seluruh Alat</strong>
                    </div>
                    <div class="card-body">
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama Barang</th>
                    <th>Kode Lab</th>
                    <th>Tahun Diperoleh</th>
                    <th>Kondisi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($daftaralat as $d){ ?>
                  <tr>
                    <td><?php echo $d->nama_barang ?></td>
                    <td><?php echo $d->kode_lab ?></td>
                    <td><?php echo $d->tahun_diperoleh ?></td>
                    <td><?php echo $d->kondisi ?></td>
                    <td>
                    <?php echo anchor('dashboard/detail/'.$d->id,'Detail'); ?>
                    <?php echo anchor('dashboard/hapus/'.$d->id,'Hapus'); ?>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
                    </div>
                </div>
            </div> <!--row-->
            <div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticModalLabel">Tambah Alat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <div class="col-lg-12">
                            <div class="card">
                              <div class="card-header">
                                <strong>Tambah</strong> Form
                              </div>
                              <div class="card-body card-block">
                                <form action="<?php echo base_url().'dashboard/tambah_aksi'; ?>" method="post" class="form-horizontal">
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="nama_barang" class=" form-control-label">Nama Barang</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="merk" class=" form-control-label">Merk (Produsen)</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="merk" name="merk" placeholder="Masukkan Merk..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="asal" class=" form-control-label">Asal Negara (Produsen)</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="asal" name="asal" placeholder="Masukkan Asal Negara..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="tipe" class=" form-control-label">Tipe</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="tipe" name="tipe" placeholder="Masukkan Tipe..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="nomor_seri" class=" form-control-label">Kode/Nomor Seri</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="nomor_seri" name="nomor_seri" placeholder="Masukkan Kode/Nomor Seri..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="kode_lab" class=" form-control-label">Kode Lab</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="kode_lab" name="kode_lab" placeholder="Masukkan Kode Lab..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="kuantitas" class=" form-control-label">Kuantitas</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="kuantitas" name="kuantitas" placeholder="Masukkan Kuantitas..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="tahun_diperoleh" class=" form-control-label">Tahun Diperoleh</label></div>
                                    <div class="col-12 col-md-9"><input type="number" id="tahun_diperoleh" name="tahun_diperoleh" placeholder="Masukkan Tahun Diperoleh..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="sumber" class=" form-control-label">Sumber</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="sumber" name="sumber" placeholder="Masukkan Sumber..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="lokasi" class=" form-control-label">Lokasi</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="lokasi" name="lokasi" placeholder="Masukkan Lokasi..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="tanggal_dicek" class=" form-control-label">Tanggal Dicek</label></div>
                                    <div class="col-12 col-md-9"><input type="date" id="tanggal_dicek" name="tanggal_dicek" placeholder="Masukkan Tanggal Dicek..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="petugas_pengecek" class=" form-control-label">Petugas Pengecek</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="petugas_pengecek" name="petugas_pengecek" placeholder="Masukkan Petugas Pengecek..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="kondisi" class=" form-control-label">Kondisi</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="kondisi" name="kondisi" placeholder="Masukkan Kondisi Barang..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="keterangan" class=" form-control-label">Keterangan</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="barcode" class=" form-control-label">Barcode</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="barcode" name="barcode" placeholder="Masukkan Barcode..." class="form-control"></div>
                                  </div>
                                  <div class="row form-group">
                                    <div class="col col-md-3"><label for="spesifikasi" class=" form-control-label">Spesifikasi</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="spesifikasi" name="spesifikasi" placeholder="Masukkan Spesifikasi..." class="form-control"></div>
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-sm float-right">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- .animated -->
</div><!-- .content -->
