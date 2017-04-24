var countryApp = angular.module('countryApp', []);
      countryApp.controller('CountryCtrl', function ($scope, $http){
               

        $http.get('include/ver.php').success(function(data) {
        	$scope.nombres = data;
        })

        $http.get('include/getDatos.php').success(function(data) {
          $scope.datos = data;
        })
        
        $scope.agregar = function(folio,curp,beneficiario, cobeneficiario, referencia, comunidad){
          $http.post('include/agregar.php?folio='+folio+"&curp="+curp+"&beneficiario="+beneficiario+"&cobeneficiario="+cobeneficiario+"&referencia="+referencia+"&comunidad="+comunidad).then(function(data) {
            $scope.folio="";
            $scope.curp="";
            $scope.beneficiario="";
            $scope.cobenficiario="";
            $scope.referencia="";
            
          })
        }
        
    });
