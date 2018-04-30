var app = angular.module("app", []);

app.controller("controller", function ($scope) {
	$scope.description;
	$scope.img;
	$scope.link;

	$scope.changeInteres = function(){
		// console.log($scope.model);
		if($scope.option==="S-cool - Sistema escolar"){
			$scope.description = 'Control total de tus clases, ingresos, alumnos y maestros en tiempo real desde cualquier dispositivo ';
			$scope.img = 'img/Logo_white.png';
			$scope.link = 'https://s-cool.io/';
		}
		else if($scope.option==="Hiit - Control de Gimnasios"){
			$scope.description= 'Automatización total de tus clases, ingresos, socios y entrandores en tiempo real desde cualquier dispositivo.';
			$scope.img = 'img/HIIT_white.png';
			$scope.link = 'https://hiit.io/';
		}
		else if($scope.option==="CRM"){
			$scope.description= 'Lleva el completo seguimiento de todos tus clientes y prospectos de tu empresa.';
			$scope.img = 'img/no.png';
			$scope.link = '';
		}
		else if($scope.option==="Sitio web personalizado"){
			$scope.description= 'Plasma tus ideas en la web, posiciona tu marca y da a conocer tu negocio en internet.';
			$scope.img = 'img/no.png';
			$scope.link = '';
		}
		else if($scope.option==="Otro servicio"){
			$scope.description= 'Escribenos en que servicio estás interesado.';
			$scope.img = 'img/no.png';
			$scope.link = '';
		}
	};
});