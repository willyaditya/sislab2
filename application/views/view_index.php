        <div class="content mt-3">

          <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            Jumlah Seluruh Alat
                        </h4>

                        <div class="status-widget" height="70">
                          <div class="stat-widget-one">
                              <div class="stat-icon dib"><i class="ti-layout-grid2 text-white border-white"></i></div>
                              <div class="stat-content dib">
                                <div class="stat-digit count text-white">102</div>
                              </div>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            Jumlah Alat Dipinjam
                        </h4>

                        <div class="status-widget" height="70">
                          <div class="stat-widget-one">
                              <div class="stat-icon dib"><i class="ti-package text-white border-white"></i></div>
                              <div class="stat-content dib">
                                <div class="stat-digit count text-white">23</div>
                              </div>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <h4 class="mb-0">
                            Permintaan Peminjaman Baru
                        </h4>

                        <div class="status-widget" height="70">
                          <div class="stat-widget-one">
                              <div class="stat-icon dib"><i class="ti-write text-white border-white"></i></div>
                              <div class="stat-content dib">
                                <div class="stat-digit count text-white">3</div>
                              </div>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Alat Baru Ditambahkan</strong>
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
                    </div>


                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->




        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
