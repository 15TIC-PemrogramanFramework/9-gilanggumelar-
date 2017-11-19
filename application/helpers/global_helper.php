<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('transaksi').'"><i class="fa fa-list fa-fw"></i> home</a>
	</li><li>
		<a href="'.site_url('customer').'"><i class="fa fa-list fa-fw"></i> customer</a>
	</li><li>
		<a href="'.site_url('paket').'"><i class="fa fa-list fa-fw"></i> paket</a>
	</li><li>
		<a href="'.site_url('admin').'"><i class="fa fa-list fa-fw"></i> edit akun</a>
	</li>';
	}
		function generate_sidemenu2()
	{
		return '<li>
		<a href="'.site_url('login/logout').'"><i class="fa fa-list fa-fw"></i> logout</a>
	</li>';
	}

