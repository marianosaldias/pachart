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
    <select ng-model="vm.url" ng-change="vm.buscaEnRegion()">
        <option value="http://restcountries.eu/rest/v1/region/africa">Africa</option>
        <option value="http://restcountries.eu/rest/v1/region/europe">Europa</option>
        <option value="http://restcountries.eu/rest/v1/region/americas">America</option>
    </select>
    <br /><br />
    <!--
    <ul>
        <li ng-repeat="pais in vm.paises">{{$index + 1}} -<span> País: </span>{{pais.name}}</span>, <span> capital:</span>
        {{pais.capital}}</li>
    </ul>
    -->
    <select>
        <option value="0">- Selecciona país -</option>
        <option ng-repeat="pais in vm.paises" value="{{$index + 1}}">{{pais.name}}</option>
    </select>    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>
<script>
angular
.module('apiApp', [])
.controller('apiAppCtrl', ['$http', controladorPrincipal]);
	function controladorPrincipal($http){
	var vm = this;
	
	vm.buscaEnRegion = function(){
		$http.get(vm.url).success(function(respuesta){
				console.log("res:", respuesta);
				vm.paises = respuesta;
			});
		}
	}
</script>
</body>
</html>