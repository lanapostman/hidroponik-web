<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					PREDIKSI HASIL PANEN
				</h2>
				<ul class="header-dropdown m-r--5">
					<li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="material-icons">more_vert</i>
						</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="#" onclick="add()">TAMBAH PREDIKSI KG</a></li>
							<!--<li><a href="#" onclick="add1()">TAMBAH PREDIKSI EKOR</a></li>-->
						</ul>
					</li>
				</ul>
			</div>
			<div class="body">
				<ul class="nav nav-tabs tab-nav-right" role="tablist">
					<li role="presentation" class="active"><a href="#prediksi" data-toggle="tab">DATA PREDIKSI PER KG</a></li>
					<!--<li role="presentation"><a href="#prediksi_ekor" data-toggle="tab">DATA PREDIKSI PER EKOR</a></li>-->
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="prediksi">
                    	<div class="body table-responsive">
                    		<table id="table_id" class="table table-bordered table-hover js-basic-example dataTable" style="width:100%">
                    			<thead>
                    				<tr>
                    					<th class="text-center">Id Siklus</th>
                    					<th class="text-center">Tanggal</th>
                    					<th class="text-center">Total (Kg)</th>
                    					<th class="text-center">Harga (Kg)</th>
                    					<th class="text-center">Total Panen</th>
                    					<th></th>
                    				</tr>
                    			</thead>
                    			<tbody>
                    				
                    			</tbody>
                    		</table>
                    	</div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="prediksi_ekor">
                    	<div class="body table-responsive">
                    		<table id="table_prediksi_ekor" class="table table-bordered table-hover js-basic-example dataTable" style="width:100%">
                    			<thead>
                    				<tr>
                    					<th class="text-center">Id Siklus</th>
                    					<th class="text-center">Tanggal</th>
                    					<th class="text-center">Total (Ekor)</th>
                    					<th class="text-center">Harga (Ekor)</th>
                    					<th class="text-center">Total Panen</th>
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

<!-- Modal Modal Prediksi Kg -->
<div class="modal fade" id="modal_prediksi_kg" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="smallModalLabel">Modal title</h4>
			</div>
			<div class="modal-body">
				<form id="form1" action="#">
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
							<label>Tanggal</label>
							<div class="form-group">
								<div class="form-line" style="width: 230px">
									<input type="date" name="tanggal" id="tanggal" class="form-control">
								</div>
                                <span class="pesan pesan-tanggal">Data tidak boleh kosong!</span>
							</div>
						</div>
					</div>
					<div class="row clearfix" style="margin-left: 0px">
						<div class="col-md-3">
							<label id="label_ikan">Total (Kg)</label>
							<div class="form-group">
								<div class="form-line" style="width: 100px">
									<input type="number" name="total_kg" id="total_kg" class="form-control" >
								</div>
                                <span class="pesan pesan-total_kg">Data tidak boleh kosong!</span>
							</div>
						</div>
						<div class="col-md-3" style="width: 50px; top: 30px; font-size: 24px; right: 10px">
							<p>x</p>
						</div>
						<div class="col-md-3" style="right: 20px">
							<label id="label_harga">Harga (Kg)</label>
							<div class="form-group">
								<div class="form-line" style="width: 100px">
									<input type="number" name="harga_kg" id="harga_kg" class="form-control" placeholder="">
								</div>
                                <span class="pesan pesan-harga_kg">Data tidak boleh kosong!</span>
							</div>
						</div>
						<div class="col-md-3">
							<label>Total</label>
							<div class="form-group">
								<div class="form-line" style="width: 100px">
									<input type="number" name="total" id="total" class="form-control" placeholder="" readonly>
								</div>
                                <span class="pesan pesan-total">Data tidak boleh kosong!</span>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="button_save" onclick="save()" class="btn btn-link waves-effect">SAVE</button>
				<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Siklus Perubahan -->
