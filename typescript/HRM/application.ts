interface application{
    aid:number;
    name:string;
    email:any;
    phone:number;
    resume:string;
    appliDate:Date;
    status:string
}

var applicationData:application[] = [
    {aid:1001, name:"Aaftab", email:"aaftab@gmail.com", phone:9988776655, resume:"app1",appliDate:new Date('2022-12-2'), status:"Interview1"},
    {aid:1002, name:"Anish", email:"aaftab1@gmail.com", phone:9988776565, resume:"app1",appliDate:new Date('2022-12-2'), status:"Interview1"},
    {aid:1003, name:"Kushir", email:"aaftab12@gmail.com", phone:9988767655, resume:"app1",appliDate:new Date('2022-12-2'), status:"Interview1"}
]
console.log(applicationData);
