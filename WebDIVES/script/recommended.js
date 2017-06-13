var app = angular.module("myapp",[]);  
 app.controller("jobcontroller", function($scope, $http){
    $scope.displayData = function(){  
           $http.get("select_job.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }
 });