<div class="modal fade" id="modal_prediksi_ekor" tabindex="-1" role="dialog">
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
                                    <select name="id_siklus" id="id_siklus1" class="form-control show-tick" data-live-search="true" required>
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
                            <label>Tanggal</label>
                            <div class="form-group">
                                <div class="form-line" style="width: 230px">
                                    <input type="date" name="tanggal" id="tanggal1" class="form-control">
                                </div>
                                <span class="pesan pesan-tanggal">Data tidak boleh kosong!</span>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix" style="margin-left: 0px">
                        <div class="col-md-3">
                            <label id="label_ikan">Total (Ekor)</label>
                            <div class="form-group">
                                <div class="form-line" style="width: 100px">
                                    <input type="number" name="total_kg" id="total_kg1" class="form-control" >
                                </div>
                                <span class="pesan pesan-total_kg">Data tidak boleh kosong!</span>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 50px; top: 30px; font-size: 24px; right: 10px">
                            <p>x</p>
                        </div>
                        <div class="col-md-3" style="right: 20px">
                            <label id="label_harga">Harga (Ekor)</label>
                            <div class="form-group">
                                <div class="form-line" style="width: 100px">
                                    <input type="number" name="harga_kg" id="harga_kg1" class="form-control" placeholder="">
                                </div>
                                <span class="pesan pesan-harga_kg">Data tidak boleh kosong!</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Total</label>
                            <div class="form-group">
                                <div class="form-line" style="width: 100px">
                                    <input type="number" name="total" id="total1" class="form-control" placeholder="" readonly>
                                </div>
                                <span class="pesan pesan-total">Data tidak boleh kosong!</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="button_save" onclick="save1()" class="btn btn-link waves-effect">SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Siklus Perubahan -->
<div id="modal_delete" class="modal fade">
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
				<p>Apakah anda yakin ingin menghapus Prediksi ini?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Batal</button>
				<button type="button" id="button_delete" class="btn btn-danger waves-effect">Hapus</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function rupiah($angka) {
		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
		return $hasil_rupiah;
	}
</script>

<script type="text/javascript">
    $(document).ready(function(){
         //datatables
        table = $('#table_id').DataTable({ 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo base_url('prediksi/get_data')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "orderable": false,
                "targets": [5],
            },
            { width: '70px', targets: 1 },
            ],
 
        });
    });

    $(document).ready(function(){
         //datatables
        table1 = $('#table_prediksi_ekor').DataTable({ 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo base_url('prediksi_ekor/get_data')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "orderable": false,
                "targets": [5],
            },
            { width: '70px', targets: 1 },
            ],
 
        });
    });
</script>

<script type="text/javascript">

	$('[name="harga_kg"]').change(function() {
		var total_kg = ($('[name="total_kg"]').val());
		var harga_kg = ($('[name="harga_kg"]').val());
		var total = total_kg * harga_kg;
		$('[name="total"]').val(total);
	});

    $('[name="total_kg"]').change(function() {
        var total_kg = ($('[name="total_kg"]').val());
        var harga_kg = ($('[name="harga_kg"]').val());
        var total = total_kg * harga_kg;
        $('[name="total"]').val(total);
    });

    $('#harga_kg1').change(function() {
        var total_kg = ($('#total_kg1').val());
        var harga_kg = ($('#harga_kg1').val());
        var total = total_kg * harga_kg;
        $('#total1').val(total);
    });

    $('#total1').change(function() {
        var total_kg = ($('#total_kg1').val());
        var harga_kg = ($('#harga_kg1').val());
        var total = total_kg * harga_kg;
        $('#total1').val(total);
    });

	var save_method;
	function add() {
        save_method = 'add';
        $('#form1')[0].reset();
        $(".pesan-id_siklus").hide();
        $(".pesan-total_kg").hide();
        $(".pesan-harga_kg").hide();
        $(".pesan-total").hide();
		$('#modal_prediksi_kg').modal('show');
		$('#label_ikan').text('Total (Kg)');
		$('#label_harga').text('Harga (Kg)');
        $('.modal-title').text('Tambah Prediksi Per Kg');
	}

   function save() {
        if (save_method = 'add') {
            url = '<?php echo base_url('prediksi/create'); ?>';
            var id_siklus = $('#id_siklus').val().length;         
            var total_kg = $('#total_kg').val().length;
            var harga_kg = $('#harga_kg').val().length;
            var total = $('#total').val().length;

            if (id_siklus == 0 || total_kg == 0 || harga_kg == 0 || total == 0) {
                if (id_siklus == 0) {
                    $(".pesan-id_siklus").css('display','block');
                }
                if (total_kg == 0) {
                    $(".pesan-total_kg").css('display','block');
                }
                if (harga_kg == 0) {
                    $(".pesan-harga_kg").css('display','block');
                }
                if (total == 0) {
                    $(".pesan-total").css('display','block');
                }
                return false;
            }
        }

        $.ajax({
            url: url,
            type: "GET",
            data: $('#form1').serialize(),
            dataType: "JSON",
            success: function(data) {
                toastr.success('Tambah data berhasil!', 'Berhasil!', {timeOut: 5000})
                    document.getElementById('id_siklus').value = "";
                    document.getElementById('total_kg').value = "";
                    document.getElementById('harga_kg').value = "";
                    document.getElementById('total').value = "";
                    table.ajax.reload();
                    $('#modal_prediksi_kg').modal('hide');
            },
            error: function(jqHXR, textStatus, errorThrown) {
                toastr.warning('Tambah data gagal!', 'Warning', {timeOut: 5000})
            }
        });
    }

    function add1() {
        save_method = 'add';
        $('#form')[0].reset();
        $(".pesan-id_siklus").hide();
        $(".pesan-total_kg").hide();
        $(".pesan-harga_kg").hide();
        $(".pesan-total").hide();
		$('#modal_prediksi_ekor').modal('show');
        $('.modal-title').text('Tambah Prediksi Per Ekor');

        $(document).ready(function(){
        $('#id_siklus1').on('change', function(){
            var id_siklus = $(this).val();
            if (id_siklus) {
                $.ajax({
                    url: "<?php echo site_url('siklus/get_tebar/') ;?>"+id_siklus,
                    type: 'GET',
                    dataType: "JSON",
                    success: function(data) {
                        $('#total_kg1').val(data.total_tebar);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        toastr.error('Tampil data gagal!', 'Gagal!', {timeOut: 5000})
                    }
                });
            }
        });
    });
	}

    

   function save1() {
        if (save_method = 'add') {
            url = '<?php echo base_url('prediksi/create_ekor'); ?>';
            var id_siklus = $('#id_siklus1').val().length;         
            var total_kg = $('#total_kg1').val().length;
            var harga_kg = $('#harga_kg1').val().length;
            var total = $('#total1').val().length;

            if (id_siklus == 0 || total_kg == 0 || harga_kg == 0 || total == 0) {
                if (id_siklus == 0) {
                    $(".pesan-id_siklus").css('display','block');
                }
                if (total_kg == 0) {
                    $(".pesan-total_kg").css('display','block');
                }
                if (harga_kg == 0) {
                    $(".pesan-harga_kg").css('display','block');
                }
                if (total == 0) {
                    $(".pesan-total").css('display','block');
                }
                return false;
            }
        }

        $.ajax({
            url: url,
            type: "GET",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data) {
                toastr.success('Tambah data berhasil!', 'Berhasil!', {timeOut: 5000})
                    document.getElementById('id_siklus').value = "";
                    document.getElementById('total_kg').value = "";
                    document.getElementById('harga_kg').value = "";
                    document.getElementById('total').value = "";
                    table1.ajax.reload();
                    $('#modal_prediksi_ekor').modal('hide');
            },
            error: function(jqHXR, textStatus, errorThrown) {
                toastr.warning('Tambah data gagal!', 'Warning', {timeOut: 5000})
            }
        });
    }
