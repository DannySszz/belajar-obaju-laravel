@extends('layouts.layout')

@section('title')

@endsection

@section('content')
<form method="POST" action="/laravel2/public/{{$mahasiswa->id}}/edit">
{{csrf_field()}}
	<table>
	<tr>
		<td>Nama</td>
		<td><input name="var_name" placeholder="Nama" value="{{$mahasiswa->name}}" /></td>
	</tr>

	<tr>
		<td>Email</td>
		<td><input name="email" placeholder="email" value="{{$mahasiswa->email}}"/></td>
	</tr>

	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat">{{$mahasiswa->alamat}}</textarea></td>
	</tr>

	<tr>
		<td></td>
		<td><input name="submit" type="submit" value="submit"></textarea></td>
	</tr>
	</table>

	<input type="hidden" name="_method" value="PUT">
</form>
@endsection