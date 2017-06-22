var app = angular.module("appl",[]);  
 app.controller("rank_controller", function($scope, $http){
      $scope.action = function(){  
           $http.get("../php/display_applicant.php")  
           .success(function(data){  
                $scope.or()= data;  
           });  
      }
 });  