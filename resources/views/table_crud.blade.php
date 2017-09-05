<!DOCTYPE html>
<html>
<head>
	<title>Ini Table</title>
</head>
<body>

	<a href="{{ url('input') }}"> Tambah data </a>

	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Email</td>
			<td>Alamat</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>

		@foreach($mahasiswa as $data)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $data->name }}</td>
			<td>{{ $data->email }}</td>
			<td>{{ $data->alamat }}</td>

			<td><a href="{{$data->id}}/edit"> Edit </a></td>
			<td>
				<form method="POST" action="{{$data->id}}/delete">
				{{csrf_field()}}
				<input type="submit" name="delete" value="delete">

				<input type="hidden" name="_method" value="DELETE">
				</form>
			</td>
		</tr>
		@endforeach	

	</table>
</body>
</html>