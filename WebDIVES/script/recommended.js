var app = angular.module("myapp",[]);  
 app.controller("job_controller", function($scope, $http){
        $scope.displayData = function(){  
           $http.get("../php/select_recommended.php")  
           .success(function(data){  
                $scope.positions = data;  
           });  
      }
 

 /*$scope.showRank = function(Id){
     $scope.jobid= Id;
        if(confirm("Show Rank for Job Id ", $scope.jobid , "?")){
            $http.post("../php/showrank.php", {'jobid':Id})
            .success(function(data){
                alert(data);
                $scope.displayData();
            });
        }
        else{
            return false;
        }
    }
    */
})