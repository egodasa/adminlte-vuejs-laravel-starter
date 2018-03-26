@extends('contohlayout')
@section('title', 'Page Title')
{{-- CONTOH
	@section('sidebar')
		<p>Above sidebar</p>
	    @parent
	
	    <p>This is appended to the master sidebar.</p>
	@endsection
	--}}
@section('content')
	File ini terletak pada views/extendlayout.blade.php dan extend dari contohlayout.blade.php
    <p>This is my body content.</p>
@endsection
