interface vacancy{
    jid:number;
    jobName:string;
    JDesc:string;
    location:string;
    vacancies?:number;
}

var vacancyD:vacancy[]=[
    {jid:1, jobName:"Software Developer", JDesc:"About Job Related", location:"Ahemadabad", vacancies:5 },
    {jid:2, jobName:"Full Stack Developer", JDesc:"About Job Related", location:"Ahemadabad", vacancies:10 },
    {jid:3, jobName:"Back-End Developer", JDesc:"About Job Related", location:"Ahemadabad", vacancies:2 }
]

console.log(vacancyD);

