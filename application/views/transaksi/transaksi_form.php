<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>id transaksi</label>
		<input type="text" class="form-control" name="id_transaksi" required placeholder="Masukkan id transaksi" value="<?php echo $id_transaksi;?>" />
	</div>

	<div class="form-group">
		<label>id customer</label>
	<select name="id_customer">
<?php
$this->db->select('id_customer');
$id_cust = $this->db->get('customer');

foreach($id_cust->result() as $row){
echo "<option value='".$row->id_customer."'>".$row->id_customer."</option>";
}
?></select>
	</div>

	<div class="form-group">
		<label>id paket</label>
			<select name="id_paket">
<?php
$this->db->select('id_paket');
$id_pkt = $this->db->get('paket');

foreach($id_pkt->result() as $row){
echo "<option value='".$row->id_paket."'>".$row->id_paket."</option>";
}
?></select>
	</div>

	<div class="form-group">
		<label>tanggal transaksi</label>
		<input type="text" class="form-control" name="tanggal_transaksi" required placeholder="Masukkan tanggal transaksi" value="<?php echo $tanggal_transaksi;?>" />
	</div>

	<div class="form-group">
		<label>tanggal selesai</label>
		<input type="text" class="form-control" name="tanggal_selesai" required placeholder="Masukkan tanggal selesai" value="<?php echo $tanggal_selesai;?>" />
	</div>


	<div class="form-group">
		<label>keterangan</label>
		<input type="text" class="form-control" name="keterangan" required placeholder="Masukkan keterangan" value="<?php echo $keterangan;?>" />
	</div>
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('transaksi') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer') ?>