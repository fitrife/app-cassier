<div class="row">
	<ol class="breadcrumb">
		<li><a href="#">
			<em class="fa fa-home"></em>
		</a></li>
		<li class="active"><a href="#">
			<em class="fa fa-files-o"></em>
		</a> Kategori</li>
	</ol>
</div>

<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">Kategori</h1>
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
							<th>Nama Kategori</th>
							<th width="20%">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center"></td>
							<td></td>
							<td align="center">
								<a href="#" id="edit_kategori" data-toggle="modal" data-target="#edit">
									<button class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Edit</button>
								</a>
								<a href="#" onclick="return confirm('Yakin akan menghapus data ini?')">
									<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus</button>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
				<a type="button" id="tambah_yuk" onkeydown="tambahFunction(event)" class="btn btn-success" data-toggle="modal" data-target="#tambah" style="margin-bottom: 5px"><i class="fa fa-plus"></i> Tambah Data</a>
			</div>

			<div id="tambah" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"><em class="fa fa-times"></em></button>
							<h4>Tambah Data Kategori</h4>
						</div>
						<form action="" method="post">
							<div class="modal-body" >
								<div class="form-group">
									<label class="control-label" for="nama_kategori">Nama Kategori</label>
									<input type="text" name="nama_kategori" class="form-control" id="nama_kategori" required>
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
							<h4>Edit Data Kategori</h4>
						</div>
						<form action="" method="post">
							<div class="modal-body">
								<div class="form-group">
									<label class="control-label" for="nama_kategori">Nama Kategori</label>
									<input type="text" name="nama_kategori" class="form-control" id="nama_kategori" required>
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

<script src="./jquery/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="./jquery/jquery.hotkeys/jquery.hotkeys.js"></script>
<!--<script src="./jquery/jquery.shortcuts.js"></script>-->
<script type="text/javascript">
	function tambahFunction(event) {
    var x = event.which || event.keyCode;
    if (x == 27) {
        document.getElementById("tambah_yuk").click();
    }
}

	/*$(document).ready(function(){ 
		$(document).bind('keydown', 8, function() {
			document.getElementById("tambah_yuk").click();
		});
	});
	/*$.Shortcuts.add({
    type: 'down',
    mask: 'Ctrl+B',
    handler: function() {
        document.getElementById("tambah_yuk").click();
    },
    list: 'first,second'
});*/

//jQuery(document).bind('keydown', 'up', function() {  
 // document.getElementById("tambah_yuk").click();

</script>
