var app = angular.module("myapp",[]);  
 app.controller("jobcontroller", function($scope, $http){
    $scope.displayData = function(){  
           $http.get("../php/select_recommended.php")  
           .success(function(data){  
                $scope.positions = data;  
           });  
      }
 });