var app = angular.module("apps",[]);  
 app.controller("rank_controller", function($scope, $http){
      $scope.action = function(){  
           $http.get("../php/display_applicant.php")  
           .success(function(data){  
                $scope.or = data;  
           });  
      }
 });  