<!DOCTYPE html>
<html>
<head>

<!-- DataTables CSS -->

<style type="text/css" title="currentStyle">
	@import "demo_page.css"; 
</style>

<style type="text/css" title="currentStyle">
	@import "/bootstrap/css/bootstrap.css"; 
</style>

<!-- jQuery  
<link rel="stylesheet" type="text/css" href="http://www.datatables.net/release-datatables/media/css/demo_table.css">

<link rel="stylesheet" type="text/css" href="http://www.datatables.net/release-datatables/media/css/demo_page.css">
-->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>




<script type="text/javascript">
$(document).ready(function() {
$('#users_table').dataTable();
} );
</script>


</head>
<body>	
<h1 align=center><u>Llista d'Usuaris</u></h1>
<br>
<table cellpadding="0" cellspacing="0" border="0" id="users_table" class="table table-striped" width="100%">
<thead bgcolor=#819FF7>
<tr>
<th>Usuari</th>
<th>Adre&ccedil;a</th>
<th>Telefon</th>
<th>DNI</th>
<th>ID</th>
</tr>
</thead>
<tbody align=center>
<tr>
<td>Joan Panisello</td>
<td>Nacional 340 Km 1091</td>
<td>665 780 624</td>
<td>47823595v</td>
<td>01</td>
</tr>
<tr>
<td>Marc Montes&oacute;</td>
<td>C/Sant Joan n 20</td>
<td>623 764 535</td>
<td>47211849k</td>
<td>02</td>
</tr>
<tr>
<td>Carlos Meca</td>
<td>C/Montaner n 10</td>
<td>686 345 262</td>
<td>48926482e</td>
<td>03</td>
</tr>
<tr>
<td>Adolf Comes</td>
<td>C/Pollastre n 11</td>
<td>676 482 323</td>
<td>47890232m</td>
<td>04</td>
</tr>
</thead>
</table>
</body>
</html>
