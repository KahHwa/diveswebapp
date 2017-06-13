var app = angular.module("myapps",[]);  
 app.controller("job_controller", function($scope, $http){
    $scope.displayData = function(){  
           $http.get("../php/select_recommended.php")  
           .success(function(data){  
                $scope.positions = data;  
           });  
      }
 });