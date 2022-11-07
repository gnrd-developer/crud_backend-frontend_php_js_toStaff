<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="img/ico.ico">
	<title>Empleados</title>
</head>
<body>

<section class="container">

<div class="row">
	<div class="col-12">
		<nav class="navbar navbar-dark bg-dark">
			<a class="navbar-brand">Lista de Empleados</a>
			<div class="form-inline">
				<input id="txtSearch" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
				<button id="btnSearch" class="btn btn-outline-success my-2 my-sm-0" type="button">Buscar</button>
			</div>
		</nav>
	</div>
</div>

<br>

<div class="row">
	<div class="col-12">
		<div class="overflow-auto">
			<table id="tblContact" class="table table-striped table-dark table-bordered">
				<thead class="thead-dark">
					<tr class="text-center table table-sm">
						<th scope="col" class="table-success">#</th>
						<th scope="col" class="table-success">rut</th>
						<th scope="col" class="table-success">nombre</th>
						<th scope="col" class="table-success">cargo</th>
						<th scope="col" class="table-success">pais_nacimiento</th>
						<th scope="col" class="table-success">hrs_inasistencia</th>
						<th scope="col" class="table-success">sueldo_base</th>
						<th scope="col" class="table-success">tipo_cuenta_banco</th>
						<th scope="col" class="table-success">num_depos_cuenta</th>
						<th scope="col" class="table-success">nom_banco</th>
						<th scope="col" class="table-success">valor_afp</th>
						<th scope="col" class="table-success">valor_fonasa</th>
						<th scope="col" class="table-success">calle_avenida</th>
						<th scope="col" class="table-success">num_casa_dep</th>
						<th scope="col" class="table-success">comuna</th>
					</tr>
				</thead>
				<tbody id="rowsContact">
					<tr class="text-center">
						<th id="id" scope="row">xxx</th>
						<td id="rut">xxx</td>
						<td id="nombre">xxx</td>
						<td id="cargo">xxx</td>
						<td id="pais_nacimiento">xxx</td>
						<td id="hrs_inasistencia">xxx</td>
						<td id="sueldo_base">xxx</td>
						<td id="tipo_cuenta_banco">xxx</td>
						<td id="num_depos_cuenta">xxx</td>
						<td id="nom_banco">xxx</td>
						<td id="valor_afp">xxx</td>
						<td id="valor_fonasa">xxx</td>
						<td id="calle_avenida">xxx</td>
						<td id="num_casa_dep">xxx</td>
						<td id="comuna">xxx</td>                   
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</section>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>