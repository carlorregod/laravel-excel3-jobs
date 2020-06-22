<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Plantilla EXCEL</title>
	</head>
	<body>
		<table class="table table-striped">
			<thead>
				<tr>
					<th><strong>#</strong></th>
					<th><strong>Nombre</strong></th>
					<th><strong>Descripción</strong></th>
					<th><strong>Stock</strong></th>
					<th><strong>Fecha</strong> Creación</th>
					<th><strong>Fecha</strong> Última Modificación</th>
				</tr>
			</thead>
			<tbody>
				@foreach($agendas as $agenda)
				<tr>
					<td>{{ $agenda->id }}</td>
					<td>{{ $agenda->name }}</td>
					<td>{{ $agenda->description }}</td>
					<td>{{ $agenda->stock }}</td>
					<td>{{ $agenda->created_at }}</td>
					<td>{{ $agenda->updated_at }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>
