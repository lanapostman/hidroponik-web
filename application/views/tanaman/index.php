<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Tanaman
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li><button type="button" class="btn btn-success waves-effect" onclick="add()">Tambah</button></li>
                </ul>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table id="table_id" class="table table-bordered table-hover js-basic-example dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>NAMA TANAMAN</th>
                                <th class="text-center">AKSI</th>
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

<!-- Small Size -->
<div class="modal fade" id="modal_ikan" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <form id="form" action="#">
                    <input type="hidden" value="0" name="id_tanaman">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="nama_tempat">Nama Tanaman</label>
                        </div>
                        <div class="col-lg-8 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_ikan" name="nama_ikan" class="form-control" placeholder="Masukkan Nama Tanaman">
                                </div>
                                <span id="result_ikan"></span>
                                <span class="pesan pesan-nama_ikan">Data tidak boleh kosong!</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="sub_button" class="btn btn-link waves-effect" onclick="save()">SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus Siklus -->
<div id="modal_hapus" class="modal fade">
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
                <p>Apakah anda yakin ingin menghapus Tanaman ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Batal</button>
                <button type="button" id="button_hapus" class="btn btn-danger waves-effect">Hapus</button>
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
                "url": "<?php echo base_url('tanaman/get_data')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "orderable": false,
                "targets": [1],
            },
            { width: '40px', targets: 1 },
            ],
 
        });
    });
</script>



<script type="text/javascript">
    $(document).ready(function(){
        $('#sub_button').attr('disabled',true);
        $('#nama_ikan').keyup(function(){
            if($(this).val().length !=0) {
                $('#sub_button').attr('disabled', false);
            }
            else {
                $('#sub_button').attr('disabled',true);
            }
        })
    });

    var save_method;
    function add() {
        save_method = 'add';
        $('#form')[0].reset();
        $('#result_ikan').html('');
        $(".pesan-nama_ikan").hide();
        $('#modal_ikan').val('');
        $('#modal_ikan').modal('show');
        $('.modal-title').text('Tambah Jenis Tanaman');
    }

    function save() {
        var url;
        if (save_method == 'add') {
            url = '<?php echo base_url('tanaman/create'); ?>';
            var nama_ikan = $('#nama_ikan').val().length;
            if (nama_ikan == 0) {
                $(".pesan-nama_ikan").css('display','block');
                return false;
            }
        }
        else {
            url = '<?php echo base_url('tanaman/update'); ?>';
        }
        
        $.ajax({
            url: url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data) {
                toastr.success('Tambah data berhasil!', 'Berhasil!', {timeOut: 5000})
                document.getElementById('nama_ikan').value = "";
                $('#modal_ikan').modal('hide');
                table.ajax.reload();
            },
            error: function(jqHXR, textStatus, errorThrown) {
                toastr.warning('Data sudah ada!', 'Warning', {timeOut: 5000})
            }
        });
    }
</script>

<script type="text/javascript">

    function modal_hapus(id_tanaman) {
        $('#button_hapus').attr('onclick', 'delete_ikan('+id_tanaman+')');
        $('#modal_hapus').modal('show');
    }

    function delete_ikan(id_tanaman) {
        $.ajax({
            url: "<?php echo site_url('tanaman/delete/') ;?>/"+id_tanaman,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                toastr.success('Hapus data berhasil!', 'Success Alert', {timeOut: 5000})
                table.ajax.reload();
                $('#modal_hapus').modal('hide');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Deleting Data');
            }
        });
    }
</script>

<script type="text/javascript">
    function edit_ikan(id_tanaman) {
        save_method = 'update';
        var form = $('#form')[0].reset();

        //load data dari AJAX
        $.ajax({
            url: "<?php echo site_url('tanaman/ajax_edit/') ;?>/"+id_tanaman,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                form;
                $('[name="id_tanaman"]').val(data.id_tanaman);
                $('[name="nama_ikan"]').val(data.nama_tanaman);
                $('#modal_ikan').modal('show');

                $('#modal-title').text('Ubah Ikan');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data From AJAX');
            }
        });
    }
</script>


            