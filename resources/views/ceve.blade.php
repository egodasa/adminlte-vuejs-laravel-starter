@extends('components.layout')
@section('title','Contoh Halaman Blade')
@section('content')
	@php
		$sidebar = [
			"listMenu"=> [
				[
					"url"	=> "/contoh/blade",
					"icon"	=> "fa fa-laptop",
					"text"	=> "Contoh Menu"
				]
			]
		];
	@endphp
	@include('components.header')
	@include('components.sidebar',$sidebar)
		<div class="content-wrapper">
			<section class="content">
				<div class="row">
				<div class="col-xs-12">
					<div class="box ">
						<div class="box-body">
							<img src="/img/user2-160x160.jpg" class="user-image text-center" alt="User Image">Gundulmu
						</div>
					</div>
				</div>
				<div class="col-xs-6">
<!--
					kontak
-->
					<div class="box ">
						<div class="box-header with-border">
							
							<h3 class="text-center">Kontak</h3>
						</div>
						<div class="box-body">
							<dl class="dl-horizontal">
								<dt>Alamat</dt>
								<dd>Perum. Fadila Mandiri, GG bawang No.1
									Kelurahan Banuaran, Kecamatan Lubuk Begalung
									Padang, Sumatera Barat</dd>
								<dt>Handphone</dt>
								<dd>089519649316</dd>
								<dt>Email</dt>
								<dd>egodasa@gmail.com</dd>
								<dt>Tanggal lahir</dt>
								<dd>10 Oktober 1995</dd>
								</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
<!--
				pendidikan
-->
					<div class="box ">
						<div class="box-header with-border">
							
							<h3 class="text-center">Pendidikan</h3>
						</div>
						<div class="box-body">
							<dl class="dl-horizontal">
								<dt>2002-2008</dt>
								<dd>SDN 15 Banuaran</dd>
								<dt>2008-2011</dt>
								<dd>SMPN 17 Padang</dd>
								<dt>2011-2014</dt>
								<dd>SMAN 6 Padang</dd>
								<dt>2014-2018</dt>
								<dd>Universitas Putra Indonesia "YPTK" Padang
								</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="col-xs-12">
<!--
				pemrograman
-->
					<div class="box ">
						<div class="box-header with-border">
							
							<h3 class="text-center">Teknologi Web yang dikuasai</h3>
						</div>
						<div class="box-body">
							<div class="text-center">
								<img src="/img/php.svg" width="100" height="100">
								<img src="/img/laravel.png" width="100" height="100">
								<img src="/img/codeigniter.png" width="100" height="100">
								<img src="/img/javascript.svg" width="100" height="100">
								<img src="/img/jquery.png" width="100" height="100">
								<img src="/img/vue.png" width="100" height="100">
								<img src="/img/node.png" width="100" height="100">
								<img src="/img/mysql.png" width="100" height="100">
								<img src="/img/postgresql.png" width="100" height="100">
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
<!--
				pengalaman
-->
				<div class="box ">
						<div class="box-header with-border">						
							<h3 class="text-center">Pengalaman Bekerja</h3>
						</div>
						<div class="box-body">
							<dl class="dl-horizontal">
								<dt>2014-2017</dt>
								<dd>Menjadi seorang Webmaster pada website usaha souvenir dan undangan pernikahan Lakeisha Souvenir (Bantul, Jogjakarta)</dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
<!--
					lain-lain
-->
				<div class="box ">
						<div class="box-header with-border">
							<h3 class="text-center">Kemampuan</h3>
						</div>
						<div class="box-body">
							<ul>
								<li>Mampu belajar hal baru terutama pemrograman web dengan cepat</li>
								<li>90% Pemrograman Saya kuasai secara otodidak</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</section>
		</div>
	@include('components.footer')
@endsection
