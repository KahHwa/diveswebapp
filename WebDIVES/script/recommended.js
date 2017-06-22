var app = angular.module("app",[]);  
 app.controller("job_controller", function($scope, $http){
      $scope.display = function(){  
           $http.get("../php/select_recommended.php")  
           .success(function(data){  
                $scope.order = data;  
           });  
      }
});  
var app = angular.module("appl",[]);  
 app.controller("rank_controller", function($scope, $http){

      $scope.dis = function(){  
           $http.get("../php/display_applicant.php")  
           .success(function(data){  
                $scope.or()= data;  
           });  
      }
 });  