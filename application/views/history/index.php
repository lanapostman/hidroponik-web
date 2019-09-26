<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    History
                </h2>
            </div>
            <div class="body">
                <div class="body table-responsive">
                    <table id="table_id" class="table table-bordered table-hover js-basic-example dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>TANGGAL</th>
                                <th class="text-center">SUHU</th>
                                <th class="text-center">PH</th>
                                <th class="text-center">NUTRISI (PM)</th>
                                <th class="text-center">KETINGGIAN (CM)</th>
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

<script type="text/javascript">
    $(document).ready(function(){
         //datatables
        table = $('#table_id').DataTable({ 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo base_url('history/get_data')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "orderable": false,
                "targets": [],
            },
            { width: '160px', targets: 3 },
            ],
 
        });
    });
</script>


            