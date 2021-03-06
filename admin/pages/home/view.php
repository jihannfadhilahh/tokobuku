



<div class="row" style="margin-bottom: 360px">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jenis Buku</div>
                      <?php
                      foreach($db->jumlah_kategori() as $value) : ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $value ?></div>
                      
                    <?php endforeach?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Buku</div>
                      <?php foreach($db->jumlah_produk() as $value): ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $value ?></div>
                    <?php endforeach ?>
                    </div>
                       <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Buku Terjual</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                              <?php foreach($db->jumlah_transaksi() as $value): ?>
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $value ?></div>
                        <?php endforeach ?>
                        </div>
                      
                      </div>
                    </div>
               <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Member</div>
                      <?php foreach($db->jumlah_member() as $value): ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $value ?></div>
                    <?php endforeach ?>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>