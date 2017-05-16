var app = angular.module("myapp",[]);
app.controller("jobcontroller", function($scope, $http){
    $scope.btnName = "ADD";
    $scope.insertData = function(){
        if($scope.position == null)
        {
            alert("Position is required");
        }
        else if($scope.requirement1 == null)
        {
            alert("Requirement is required");
        }
        else if($scope.requirement2 == null)
        {
            alert("Requirement is required");
        }
        else if($scope.requirement3 == null)
        {
            alert("Requirement is required");
        }
        else if($scope.vacancy == null)
        {
            alert("Vacancy is required");
        }
        else if($scope.applicant == null)
        {
            alert("Applicant is required");
        }
        else if($scope.fp == null)
        {
            alert("This field is required");
        }
        else{
            $http.post("insertjob.php",
            {'position':$scope.position, 
            'requirement1':$scope.requirement1, 
            'requirement2':$scope.requirement2, 
            'requirement3':$scope.requirement3, 
            'vacancy':$scope.vacancy, 
            'applicant':$scope.applicant, 
            'fp':$scope.fp}
            ).success(function(data){
                alert(data);
                $scope.position = null;
                $scope.requirement1 = null;
                $scope.requirement2 = null;
                $scope.requirement3 = null;
                $scope.vacancy = null;
                $scope.applicant = null;
                $scope.fp = null;
                $scope.btnName = "ADD";
                $scope.displayData();
            });
        }
    }
    $scope.displayData = function(){
        $http.get("selectjob.php")
        .success(function(data){
            $scope.positions = data;
        });
    }
    $scope.updateData = function(Id, Position, Requirement1, Requirement2, Requirement3, Vacancy, Applicant, FP){
        $scope.jobid = Id;
        $scope.position = Position;
        $scope.requirement1 = Requirement1;
        $scope.requirement2 = Requirement2;
        $scope.requirement3 = Requirement3;
        $scope.vacancy = Vacancy;
        $scope.applicant = Applicant;
        $scope.fp = FP;
        $scope.btnName = "Update";
    }
    $scope.deleteData = function(Id){
        if(confirm("Are you sure want to delete this data?")){
            $http.post("delete.php", {'jobid':Id})
            .success(function(data){
                alert(data);
                $scope.displayData();
            });
        }
        else{
            return false;
        }
    }
})