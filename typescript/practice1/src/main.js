import './style.css';
template: `
  <h1>{{title}}</h1>
  <h2>My favorite hero is: {{myHero}}</h2>
  `;
//-----------------------------------String-------------------------------------  
// let Name:string = "Aaftab";
// let Dept:string = "Developer";
// let empdes1:string = Name + " Work in " + Dept + " Department.";
// let empdes2:string = `${Name} Work in ${Dept} Department.`;
// console.log(empdes1);
// console.log(empdes2);
// //-----------------------------------Any-------------------------------------  
// function Data(x:any, y:any){
//   return x+y;
// }
// console.log(Data("Aaftab ","Shaikh"));
// console.log(Data(25,22));
// //-----------------------------------Array-------------------------------------  
// var list:number[] = [1,2,3,4,5];
// console.log(list);
// var list1: Array<number> = [1,2,3,4,5]
// console.log(list1);
// //-----------------------------------Array-------------------------------------  
// let values: (string | number)[]=["Mango",1,"Apple",2,"Orage",5];
// console.log(values);
// // let value1: Array<string | number>=['Mango',1,"Apple",2,"Orage",5];
// // console.log(values1);
// //-----------------------------------Accessing Array  Elements-------------------------------------  
// let list2: string[] = ["Apple","Mango","Banana","Orange"];
// for(var i=0; i<list2.length; i++){
//   console.log(list2[i])
// }
// //-----------------------------------Enum-------------------------------------  
// enum color{
//   red,
//   yellow,
//   blue,
// }
// let c: color = color.blue;
// console.log(c);
//-----------------------------------Assignment 1-------------------------------------  
let Employee = [
    { id: 1, name: "Aaftab", lastname: "Shaikh", address: "Vadodara", salary: 5000 },
    { id: 2, name: "Jitendra", lastname: "Patidar", address: "Mandsoor", salary: 5000 },
    { id: 3, name: "Kundan", lastname: "Rao", address: "Mandsoor", salary: 5000 },
    { id: 4, name: "Jaydev", lastname: "Jagda", address: "Rajkot", salary: 5000 },
    { id: 5, name: "Ankit", lastname: "Trivedi", address: "Rajkot", salary: 5000 },
];
var empdetail = {
    id: 6,
    name: "AAftab",
    lastname: "Shakh",
    address: "PAni",
    salary: 50001
};
Employee.push(empdetail);
console.log(Employee);
// console.log(Employee["employeeList"]);
// let empData = Employee;
// var tableData = "";
var table = "";
for (var x = 0; x < Employee.length; x++) {
    // console.log(Employee[x]);
    table += `<tr>
                <td>${Employee[x].id}</td>
                <td>${Employee[x].name}</td>
                <td>${Employee[x].lastname}</td>
                <td>${Employee[x].address}</td>
                <td>${Employee[x].salary}</td>
              
            </tr>`;
}
var table1 = document.getElementById('table');
table1.innerHTML = table;
//@ts-ignore;
// function newData(name,lastname,address,salary):any{
// var name1 = (<HTMLInputElement>document.getElementById('name')).value;
// var lname1 = (<HTMLInputElement>document.getElementById('lname')).value;
// var address1 = (<HTMLInputElement>document.getElementById('address')).value;
// var salary1 = (<HTMLInputElement>document.getElementById('salary')).value;
// console.log(name);
// console.log(lname);
// console.log(address);
// console.log(salary);
// name = name1; 
// lastname =   lname1;  
// address =   address1;
// salary   =     salary1;
// }
// let message= "Hello Friend";
// let msg: string = "The Above string  is "+message;
// console.log(msg);
// function mention():void{
//   alert("This is welcomming Msg");
// }
// let someValue: unknown = "this is a string";
// let strLength: number = (someValue as string).length;
// console.log(strLength);
// function reverse(s:any):String{
//   return s.split("").reverse().join("");
// }
// console.log(reverse("utiJ"));
