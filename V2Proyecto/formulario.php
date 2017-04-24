<!DOCTYPE html>
<html lang="en" ng-app="countryApp">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script type="text/javascript" src="js/angular.min.js"></script>
  <script type="text/javascript" src="app/angularApp.js"></script>
</head>
<body ng-controller="CountryCtrl">
  <form action="">
    Ingresa folio: <input type="text" ng-model="folio">
    Ingresa curp:  <input type="text" ng-model="curp">
    ingresa beneficiario <input type="text" ng-model="beneficiario">
    ingresa cobeneficiario:  <input type="text" ng-model="cobeneficiario">
    ingresa referencia:  <input type="text" ng-model="referencia">
    <select name="comunidad" ng-model="comunidad">
      <option value="">Selecione una opcion</option>
      <option ng-repeat="dato in datos" value="{{dato.id}}">{{dato.nombre}}</option>
    </select>
    <br><br>
    <button type="submit" ng-click="agregar(folio,curp,beneficiario,cobeneficiario, referencia,comunidad)">Agregar datos</button>
  </form>

  <br><br>
   <table>
        <thead>
            <tr>
                <th>folio: </th>
                <th>curp: </th>
                <th>beneficiario: </th>
                <th>Cobeneficiario</th>
                <th>referencia</th>
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

</body>
</html>