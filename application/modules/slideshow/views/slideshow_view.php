 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                 
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Slideshow
                            </h2>
                            <br>
                            <a href="javascript:void(0);" id="addmodal" class="btn btn-primary waves-effect">  <i class="material-icons">add_circle</i>  Tambah Data </a>
 
                        </div>
                        <div class="body">
                                
                            <div class="table-responsive">
							   <table class="table table-bordered table-striped table-hover js-basic-example" id="example" >
									<thead>
										<tr>
											<th style="width:5%;">No</th>
                                            <th style="width:5%;">Foto URL</th>  
											<th style="width:5%;">Caption A</th>  
											<th style="width:5%;">Caption B</th> 
											<th style="width:5%;">Seq No</th> 
											<th style="width:15%;">Opsi</th> 
										</tr>
									</thead> 
								</table> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         


        </div>
    </section>

   
	<!-- form tambah dan ubah data -->
	<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Form Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                              <form method="post" id="user_form" enctype="multipart/form-data">   
                                
                                    <input type="hidden" name="id" id="id"> 
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="caption_a" id="caption_a" class="form-control" placeholder="Caption A" />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="caption_b" id="caption_b" class="form-control" placeholder="Caption B" />
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="seq_no" id="seq_no"  class="form-control" placeholder="Seq No" />
                                        </div>
                                    </div>
									 
									 
									<div class="form-group">
                                        <div class="form-line">
											Upload Foto 
											<input type="file" name="user_image" id="user_image" class="form-control" onchange="PreviewGambar(this);" placeholder="Foto" />  
                                        </div>
										   <input type="hidden" name="foto_url" id="foto_url">
                                    </div>
                                    <br>
                                    <img onerror="this.onerror=null;this.src='<?php echo base_url('upload/image_prev.jpg'); ?>';" id="image1" src="<?php echo base_url('upload/image_prev.jpg');?>" style="height: 300px;" alt="..." class="img-rounded img-responsive">
                                  <br>
								  

								   <button type="button" onclick="Simpan_Data();" class="btn btn-success waves-effect"> <i class="material-icons">save</i> Simpan</button>

                                   <button type="button" name="cancel" id="cancel" class="btn btn-danger waves-effect" onclick="javascript:Bersihkan_Form();" data-dismiss="modal"> <i class="material-icons">clear</i> Batal</button>
							 </form>
					   </div>
                     
                    </div>
                </div>
    </div>
	 
 
   <script type="text/javascript">
	
     function PreviewGambar(input) {
        if (input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image1').attr('src', e.target.result);
				$("#foto_url").val($('#user_image').val().replace(/C:\\fakepath\\/i, ''));
            };
            reader.readAsDataURL(input.files[0]);
			
        }
     }
	 
	 function Show_Detail(id){ 
		$("#DetailModal").modal({backdrop: 'static', keyboard: false,show:true});
		$.ajax({
			 url:"<?php echo base_url(); ?>slideshow/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){  
			 
                 $("#blok_tower_dtl").html(result.blok_tower);
                 $("#tipe_dtl").html(result.tipe);
                 $("#no_slideshow_dtl").html(result.no_slideshow); 
				 $("#lantai_dtl").html(result.lantai); 
				 $("#harga_dtl").html(result.harga);
				 $("#luas_dtl").html(result.luas);
				 $("#foto_slideshow_dtl").attr("src","upload/"+result.foto);
				 
				 
				 
			 }
		 });
	 }
       
	 function Ubah_Data(id){
		$("#defaultModalLabel").html("Form Ubah Data");
		$("#defaultModal").modal('show');
 
		$.ajax({
			 url:"<?php echo base_url(); ?>slideshow/get_data_edit/"+id,
			 type:"GET",
			 dataType:"JSON", 
			 success:function(result){ 
                
				 $("#defaultModal").modal('show'); 
				 $("#id").val(result.id);
                 $("#caption_a").val(result.caption_a);
                 $("#caption_b").val(result.caption_b);
                 $("#seq_no").val(result.seq_no);
				 $("#foto_url").val(result.foto_url);
				 
                 $('#image1').attr('src',"file_manager_dir/"+result.foto_url);
                  
			 }
		 });
	 }
 
	 function Bersihkan_Form(){
        $(':input').val(''); 
        $("#image1").attr('src','<?php echo base_url('upload/image_prev.jpg'); ?>');
     }

	 function Hapus_Data(id){
		if(confirm('Anda yakin ingin menghapus data ini?'))
        {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo base_url('slideshow/hapus_data')?>/"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {
			   
               $('#example').DataTable().ajax.reload(); 
			   
			    $.notify("Data berhasil dihapus!", {
					animate: {
						enter: 'animated fadeInRight',
						exit: 'animated fadeOutRight'
					}  
				 },{
					type: 'success'
					});
				 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
   
    }
	}
    
 
    $('.thumbnail').on('click',function(){
        $('.modal-body').empty();
        var title = $(this).parent('a').attr("title");
        $('.modal-title').html(title);
        $($(this).parents('div').html()).appendTo('.modal-body');
        $('#Prev').modal({show:true});
    });
  
	function Simpan_Data(){
		//setting semua data dalam form dijadikan 1 variabel 
		 var formData = new FormData($('#user_form')[0]); 

         //validasi tipe file anda sebelum submit ke controller
         
         var foto_url = $('#foto_url').val();
		 var extension = $('#foto_url').val().split('.').pop().toLowerCase();  
 
 
         //validasi form sebelum submit ke controller
         var caption_a = $("#caption_a").val();
         var caption_b = $("#caption_b").val();
         var seq_no = $("#seq_no").val();
 
     
       
         if(caption_a == ''){
            alert("Caption A Tower Belum anda masukkan!");
            $("#caption_a").parents('.form-line').addClass('focused error');
            $("#caption_a").focus();
         }else if(caption_b == ''){
            alert("Caption B Belum anda masukkan!");
            $("#caption_b").parents('.form-line').addClass('focused error');
            $("#caption_b").focus();
         }else if(seq_no == ''){
            alert("Seq No Belum anda masukkan!");
            $("#seq_no").parents('.form-line').addClass('focused error');
            $("#seq_no").focus();
		  
         }else if(foto_url == ''){
			alert('Anda Belum Unggah Foto!');
		 }else if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1){
			alert("Format File yang diizinkan adalah JPEG,GIF,PNG,JPG !");  
            $('#user_image').val('');  
            return false;  
		 }else{

            //transaksi dibelakang layar
            $.ajax({
             url:"<?php echo base_url(); ?>slideshow/simpan_data",
             type:"POST",
             data:formData,
             contentType:false,  
             processData:false,   
             success:function(result){ 
                
                 $("#defaultModal").modal('hide');
                 $('#example').DataTable().ajax.reload(); 
                 $('#user_form')[0].reset();
                 $("#image1").attr("src","<?php echo base_url(); ?>/upload/image_prev.jpg");
                 $.notify("Data berhasil disimpan!", {
                    animate: {
                        enter: 'animated fadeInRight',
                        exit: 'animated fadeOutRight'
                 } 
                 } );
             }
            }); 

         }

	}
     

	 $('.datepicker').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD',
        clearButton: true,
        weekStart: 1,
        time: false
     });

	 
       $(document).ready(function() {
		   
		$("#addmodal").on("click",function(){
			$("#defaultModal").modal({backdrop: 'static', keyboard: false,show:true});
            $("#method").val('Add');
            $("#defaultModalLabel").html("Form Tambah Data");
		});
		
		$("#addmodalx").on("click",function(){
			$("#defaultModalx").modal({backdrop: 'static', keyboard: false,show:true});
            $("#defaultModalLabel").html("Form Tambah Datax");
		});
		
		$('#example').DataTable( {
			"ajax": "<?php echo base_url(); ?>slideshow/fetch_slideshow" 
		});
	 
	 
		 
	  });
  
		
		 
    </script>