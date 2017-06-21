var app = angular.module("app",[]);  
 app.controller("job_controller", function($scope, $http){
      $scope.display = function(){  
           $http.get("../php/select_recommended.php")  
           .success(function(data){  
                $scope.order = data;  
           });  
      }
      $scope.action = function(){  
           $http.get("../php/rankalgo.php")  
           .success(function(data){  
                $scope.order = data;  
           });  
      }
});