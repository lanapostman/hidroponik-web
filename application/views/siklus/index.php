<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					DATA SIKLUS
				</h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="material-icons">more_vert</i>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="#" onclick="add1()">TAMBAH SIKLUS</a></li>
							<li><a href="#" onclick="add()">TAMBAH SIKLUS PERUBAHAN</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<ul class="nav nav-tabs tab-nav-right" role="tablist">
					<li role="presentation" class="active"><a href="#siklus" data-toggle="tab">SIKLUS</a></li>
					<li role="presentation"><a href="#perubahan" data-toggle="tab">SIKLUS PERUBAHAN</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="siklus">
                    	<div class="body table-responsive">
                    		<table id="table_id" class="table table-bordered table-hover js-basic-example dataTable" style="width:100%">
                    			<thead>
                    				<tr>
                    					<th class="">Total Tebar (Ekor)</th>
                    					<th class="">Ikan</th>
                    					<th class="">Tanggal Tebar</th>
                    					<th class="">Tanggal Panen</th>
                    					<th class="text-center">Aksi</th>
                    				</tr>
                    			</thead>
                    			<tbody>
                    				
                    			</tbody>
                    		</table>
                    	</div>
                    </div>
					<div role="tabpanel" class="tab-pane fade" id="perubahan">
						<div class="body table-responsive">
                    		<table id="table_perubahan" class="table table-bordered table-hover js-basic-example dataTable" style="width:100%">
                    			<thead>
                    				<tr>
                    					<th class="text-center">Id Siklus</th>
                    					<th class="text-center">Total Tebar</th>
                    					<th class="text-center">Ikan Mati</th>
                    					<th class="text-center">Total</th>
                    					<th class="text-center">Tanggal Perubahan</th>
                    					<th></th>
                    				</tr>
                    			</thead>
                    			<tbody>
                    				
                    			</tbody>
                    		</table>
                    	</div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Detil Siklus -->
<div class="modal fade" id="modal_siklus" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modal-title"></h4>
			</div>
			<div class="modal-body">
				<div class="body table-responsive">
					<table class="table">
						<tbody id="detil_siklus">
							
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Detil Siklus -->

