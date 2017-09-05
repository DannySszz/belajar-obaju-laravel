@extends('layouts.layout')

@section('title')
	Content 1 
@endsection

@section('content')
	<form method="POST" action="input_form_post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		Nama:<br>
			<input type="text" name="nama">
		<br>
		Alamat:<br>
			<input type="text" name="alamat">
		<br>
		No Telp:<br>
			<input type="text" name="no_telp">
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form> 
@endsection
	
