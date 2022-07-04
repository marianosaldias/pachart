<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Probando Ajax en AngularJS</title>
</head>
<body>

<div ng-app="app" ng-controller="appCtrl as vm">
    <h1>Pruebo Ajax: $http.post</h1>
    <section>
        <form ng-submit="vm.enviar()">
            Nombre: <input type="text" ng-model="vm.fdatos.name" ng-required="true" ng-change="vm.enviar()">
            <br><br>
            Año: <input type="number" ng-model="vm.fdatos.year" ng-required="true" ng-change="vm.enviar()">
            <br><br>            
            <input type="submit" value="Enviar">
        </form>
    </section>

    <section>
        <ul>
            <li ng-repeat="obra in vm.obras">{{$index + 1}} -<span> Titulo: </span>{{obra.title}}</span>, <span> tipo: </span>{{obra.tiponews}}<span>, Autor: </span>{{obra.nombre}} {{obra.apellido}}</li>
        </ul>        
    </section>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>
<script type="text/javascript">
angular
 .module('app', [])
 .controller('appCtrl', ['$http', controladorPrincipal]);

function controladorPrincipal($http){
    var vm = this;
    //inicializo un objeto en los datos de formulario
    vm.fdatos = {};

    // declaro la función enviar
    vm.enviar = function(){
    $http.post("colleccionangular_post", vm.fdatos)
        .success(function(respuesta){
            console.log(respuesta);
            //por supuesto podrás volcar la respuesta al modelo con algo como vm.res = res;
            console.log("res:", respuesta);
            vm.obras = respuesta;            
        });
    }
}
</script>

</body>
</html>