<!-- Modal Siklus -->
<div class="modal fade" id="modal_form" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="smallModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				<form id="form1" action="#">
					<input type="hidden" value="0" name="id_siklus">
							<label for="email_address">Ikan</label>
							<div class="form-group">
								<div class="form-line" style="width: 200px">
									<select name="ikan" id="ikan" class="form-control show-tick" data-live-search="true" required>
										<option value="">--Please Select--</option>
										<?php foreach($ikan as $row) :?>
											<option value="<?php echo $row['id_ikan'] ?>"><?php echo $row['nama_ikan'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<span class="pesan pesan-ikan">Data tidak boleh kosong!</span>
							</div>
							<label for="email_address">Total Tebar</label>
							<div class="form-group">
								<div class="form-line" style="width: 200px">
									<input type="number" name="tot_tebar" id="tot_tebar" class="form-control">
								</div>
								<span class="pesan pesan-tot_tebar">Data tidak boleh kosong!</span>
							</div>
							<label for="email_address">Tanggal Tebar</label>
							<div class="form-group">
								<div class="form-line" style="width: 200px">
									<input type="date" name="tgl_tebar" id="tgl_tebar" class="form-control">
								</div>
								<span class="pesan pesan-tgl_tebar">Data tidak boleh kosong!</span>
							</div>
							<label for="email_address">Umur Awal (Hari)</label>
							<div class="form-group">
								<div class="form-line" style="width: 200px">
									<input type="number" name="umur_awal" id="umur_awal" class="form-control">
								</div>
								<span class="pesan pesan-tgl_tebar">Data tidak boleh kosong!</span>
							</div>
						</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-link waves-effect" onclick="save1()">SAVE</button>
				<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Hapus Siklus -->
<div id="modal_delete_siklus" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>              
				<h4 class="modal-title">Apakah anda yakin?</h4>  
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Apakah anda yakin ingin menghapus Siklus ini?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Batal</button>
				<button type="button" id="button_delete_siklus" class="btn btn-danger waves-effect">Hapus</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Siklus Perubahan -->
<div class="modal fade" id="modal_perubahan" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="smallModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				<form id="form" action="#">
							<div class="row clearfix" style="margin-left: 0px">
								<div class="col-md-6">
									<label>Id Siklus</label>
									<div class="form-group">
										<div class="form-line" style="width: 230px">
											<select name="id_siklus" id="id_siklus" class="form-control show-tick" data-live-search="true" required>
												<option value="">--Please Select--</option>
												<?php foreach($id_siklus as $row) :?>
													<option value="<?php echo $row['id_siklus'] ?>"><?php echo $row['id_siklus'] ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<span class="pesan pesan-id_siklus">Data tidak boleh kosong!</span>
									</div>
								</div>

								<div class="col-md-6">
									<label>Tanggal Perubahan</label>
									<div class="form-group">
										<div class="form-line" style="width: 230px">
											<input type="date" name="tgl_perubahan" id="tgl_perubahan" class="form-control">
										</div>
										<span class="pesan pesan-tgl_perubahan">Data tidak boleh kosong!</span>
									</div>
								</div>
							</div>

							<div class="row clearfix" style="margin-left: 0px">
								<div class="col-md-4">
									<label>Total Tebar</label>
									<div class="form-group">
										<div class="form-line" style="width: ">
											<input type="text" name="total_tebar" id="total_tebar" class="form-control" disabled>
										</div>
										<span class="pesan pesan-total_tebar">Data tidak boleh kosong!</span>
									</div>
								</div>

								<div class="col-md-4" style="width: 50px; top: 30px; font-size: 24px; left: 30px">
									<p>-</p>
								</div>

								<div class="col-md-4" style="left: 45px">
									<label>Ikan Mati</label>
									<div class="form-group">
										<div class="form-line" style="width: ">
											<input type="number" name="ikan_mati" id="ikan_mati" class="form-control" required>
										</div>
										<span class="pesan pesan-ikan_mati">Data tidak boleh kosong!</span>
									</div>
								</div>
							</div>

							<div class="row clearfix" style="margin-left: 0px">
								<div class="col-md-4">
									<label>Total</label>
									<div class="form-group">
										<div class="form-line" style="width: 100px">
											<input type="number" name="total_ikan" id="total_ikan" class="form-control" readonly>
										</div>
										<span class="pesan pesan-total_ikan">Data tidak boleh kosong!</span>
									</div>
								</div>
							</div>
						</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="" class="btn btn-link waves-effect" onclick="save()">SAVE</button>
				<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Hapus Siklus Perubahan -->
<div id="modal_delete_perubahan" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>              
				<h4 class="modal-title">Apakah anda yakin?</h4>  
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Apakah anda yakin ingin menghapus Siklus Perubahan ini?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Batal</button>
				<button type="button" id="button_delete" class="btn btn-danger waves-effect">Hapus</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
         //datatables
        table = $('#table_id').DataTable({ 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo base_url('siklus/get_data')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "orderable": false,
                "targets": [4],
            },
            { width: '70px', targets: 4 },
            ],
 
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
         //datatables
        table1 = $('#table_perubahan').DataTable({ 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo base_url('siklus_perubahan/get_data')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "orderable": false,
                "targets": [5],
            },
            { width: '60px', targets: 4 },
            ],
 
        });
    });
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#id_siklus').on('change', function(){
			var id_siklus = $(this).val();
			if (id_siklus) {
				$.ajax({
					url: "<?php echo site_url('siklus/get_tebar/') ;?>"+id_siklus,
					type: 'GET',
					dataType: "JSON",
					success: function(data) {
						$('[name="total_tebar"]').val(data.total_tebar);
					},
					error: function(jqXHR, textStatus, errorThrown) {
                    	toastr.error('Tampil data gagal!', 'Gagal!', {timeOut: 5000})
					}
				});
			}
		});
	});

	function detil_siklus(id_siklus) {
        $.ajax({
            url: '<?php echo base_url('siklus/detil_siklus') ;?>/'+id_siklus,
            success: function(data) {
                $('#detil_siklus').html(data);

                $('#modal_siklus').modal('show');
                $('.modal-title').text('Detil Siklus');

            },
            error: function(jqXHR, textStatus, errorThrown) {
                toastr.error('Tampil data gagal!', 'Gagal!', {timeOut: 5000})
            }
        });
    }
</script>

