<script type="text/javascript">

   let tableEkstra;

   // Show Table
   $(document).ready(function(){

      tableEkstra = $('#tableEkstra').DataTable({
         processing: true,
         serverSide: true,
         order: [],
         ajax: {
            'url': "<?= base_url('ekstra/ajax_list') ?>",
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
      tableEkstra.ajax.reload(null, false);
   }

	// Delete Menu
   function delete_ekstra(id){
      Swal.fire({
         title: 'Hapus Data Ekstrakurikuler ini ?',
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
               url: '<?= base_url('ekstra/delete'); ?>',
               data: {
                  id: id
               },
               success: function(data){
                  if(data.status){
                     tableEkstra.row( $(this).parents('tr') ).remove().draw();
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
