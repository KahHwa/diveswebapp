var app = angular.module("myapp", []);
app.controller("eventcontroller", function($scope, $http){
    $scope.registerEvent = function(){
    	location.href = '/webdives/html/event.html';
    }
    $scope.displayData = function(){
        $http.get("../php/select_event.php")
        .success(function(data){
            $scope.events = data;
        });
    }
});