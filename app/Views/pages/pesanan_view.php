<h1 class="mt-4">Transaksi</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">
        <?php echo anchor('/', "Dashboard"); ?>
    </li>
    <li class="breadcrumb-item active">Pesanan Open</li>
</ol>
<div style="padding-bottom: 15px;">
    <button id="btn_reload" class="btn btn-primary">Reload</button>
    <button id="btn_add_new" class="btn btn-success">Add New Produk</button>
</div>
<div class="modal fade" id="formPesananModal" tabindex="-1" role="dialog" aria-labelledby="formPesananModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formPesananModalLabel">Form Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_pesanan" method="POST" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label>Nama Pemesan </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama pemesan" aria-label="Nama pemesan" aria-describedby="cari-data-pesan">
                            <small id="msg_nama_pemesan" class="form-text text-muted"></small>
                            <button class="btn btn-outline-primary" type="button" id="cari-data-pesan">cari Data</button>

                        </div>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pesan</label>
                        <input type="date" name="tanggal_pesan" class="form-control" placeholder="Tanggal_pesan">
                        <small id="msg_tgl_psn" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label>Item Produk</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Item Produk" aria-label="Item Produk" aria-describedby="cari-data-item-produk">
                            <small id="msg_item_produk" class="form-text text-muted"></small>
                            <button class="btn btn-outline-primary" type="button" id="cari-data-item-produk">cari Data</button>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Jumlah pesan</label>
                        <input type="number" class="form-control" placeholder="jumlah pesan" aria-label="jumlah pesan">
                        <small id="msg_jumlah_pesan" class="form-text text-muted"></small>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div id="#pesan_holder"></div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="button">ADD</button>
            </div>
        </div>
    </div>
</div>
<table id="pesanan_tbl" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pemesan</th>
            <th>Tanggal Pesanan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Nama Pemesan</th>
            <th>Tanggal Pemesan</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>

<script>
    $(document).ready(function() {
        var tbl_pesanan = $('#pesanan_tbl').DataTable({
            "ajax": "<?php echo site_url('/api/pesanan'); ?>",
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "nama"
                },
                {
                    "data": "tgl_pesanan"
                },
                {
                    "data": null,
                    defaultContent: '<button class="btn btn-warning btn-edit btn-sm"><i class="fa fa-pencil"></i> Edit </button> <button class="btn btn-delete btn-danger btn-sm"><i class="fa fa-trash"></i> delete </button>'
                },
            ]
        });
        $("#btn_add_new").click(function() {
            $("#formPesananModal").modal('toggle')
        })
    });
</script>