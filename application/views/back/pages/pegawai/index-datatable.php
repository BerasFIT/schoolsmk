<script type="text/javascript">

   let tablePegawai;

   // Show Table
   $(document).ready(function(){

      tablePegawai = $('#tablePegawai').DataTable({
         processing: true,
         serverSide: true,
         order: [],
         ajax: {
            'url': "<?= base_url('pegawai/ajax_list') ?>",
            'type': "POST"
         },
         columnDefs: [
            { 
               'targets': [ 0, -1 ], 
               'orderable': false, 
            },
            { 'width': '10%', 'targets': -1 }
         ],
      });
   });

   // Reload Table
   function reload_table(){
      tablePegawai.ajax.reload(null, false);
   }

	// Delete Menu
   function delete_pegawai(id){
      Swal.fire({
         title: 'Hapus Data Pegawai ini ?',
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Hapus!'
         }).then((result) => {
         if (result.value) {
            $.ajax({
               type: 'post',
               dataType: 'json',
               url: '<?= base_url('pegawai/delete'); ?>',
               data: {
                  id: id
               },
               success: function(data){
                  if(data.status){
                     tablePegawai.row( $(this).parents('tr') ).remove().draw();
                     Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        showConfirmButton: true
                     });
                  }
               },
               error: function(){
                  Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'Terjadi Suatu Kesalahan!',
                     showConfirmButton: true
                  });
               }
            });
         }
      });
   }

</script>
