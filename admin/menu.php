<div class="row">
<ol class="breadcrumb">
    <li><a href="#">
        <em class="fa fa-home"></em>
    </a></li>
    <li class="active"><a href="#">
        <em class="fa fa-coffee"></em>
    </a> Menu</li>
</ol>
</div>

<div class="row">
<div class="col-md-12">
    <h1 class="page-header">Menu</h1>
</div>
</div>

<div class="row">
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" id="datatables">
                <thead>
                    <tr>
                        <th width="10%">No. </th>
                        <th>Nama Menu</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Terakhir Diperbaharui</th>
                        <th width="20%">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td align="center">
                            <a href="#" id="edit_menu" data-toggle="modal" data-target="#edit">
                                <button class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</button>
                            </a>
                            <a href="#" onclick="return confirm('Yakin akan menghapus data ini?')">
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah" style="margin-bottom: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
        
        <div id="tambah" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><em class="fa fa-times"></em></button>
                        <h4>Tambah Data Menu</h4>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label" for="nama_menu">Nama Menu</label>
                                <input type="text" name="nama_menu" class="form-control" id="nama_menu" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="kategori">Kategori</label>
                                <select class="form-control" id="kategori">
                                    <option>Makanan</option>
                                    <option>Minuman</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="harga">Harga</label>
                                <input type="text" name="harga" class="form-control" id="harga" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="update">Terakhir Diperbaharui</label>
                                <input type="text" name="update" class="form-control" id="update" required>
                            </div>
                            <div>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="edit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><em class="fa fa-times"></em></button>
                        <h4>Edit Data Menu</h4>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label" for="nama_menu">Nama Menu</label>
                                <input type="text" name="nama_menu" class="form-control" id="nama_menu" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="kategori">Kategori</label>
                                <select class="form-control" id="kategori">
                                    <option>Makanan</option>
                                    <option>Minuman</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="harga">Harga</label>
                                <input type="text" name="harga" class="form-control" id="harga" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="update">Terakhir Diperbaharui</label>
                                <input type="text" name="update" class="form-control" id="update" required>
                            </div>
                            <div>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="edit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><em class="fa fa-times"></em></button>
                        <h4>Tambah Data Menu</h4>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label" for="nama_menu">Nama Menu</label>
                                <input type="text" name="nama_menu" class="form-control" id="nama_menu" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="kategori">Kategori</label>
                                <select class="form-control" id="kategori">
                                    <option>Makanan</option>
                                    <option>Minuman</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="harga">Harga</label>
                                <input type="text" name="harga" class="form-control" id="harga" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="update">Terakhir Diperbaharui</label>
                                <input type="text" name="update" class="form-control" id="update" required>
                            </div>
                            <div>
                                <button type="reset" class="btn btn-danger">Reset</button>
                                <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
</div>