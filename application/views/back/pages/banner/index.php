<div class="panel-header panel-header-sm">
</div>
<div class="content">
   <div class="row">
      <div class="col-md-12">
         <div class="card">
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
            <div class="card-header">
               <h4 class="card-title">Data Banner</h4>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <a href="<?= base_url('banner/add') ?>" class="btn btn-success btn-sm">
                     <i class="fas fa-plus"></i> Tambah
                  </a>

                  <button class="btn btn-secondary btn-sm" onclick="reload_table()">
                     <i class="fas fa-sync-alt"></i> Reload
                  </button>
                  <table class="table table-striped table-bordered" id="tableBanner" cellspacing="0" width="100%">
                     <thead class=" text-primary">
                        <th>#</th>
                        <th>Judul</th>
                        <th>Teks</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                     </thead>
                     <tbody>

                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>