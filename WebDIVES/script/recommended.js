var app = angular.module("app",[]);  
 app.controller("job_controller", function($scope, $http){
      $scope.display = function(){  
           $http.get("../php/select_recommended.php")  
           .success(function(data){  
                $scope.order = data;  
           });  
      }
      $scope.action = function(Requirement1,Requirement2,Requirement3){  
           $http.get("../php/display_applicant.php", {'req1':Requirement1,'req2':Requirement2,'req3':Requirement3})  
           .success(function(data){  
                $scope.or() = data;  
           });  
      }
 });  