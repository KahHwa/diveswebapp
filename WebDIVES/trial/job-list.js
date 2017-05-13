angular.module('jobList', [])
    .controller('JobListController', function(){
        var jobList = this;
        jobList.jobs = [
            {
                name:'software engineer',
                desc:'none',
                vacancy:'1',
                requirement1:'html',
                requirement2:'html',
                requirement3:'html'
            },
            {
                name:'software engineer',
                desc:'none',
                vacancy:'2',
                requirement1:'css',
                requirement2:'css',
                requirement3:'css'
            }
        ];

        jobList.addJobList = function(){
            jobList.jobs.push(
                {
                    name:jobList.jobname,
                    desc:jobList.jobdesc,
                    vacancy:jobList.jobvacancy,
                    requirement1:jobList.jobrequirement1,
                    requirement2:jobList.jobrequirement2,
                    requirement3:jobList.jobrequirement3
                }
            );
            jobList.jobname = '';
            jobList.jobdesc = '';
            jobList.jobvacancy = '';
            jobList.jobrequirement1 = '';
            jobList.jobrequirement2 = '';
            jobList.jobrequirement3 = '';
        };
    });