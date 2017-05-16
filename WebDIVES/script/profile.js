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
        else if($scope.applicants == null)
        {
            alert("Applicants is required");
        }
        else if($scope.job_status == null)
        {
            alert("This field is required");
        }
        else{
            $http.post(
                "../php/insert_job.php",
                {'position':$scope.position, 'requirement1':$scope.requirement1, 'requirement2':$scope.requirement2, 'requirement3':$scope.requirement3, 'vacancy':$scope.vacancy, 'applicants':$scope.applicants, 'job_status':$scope.job_status, 'btnName':$scope.btnName, 'jobid':$scope.jobid}
            ).success(function(data){
                alert(data);
                $scope.position = null;
                $scope.requirement1 = null;
                $scope.requirement2 = null;
                $scope.requirement3 = null;
                $scope.vacancy = null;
                $scope.applicants = null;
                $scope.job_status = null;
                $scope.btnName = "ADD";
                $scope.displayData();
            });
        }
    }
    $scope.displayData = function(){
        $http.get("../php/select_job.php")
        .success(function(data){
            $scope.positions = data;
        });
    }
    $scope.updateData = function(Id, position, Requirement1, Requirement2, Requirement3, Vacancy, Applicants, Job_status){
        $scope.jobid = Id;
        $scope.position = position;
        $scope.requirement1 = Requirement1;
        $scope.requirement2 = Requirement2;
        $scope.requirement3 = Requirement3;
        $scope.vacancy = Vacancy;
        $scope.applicants = Applicants;
        $scope.job_status = Job_status;
        $scope.btnName = "Update";
    }
    $scope.deleteData = function(Id){
        if(confirm("Are you sure want to delete this data?")){
            $http.post("../php/delete_job.php", {'jobid':Id})
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