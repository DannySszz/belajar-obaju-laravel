<!DOCTYPE html>
<html>
<head>
	<title>Ini Table</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>Nama</td>
			<td>Email</td>
			<td>Alamat</td>
			<td>Notepad</td>
		</tr>

		@foreach($mahasiswa as $data)
		<tr>
			<td>{{ $data->name }}</td>
			<td>{{ $data->email }}</td>
			<td>{{ $data->alamat }}</td>
			<td>{{ $notepad }}</td>
		</tr>
		@endforeach	

	</table>
</body>
</html>