<script type="text/javascript">
	$("#ikan_mati").change(function() {
		var total_tebar = ($('#total_tebar').val());
		var ikan_mati = ($('#ikan_mati').val());
		var total = total_tebar - ikan_mati;
		$('#total_ikan').val(total);
	});

	$(document).ready(function(){
		$("#id_siklus").keyup(function () {
			$(".pesan-id_siklus").hide();
		});
		$("#tgl_perubahan").keyup(function () {
			$(".pesan-tgl_perubahan").hide();
		});
		$("#total_tebar").keyup(function () {
			$(".pesan-total_tebar").hide();
		});
		$("#ikan_mati").keyup(function () {
			$(".pesan-ikan_mati").hide();
		});
		$("#total_ikan").keyup(function () {
			$(".pesan-total_ikan").hide();
		});
	});

	function add() {
        save_method = 'add';
        $('#form')[0].reset();
        $(".pesan-id_siklus").hide();
        $(".pesan-tgl_perubahan").hide();
        $(".pesan-total_tebar").hide();
        $(".pesan-ikan_mati").hide();
        $(".pesan-total_ikan").hide();
		$('#modal_perubahan').modal('show');
        $('.modal-title').text('Tambah Siklus Perubahan');
	}

    function save() {
    	if (save_method = 'add') {
			url = '<?php echo base_url('siklus_perubahan/create'); ?>';
			var idsiklus = $('#id_siklus').val().length;
            var tglperubahan = $('#tgl_perubahan').val().length;
            var totaltebar = $('#total_tebar').val().length;
            var ikanmati = $('#ikan_mati').val().length;
            var totalikan = $('#total_ikan').val().length;

            if (idsiklus == '' || tglperubahan == 0 || totaltebar == 0 || ikanmati == 0 || totalikan == 0) {
            	if (idsiklus == '') {
            		$(".pesan-id_siklus").css('display','block');
            	}
            	if (tglperubahan == 0) {
            		$(".pesan-tgl_perubahan").css('display','block');
            	}
            	if (totaltebar == 0) {
            		$(".pesan-total_tebar").css('display','block');
            	}
            	if (ikanmati == 0) {
            		$(".pesan-ikan_mati").css('display','block');
            	}
            	if (totalikan == 0) {
            		$(".pesan-total_ikan").css('display','block');
            	}
            	return false;
            }
		}
		
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data) {
                if ($.trim($('#ikan_mati').val()) != '') {
                    toastr.success('Tambah data berhasil!', 'Berhasil!', {timeOut: 5000})
                    document.getElementById('id_siklus').value = "";
                    document.getElementById('total_tebar').value = "";
                    document.getElementById('ikan_mati').value = "";
                    document.getElementById('total_ikan').value = "";
                    $('#modal_perubahan').modal('hide');
                    table1.ajax.reload();
                    table.ajax.reload();
                }
                else {
                    toastr.warning('Data tidak boleh kosong!', 'Warning', {timeOut: 5000})
                }
            },
            error: function(jqHXR, textStatus, errorThrown) {
                toastr.warning('Tambah data gagal!', 'Warning', {timeOut: 5000})
            }
        });
    }

    
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#tot_tebar").keyup(function () {
			$(".pesan-tot_tebar").hide();
		});
		$("#tgl_perubahan").keyup(function () {
			$(".pesan-tgl_perubahan").hide();
		});
		$("#umur_awal").keyup(function () {
			$(".pesan-umur_awal").hide();
		});
	});

	function add1() {
        save_method = 'add';
        $('#form1')[0].reset();
        $(".pesan-ikan").hide();
        $(".pesan-tot_tebar").hide();
        $(".pesan-tgl_tebar").hide();
        $(".pesan-umur_awal").hide();
		$('#modal_form').modal('show');
        $('.modal-title').text('Tambah Siklus');
	}

	function save1() {
		var url;
		if (save_method == 'add') {
			url = '<?php echo base_url('siklus/create_siklus'); ?>';
			var ikan = $('#ikan').val().length;
			var t_tebar = $('#tot_tebar').val().length;         
            var tgl_tebar = $('#tgl_tebar').val().length;
            var umur_awal = $('#umur_awal').val().length;

            if (t_tebar == 0 || tgl_tebar == 0 || umur_awal == 0 || ikan == 0) {
            	if (ikan == 0) {
            		$(".pesan-ikan").css('display','block');
            	}
            	if (t_tebar == 0) {
            		$(".pesan-tot_tebar").css('display','block');
            	}
            	if (t_tebar == 0) {
            		$(".pesan-tot_tebar").css('display','block');
            	}
            	if (tgl_tebar == 0) {
            		$(".pesan-tgl_tebar").css('display','block');
            	}
            	if (umur_awal == 0) {
            		$(".pesan-umur_awal").css('display','block');
            	}
            	return false;
            }
		}
		else {
			url = '<?php echo base_url('siklus/update_siklus'); ?>';
			var t_tebar = $('#tot_tebar').val().length;         
            var tgl_tebar = $('#tgl_tebar').val().length;
            var umur_awal = $('#umur_awal').val().length;

            if (t_tebar == 0 || tgl_tebar == 0 || umur_awal == 0) {
            	if (t_tebar == 0) {
            		$(".pesan-total_tebar").css('display','block');
            	}
            	if (tgl_tebar == 0) {
            		$(".pesan-tgl_tebar").css('display','block');
            	}
            	if (umur_awal == 0) {
            		$(".pesan-umur_awal").css('display','block');
            	}
            	return false;
            }
		}
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form1').serialize(),
            dataType: "JSON",
            success: function(data) {
                toastr.success('Tambah data berhasil!', 'Berhasil!', {timeOut: 5000})
                    document.getElementById('ikan').value = "";
                    document.getElementById('tot_tebar').value = "";
                    document.getElementById('tgl_tebar').value = "";
                    document.getElementById('umur_awal').value = "";
                    $('#modal_form').modal('hide');
                    table.ajax.reload();
            },
            error: function(jqHXR, textStatus, errorThrown) {
                toastr.warning('Tambah data gagal!', 'Warning', {timeOut: 5000})
            }
        });
    }
