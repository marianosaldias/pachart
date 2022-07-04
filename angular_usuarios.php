<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Probando Ajax en AngularJS</title>

<style>
	body { 
		font-family: sans-serif;
	}
	li {
		font-size: 0.8em;
	}
	li span {
		font-weight: bold;
	}
</style>

</head>
<body>

<div ng-app="apiApp" ng-controller="apiAppCtrl as vm">
    <h1>Pruebo Ajax</h1>
    <br />
    <label>Selecciona:</label><br />
    <select ng-model="vm.url" ng-change="vm.buscaColeccion()">
        <option value="http://localhost/pachart/index.php/coleccion/colleccionangular">Coleccion</option>
        
        <!--
        <option value="http://restcountries.eu/rest/v1/region/africa">Africa</option>
        <option value="http://restcountries.eu/rest/v1/region/europe">Europa</option>
        <option value="http://restcountries.eu/rest/v1/region/americas">America</option>
    	-->
    </select>
    <br /><br />
    <ul>
        <li ng-repeat="obra in vm.obras">{{$index + 1}} -<span> Titulo: </span>{{obra.title}}</span>, <span> tipo: </span>{{obra.tiponews}}</li>
    </ul>

    <!--
    <select>
        <option value="0">- Selecciona país -</option>
        <option ng-repeat="pais in vm.obras" value="{{$index + 1}}">{{pais.title}}</option>
    </select>    
	-->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>
<script>
angular
.module('apiApp', [])
.controller('apiAppCtrl', ['$http', controladorPrincipal]);
	function controladorPrincipal($http){
	var vm = this;
	
	vm.buscaColeccion = function(){
		$http.get(vm.url).success(function(respuesta){
				console.log("res:", respuesta);
				vm.obras = respuesta;
			});
		}
	}
</script>
</body>
</html>