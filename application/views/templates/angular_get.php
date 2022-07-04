<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Probando Ajax en AngularJS</title>
</head>
<body>

<div ng-app="apiApp" ng-controller="apiAppCtrl as vm">
    <h1>Pruebo Ajax: $http.get</h1>
    <br />
    <label>Selecciona:</label><br />
    <select ng-model="vm.url" ng-change="vm.buscaColeccion()">
        <option value="<?php echo base_url();?>index.php/coleccion/colleccionangular_get">Coleccion</option>
    </select>
    <br /><br />
    <ul>
        <li ng-repeat="obra in vm.obras">{{$index + 1}} -<span> Titulo: </span>{{obra.title}}</span>, <span> tipo: </span>{{obra.tiponews}}<span>, Autor: </span>{{obra.nombre}} {{obra.apellido}} </li>
    </ul>
    <select>
        <option value="0">- Selecciona obra -</option>
        <option ng-repeat="obra in vm.obras" value="{{$index + 1}}">{{obra.title}}</option>
    </select>    

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>
<script>
angular
    .module('apiApp', [])
    .controller('apiAppCtrl', ['$http', controladorPrincipal]);

function controladorPrincipal($http) {
    var vm = this;

    vm.buscaColeccion = function() {
        $http.get(vm.url).success(function(respuesta) {
            console.log("res:", respuesta);
            vm.obras = respuesta;
        });
    }
}
</script>
</body>
</html>