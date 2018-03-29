@extends('components.layout')
@section('title','Contoh Halaman Blade')
@section('content')
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
					<h3>Contoh Form</h3>
					@include('components.formGenerator', $form)
					<br/>
					<h3>Contoh Tabel</h3>
					@include('components.tabel',$table)
				</div>
			</div>
			<br/>
		@endslot
	@endcomponent
	@include('components.footer')
@endsection
