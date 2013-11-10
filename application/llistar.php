<!DOCTYPE html>
<html>
<head>


 
<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>


<!-- Bootstrap -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">


<script type="text/javascript">
$(document).ready(function() {
	$('#users_table').dataTable({    
	"bPaginate": false,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": true
	});
} );
</script>


	
</head>
<body>

	<?php include('navbar_top.html'); ?><br><br><br>

	<h3 align=center>Usuaris</h3><br>

	<div align="right">
	 				<a href='/codeigniterhelloworld/index.php/usuaris/crear'>
						<button type="button" class="btn btn-success">
				  			<span class="glyphicon glyphicon-plus"></span> 
				  			<span class="glyphicon glyphicon-user"></span> 
						</button>
					</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div> 

	<table cellpadding="0" cellspacing="0" border="0" id="users_table" class="table table-striped" width="100%" align="center">
		<thead bgcolor=#819FF7>
			<tr>
				<th>Usuari</th>
				<th>Adre&ccedil;a</th>
				<th>Telefon</th>
				<th>DNI</th>
				<th>ID</th>
				<th>Accions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Joan Panisello</td>
				<td>Nacional 340 Km 1091</td>
				<td>665 780 624</td>
				<td>47823595v</td>
				<td>01</td>
				<td>
					<a href='/codeigniterhelloworld/index.php/usuaris/modificar/01'>
						<button type="button" class="btn btn-warning btn-sm">
				  			<span class="glyphicon glyphicon-pencil"></span> 
						</button>
					</a>&nbsp;
					<a href='/codeigniterhelloworld/index.php/usuaris/eliminar'>
						<button type="button" class="btn btn-danger btn-sm">
				  			<span class="glyphicon glyphicon-remove"></span> 
						</button>
					</a> 
				</td>
			</tr>
			<tr>
				<td>Marc Montes&oacute;</td>
				<td>C/Sant Joan n 20</td>
				<td>623 764 535</td>
				<td>47211849k</td>
				<td>02</td>
				<td>
					<a href='/codeigniterhelloworld/index.php/usuaris/modificar/02'>
						<button type="button" class="btn btn-warning btn-sm">
				  			<span class="glyphicon glyphicon-pencil"></span> 
						</button>
					</a>&nbsp;
					<a href='/codeigniterhelloworld/index.php/usuaris/eliminar'>
						<button type="button" class="btn btn-danger btn-sm">
				  			<span class="glyphicon glyphicon-remove"></span> 
						</button>
					</a> 
				</td>
			</tr>
			<tr>
				<td>Carlos Meca</td>
				<td>C/Montaner n 10</td>
				<td>686 345 262</td>
				<td>48926482e</td>
				<td>03</td>
				<td>
					<a href='/codeigniterhelloworld/index.php/usuaris/modificar/03'>
						<button type="button" class="btn btn-warning btn-sm">
				  			<span class="glyphicon glyphicon-pencil"></span> 
						</button>
					</a>&nbsp;
					<a href='/codeigniterhelloworld/index.php/usuaris/eliminar'>
						<button type="button" class="btn btn-danger btn-sm">
				  			<span class="glyphicon glyphicon-remove"></span> 
						</button>
					</a> 
				</td>
			</tr>
			<tr>
				<td>Adolf Comes</td>
				<td>C/Pollastre n 11</td>
				<td>676 482 323</td>
				<td>47890232m</td>
				<td>04</td>
				<td>
					<a href='/codeigniterhelloworld/index.php/usuaris/modificar/04'>
						<button type="button" class="btn btn-warning btn-sm">
				  			<span class="glyphicon glyphicon-pencil"></span> 
						</button>
					</a>&nbsp;
					<a href='/codeigniterhelloworld/index.php/usuaris/eliminar'>
						<button type="button" class="btn btn-danger btn-sm">
				  			<span class="glyphicon glyphicon-remove"></span> 
						</button>
					</a> 
				</td>
			</tr>
		</tbody>
	</table>

	<div align="right" style=margin-top:176px;>
		<a href='javascript:history.back()'>
			<button type="button" class="btn btn-primary">
				Atras
			</button>
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	</div> 

</body>
</html>

