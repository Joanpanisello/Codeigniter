<!DOCTYPE html>
<html>
<head>


 
<!-- ####################   jQuery   ######################## -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  



<!-- ####################   DataTables   #################### -->

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="http://www.datatables.net/release-datatables/media/css/demo_page.css"></script>
<script type="text/javascript" charset="utf8" src="http://www.datatables.net/release-datatables/media/css/demo_table.css"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>application/assets/DataTables/extras/TableTools/media/js/ZeroClipboard.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>application/assets/DataTables/extras/TableTools/media/js/TableTools.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>application/assets/DataTables/extras/ColReorder/media/js/ColReorder.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>application/assets/DataTables/extras/ColReorder/media/css/ColReorder.css"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>application/assets/DataTables/extras/FixedHeader/js/FixedHeader.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>application/assets/DataTables/extras/ColVis/media/js/ColVis.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url() ?>application/assets/DataTables/extras/FixedColumns/media/js/FixedColumns.js"></script>

<style media="screen" type="text/css">
@import "<?php echo base_url() ?>application/assets/DataTables/extras/TableTools/media/css/TableTools.css";
@import "<?php echo base_url() ?>application/assets/DataTables/extras/ColVis/media/css/ColVis.css";

</style>


<!-- ####################   Bootstrap   ##################### -->

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-transition.js"></script>
<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-collapse.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">


<script charset="utf-8" type="text/javascript">
$(document).ready(function() {
 var oTable = $('#users_table').dataTable({  
	"sScrollY": "300px",
    "sScrollX": "100%",
    "sScrollXInner": "150%",
    "bScrollCollapse": true,
    "bPaginate": false,
	"sDom": 'T<"clear">R<"clear">Clfrtip',
	"oTableTools": {
            "sSwfPath": "<?php echo base_url() ?>application/assets/DataTables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
        }
	}); 
 	new FixedColumns( oTable );
} );
</script>


	
</head>
<body>


	<!--<?php include('navbar_top.html'); ?><br><br><br>-->

	<h3 align=center>Usuaris</h3><br>


	<div align="right">
	 				<a href='/codeigniterhelloworld/index.php/usuaris/crear'>
						<button type="button" class="btn btn-success">
				  			<span class="glyphicon glyphicon-plus"></span> 
				  			<span class="glyphicon glyphicon-user"></span> 
						</button>
					</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div> 
	<br><br>
	
	<table cellpadding="0" cellspacing="0" border="0" id="users_table" class="table table-striped" width="100%" align="center">
		<thead bgcolor=#819FF7>
			<tr>
				<th>Nom</th>
				<th>Cognom</th>
				<th>Adre&ccedil;a</th>
				<th>Ciutat</th>
				<th>Pais</th>
				<th>Telefon</th>
				<th>ID</th>
				<th>Accions</th>
			</tr>
		</thead>
		<tbody>

			



			
			<?php foreach($this->_ci_cached_vars as $index => $persona){ ?>
			<tr>
				<td><?php echo $persona['Nom']; ?></td>
				<td><?php echo $persona['Cognom']; ?></td>
				<td><?php echo $persona['Adreça']; ?></td>
				<td><?php echo $persona['Ciutat']; ?></td>
				<td><?php echo $persona['Pais']; ?></td>
				<td><?php echo $persona['Telefon']; ?></td>
				<td><?php echo $persona['id']; ?></td>
				<td>
					<a href='/codeigniterhelloworld/index.php/usuaris/modificar/<?php echo $persona['id']; ?>'>
						<button type="button" class="btn btn-warning btn-sm">
				  			<span class="glyphicon glyphicon-pencil"></span> 
						</button>
					</a>&nbsp;
					<a href='/codeigniterhelloworld/index.php/usuaris/eliminare/<?php echo $persona['id']; ?>'>
						<button type="button" class="btn btn-danger btn-sm">
				  			<span class="glyphicon glyphicon-remove"></span> 
						</button>
					</a> 
				</td>
			</tr>
			<?php } ?>
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