</script>

<script type="text/javascript">
	function modal_hapus(id_prediksi) {
        $('#button_delete').attr('onclick', 'delete_prediksi('+id_prediksi+')');
        $('#modal_delete').modal('show');
    }

    function delete_prediksi(id_prediksi) {
        $.ajax({
        	url: "<?php echo site_url('prediksi/delete/') ;?>/"+id_prediksi,
        	type: "POST",
        	dataType: "JSON",
        	success: function(data) {
        		toastr.success('Hapus data berhasil!', 'Success Alert', {timeOut: 5000})
        		table.ajax.reload();
        		$('#modal_delete').modal('hide');
        	},
        	error: function(jqXHR, textStatus, errorThrown) {
        		alert('Error Deleting Data');
        	}
        });
    }
</script>

<script type="text/javascript">
	function modal_hapus_ekor(id_prediksi) {
        $('#button_delete').attr('onclick', 'delete_prediksi_ekor('+id_prediksi+')');
        $('#modal_delete').modal('show');
    }

    function delete_prediksi_ekor(id_prediksi) {
        $.ajax({
        	url: "<?php echo site_url('prediksi/delete_ekor/') ;?>/"+id_prediksi,
        	type: "POST",
        	dataType: "JSON",
        	success: function(data) {
        		toastr.success('Hapus data berhasil!', 'Success Alert', {timeOut: 5000})
        		table1.ajax.reload();
        		$('#modal_delete').modal('hide');
        	},
        	error: function(jqXHR, textStatus, errorThrown) {
        		alert('Error Deleting Data');
        	}
        });
    }
</script>

<script type="text/javascript">
    function cetak_data(id_prediksi) {
        window.open("<?php echo site_url('laporan/cetak/') ;?>"+id_prediksi);
    }
    function cetak_data_ekor(id_prediksi) {
        window.open("<?php echo site_url('laporan/cetak_ekor/') ;?>"+id_prediksi);
    }
</script>
