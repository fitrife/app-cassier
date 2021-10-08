<div class="row">
	<ol class="breadcrumb">
		<li><a href="#">
			<em class="fa fa-home"></em>
		</a></li>
		<li class="active"><a href="#">
			<em class="fa fa-folder"></em>
		</a> Laporan Transaksi Penjualan</li>
	</ol>
</div>

<div class="row">
	<div class="col-md-12">
		<h1 class="page-header">Laporan Transaksi Penjualan</h1>
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
                            <th>Tgl. Transaksi</th>
                            <th>Petugas Kasir</th>
                            <th>Nama Menu</th>
                            <th>Qty</th>
                            <th>Waktu Transaksi</th>
                            <th>Total Harga</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
						</tr>
                    </tbody>
                </table>
                <a type="button" class="btn btn-default" data-toggle="modal" data-target="#cetakexcel" style="margin-bottom: 5px"><i class="fa fa-print"></i> Cetak Excel</a>
				<a type="button" class="btn btn-default" data-toggle="modal" data-target="#cetakpdf" id="cetak_yuk" style="margin-bottom: 5px"><i class="fa fa-print"></i> Cetak PDF</a>
            </div>
            
            <div id="cetakpdf" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><em class="fa fa-times"></em></button>
                    <h4>Cetak PDF Laporan</h4>
                  </div>
                  <div class="modal-body">
                  	<form action="" method="post" target="_blank">
                  		<table>
                  			<tr>
                  				<td>
                  					<div class="form-group">Dari Tanggal</div>
                  				</td>
                  				<td align="center" width="5%">
                  					<div class="form-group">:</div>
                  				</td>
                  				<td>
                  					<div class="form-group">
                  						<input type="date" class="form-control" name="tgl_a" required>
                  					</div>
                  				</td>
                  			</tr>
                  			<tr>
                  				<td>
                  					<div class="form-group">Sampai Tanggal</div>
                  				</td>
                  				<td align="center">
                  					<div class="form-group">:</div>
                  				</td>
                  				<td>
                  					<div class="form-group">
                  						<input type="date" class="form-control" name="tgl_b" required>
                  					</div>
                  				</td>
                  			</tr>
                  		</table>
                  	</form>
   	              <div class="modal-footer">
   	              	<a href="" target="_blank" class="btn btn-primary" btn-sm>Cetak Laporan</a>
                  </div>
                  </div>
                </div>
              </div>
            </div>

  		</div>
	</div>
</div>

<script src="./jquery/jquery.hotkeys/jquery-1.4.2.js"></script>
<script src="./jquery/jquery.hotkeys/jquery.hotkeys.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
    $(document).bind('keydown', 'ctrl+b', function() {
        document.getElementById("cetak_yuk").click();
    });
});
</script>