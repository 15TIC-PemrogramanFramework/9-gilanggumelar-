

<?php $this->load->view('templates/header'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top:20px;margin-bottom:10px;">
			<?php echo anchor(site_url('transaksi/tambah'),
			'<i class="fa fa-plus-circle"></i> Tambah Data',
			'class="btn btn-primary"');?>
		</div>
	</div>
</div>
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id transaksi </th>
			<th>id customer </th>
			<th>id paket </th>
			<th>tanggal transaksi </th>
			<th>tanggal selesai </th>
			<th>keterangan </th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_transaksi as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_transaksi; ?> </td>
			<td><a href="<?php echo base_url('customer/lihat/'.$row->id_customer);?>"><?php echo $row->id_customer; ?></a></td>
			<td><a href="<?php echo base_url('paket/lihat/'.$row->id_paket);?>"><?php echo $row->id_paket; ?></a> </td>
			<td><?php echo $row->tanggal_transaksi; ?> </td>
			<td><?php echo $row->tanggal_selesai; ?> </td>
			<td><?php echo $row->keterangan; ?> </td>
				<td>
				<?php echo anchor(site_url('transaksi/edit/'.$row->id_transaksi),
					'<i class="fa fa-pencil" ></i>',
					'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('transaksi/delete/'.$row->id_transaksi),
					'<i class="fa fa-trash" ></i>',
					'class="btn btn-danger"'); ?>
			</td>
		</tr>
<?php } ?>

	</tbody>
</table>
<?php $this->load->view('templates/footer');  ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	});

</script>

