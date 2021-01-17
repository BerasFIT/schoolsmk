<div class="container">
   <div class="col-xl-12 col-lg-12">
      <div class="card shadow mb-4">
         <!-- Card Header - Dropdown -->
         <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h4 class="m-0 font-weight-bold text-success">Data Fasilitas</h4>
            <?php if ($this->session->flashdata('success')) : ?>
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('success') ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
            <?php elseif ($this->session->flashdata('error')) : ?>
               <div class="alert alert-error alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('error') ?>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
            <?php endif ?>
         </div>
         <!-- Card Body -->
         <div class="card-body">
            <div class="row mt-2">
               <div class="col">
                  <a href="<?= base_url('fasilitas/add') ?>" class="btn btn-success btn-sm">
                     <i class="fas fa-plus"></i> Tambah
                  </a>

                  <button class="btn btn-outline-secondary btn-sm" onclick="reload_table()">
                     <i class="fas fa-sync-alt"></i> Reload
                  </button>
               </div>
            </div>
            <div class="table-responsive mt-3">
               <table id="tableFasilitas" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Nama Fasilitas</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>

                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>