</script>

<script type="text/javascript">
	function modal_hapus_perubahan(id_sp) {
        $('#button_delete').attr('onclick', 'delete_siklus_perubahan('+id_sp+')');
        $('#modal_delete_perubahan').modal('show');
    }

    function delete_siklus_perubahan(id_sp) {
        $.ajax({
        	url: "<?php echo site_url('siklus_perubahan/delete/') ;?>/"+id_sp,
        	type: "POST",
        	dataType: "JSON",
        	success: function(data) {
        		toastr.success('Hapus data berhasil!', 'Success Alert', {timeOut: 5000})
        		table1.ajax.reload();
        		$('#modal_delete_perubahan').modal('hide');
        	},
        	error: function(jqXHR, textStatus, errorThrown) {
        		alert('Error Deleting Data');
        	}
        });
    }
</script>

<script type="text/javascript">
	function edit_siklus(id_siklus) {
        save_method = 'update';
        var form = $('#form')[0].reset();

        //load data dari AJAX
        $.ajax({
            url: "<?php echo site_url('siklus/ajax_edit/') ;?>/"+id_siklus,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                form;
                $('[name="id_siklus"]').val(data.id_siklus);
                $('[name="ikan"]').val(data.id_ikan);
                $('[name="tot_tebar"]').val(data.total_tebar);
                $('[name="tgl_tebar"]').val(data.tanggal_tebar);
                $('[name="umur_awal"]').val(data.umur_awal);
                $('#modal_form').modal('show');

                $('#modal-title').text('Ubah Siklus');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data From AJAX');
            }
        });
    }


	function modal_hapus_siklus(id_siklus) {
        $('#button_delete_siklus').attr('onclick', 'delete_siklus('+id_siklus+')');
        $('#modal_delete_siklus').modal('show');
    }

    function delete_siklus(id_siklus) {
        $.ajax({
        	url: "<?php echo site_url('siklus/delete/') ;?>/"+id_siklus,
        	type: "POST",
        	dataType: "JSON",
        	success: function(data) {
        		toastr.success('Hapus data berhasil!', 'Success Alert', {timeOut: 5000})
        		table.ajax.reload();
        		$('#modal_delete_siklus').modal('hide');
        	},
        	error: function(jqXHR, textStatus, errorThrown) {
        		alert('Error Deleting Data');
        	}
        });
    }
</script>