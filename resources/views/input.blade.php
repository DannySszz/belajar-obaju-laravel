@extends('layouts.layout')

@section('title')

@endsection

@section('content')
<form method="POST" action="/laravel2/public/input">
{{csrf_field()}}
	<table>
	<tr>
		<td>Nama</td>
		<td><input name="var_name" placeholder="Nama"/></td>
	</tr>

	<tr>
		<td>Email</td>
		<td><input name="email" placeholder="email"/></td>
	</tr>

	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>

	<tr>
		<td></td>
		<td><input name="submit" type="submit" value="submit"></textarea></td>
	</tr>
	</table>
</form>
@endsection