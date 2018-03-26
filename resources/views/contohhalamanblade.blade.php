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
		$form = [
			"fields"	=>	[
								[
									"name"	=> "nm_dosen",
									"type"	=> "input",
									"inputType"	=> "text",
									"label"		=> "Nama Dosen",
									"placeholder" => "Nama Dosen"
								],
								[
									"name"	=> "id_kelas",
									"type"	=> "select",
									"label"		=> "Kelas",
									"placeholder" => "Kelas",
									"optionLabel" => "nm_kelas",
									"optionValue" => "id_kelas",
									"options" => [
										["id_kelas"=>1,"nm_kelas"=>"SI-1"],
										["id_kelas"=>2,"nm_kelas"=>"SI-2"],
										["id_kelas"=>3,"nm_kelas"=>"SI-3"],
										["id_kelas"=>4,"nm_kelas"=>"SI-4"],
										["id_kelas"=>5,"nm_kelas"=>"SI-5"],
										["id_kelas"=>6,"nm_kelas"=>"SI-6"]
									]
								],
								[
									"name"	=> "deskripsi",
									"type"	=> "textarea",
									"label"		=> "Keterangan",
									"placeholder" => "Detail"
								]
								
							],
			"model"		=>	[
								"nm_dosen"	=> null,
								"id_kelas"	=> null,
								"deskripsi"	=> null
							],
			"error"		=>	[
								"nm_dosen"	=> null,
								"id_kelas"	=> null,
								"deskripsi"	=> null
							]
		];
	@endphp
	@include('components.header')
	@include('components.sidebar',$sidebar)
	@component('components.content')
		@slot('contentHeader')
			Halaman Render Full Blade with slot and components
		@endslot
		@slot('contentBody')
			<div class="box">
				<div class="box-header with-border">
					<h2>File : contohhalamanblade.php</h2>
				</div>
				<div class="box-body">
					@include('components.formGenerator', $form)
				</div>
			</div>
			<br/>
		@endslot
	@endcomponent
	@include('components.footer')
@endsection
