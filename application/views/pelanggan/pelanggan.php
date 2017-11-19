

<?php $this->load->view('templates/header2'); ?>
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>id transaksi </th>
			<th>id customer </th>
			<th>id paket </th>
			<th>tanggal transaksi </th>
			<th>tanggal selesai </th>

			<th>keterangan </th>
		
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_pelanggan as $key => $row) { ?>
		<tr>
			<td><?php echo $row->id_transaksi; ?> </td>
			<td><?php echo $row->id_customer; ?></td>
			<td><?php echo $row->id_paket; ?> </td>
			<td><?php echo $row->tanggal_transaksi; ?> </td>
			<td><?php echo $row->tanggal_selesai; ?> </td>
			<td><?php echo $row->keterangan; ?> </td>
			
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

