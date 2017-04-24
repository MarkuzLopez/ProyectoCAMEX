<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Consultas</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	
</head>
<body>
 <br>
		<div class="container">
		 <i class="mdi-action-perm-media">Hola</i>
		  <h1>Consulta de Datos</h1>
			  <table>
        <thead>
            <tr>
                <th>folio: </th>                
                <th>curp: </th>
                <th>beneficiario: </th>
                <th>Cobeneficiario: </th>
                <th>Referencias: </th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="nombre in nombres">
                <td>{{nombre.folio}}</td>                                
                <td>{{nombre.curp}}</td>
                <td>{{nombre.beneficiario}}</td>
                <td>{{nombre.cobeneficiario}}</td>
                <td>{{nombre.referencia}}</td>
            </tr>
        </tbody>
     </table>
		</div>
	

	 <script src="js/jquery-3.0.0.min.js"></script>
	 <script src="app/appDatos.js"></script>
    <script src="js/materialize.min.js"></script> 
</body>
</html>