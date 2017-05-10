angular.module('jobList', [])
    .controller('JobListController', function(){
        var jobList = this;
        jobList.jobs = [
            {
                name:'software engineer',
                desc:'none',
                vacancy:'1',
                requirement:'html'
            },
            {
                name:'software engineer',
                desc:'none',
                vacancy:'2',
                requirement:'css'
            }
        ];

        jobList.addJobList = function(){
            jobList.jobs.push(
                {
                    name:jobList.jobname,
                    desc:jobList.jobdesc,
                    vacancy:jobList.jobvacancy,
                    requirement:jobList.jobrequirement
                }
            );
            jobList.jobname = '';
            jobList.jobdesc = '';
            jobList.jobvacancy = '';
            jobList.jobrequirement = '';
        };
    });