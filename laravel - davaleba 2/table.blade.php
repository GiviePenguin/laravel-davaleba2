
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,tr,th{
			border:2px solid black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>#</th>
			<th>name</th>
			<th>surname</th>
			<th>address</th>
			<th>birth day</th>
			<th>biography</th>
		</tr>
		@foreach ($newdata as $data)
			<tr>
				<td>{{ ++$loop->index }}</td>
				<td>{{ $data['name']}}</td>
				<td>{{ $data['surn']}}</td>
				<td>{{ $data['address']}}</td>
				<td>{{ $data['bday']}}</td>
				<td>{{ $data['bio']}}</td>

			</tr>
		@endforeach

	</table>
</body>
</html>