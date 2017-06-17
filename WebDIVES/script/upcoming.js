var app = angular.module("myapp", []);
app.controller("eventcontroller", function($scope, $http){
    $scope.displayData = function(){
        $http.get("../php/select_event.php")
        .success(function(data){
            $scope.events = data;
        });
    }
});