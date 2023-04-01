//------------------------------------------------------------------Practice 1---------------------------------------------------------------------------------------------------  
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
//--------------------------------------------------------------------------Assignment 1----------------------------------------------------------------------------  
var Employee = [
    { id: 1001, name: "Aaftab", lastname: "Shaikh", address: "Vadodara", salary: 5000 },
    { id: 1002, name: "Jitendra", lastname: "Patidar", address: "Mandsoor", salary: 5000 },
    { id: 1003, name: "Kundan", lastname: "Rao", address: "Mandsoor", salary: 5000 },
    { id: 1004, name: "Jaydev", lastname: "Jagda", address: "Rajkot", salary: 5000 },
    { id: 1005, name: "Ankit", lastname: "Trivedi", address: "Rajkot", salary: 5000 }
];
// Employee.splice(1, 1);
var table1 = document.getElementById('table');
// console.log(Employee["employeeList"]);
// let empData = Employee;
// var tableData = "";
var addData = document.getElementById('add');
addData === null || addData === void 0 ? void 0 : addData.addEventListener('click', function () {
    var name1 = document.getElementById('name').value;
    var lname1 = document.getElementById('lname').value;
    var address1 = document.getElementById('address').value;
    var salary1 = document.getElementById('salary').value;
    if (name1 == "" || lname1 == "" || address1 == "" || salary1 == "") {
        alert("Fill Up The Details");
    }
    else {
        var eid = Employee[Employee.length - 1].id;
        var empdetail = {
            id: eid + 1,
            name: name1,
            lastname: lname1,
            address: address1,
            salary: salary1
        };
        Employee.push(empdetail);
        console.log(Employee);
    }
    // console.log(Employee);
});
var getData = document.getElementById('get');
getData === null || getData === void 0 ? void 0 : getData.addEventListener('click', function () {
    var table = "\n                      <tr>\n                          <th colspan=\"6\"><h1 class=\" p-3 text-center\">This is all store Data</h1></th>\n                      </tr>\n                      <tr>\n                        <th>Id</th>\n                        <th>First Name</th>\n                        <th>Last Name</th>\n                        <th>Address</th>\n                        <th>Salary</th>\n                        <th>Action</th>\n                      </tr>";
    // var table = "";
    for (var x = 0; x < Employee.length; x++) {
        // console.log(Employee[x]);
        table += "<tr>\n                  <td>".concat(Employee[x].id, "</td>\n                  <td>").concat(Employee[x].name, "</td>\n                  <td>").concat(Employee[x].lastname, "</td>\n                  <td>").concat(Employee[x].address, "</td>\n                  <td>").concat(Employee[x].salary, "</td>\n                  <td><input type=\"button\" class=\"btn btn-outline-danger\" value=\"Delete\" onClick=\"dele(").concat(Employee[x].id, ")\"></td>\n              </tr>");
        // var emid = Employee[x].id;
        // var table1 = document.getElementById('table') as HTMLInputElement;
        table1.innerHTML = table;
        // table1.innerHTML = table2;
    }
});
// Employee.filter(dele);
function dele(id) {
    alert(id);
    console.log(Employee);
    Employee = Employee.filter(function (e) { return e.id != id; });
    console.log(Employee);
    // Employee.splice(id, 1);
    // getda();
    getData === null || getData === void 0 ? void 0 : getData.click();
}
// }
var empSer = document.getElementById('empSer');
empSer === null || empSer === void 0 ? void 0 : empSer.addEventListener('click', function () {
    var empId = parseInt(document.getElementById('empId').value);
    console.log(empId);
    var table = "\n                      <tr>\n                          <th colspan=\"6\"><h1 class=\" p-3 text-center\">Serach By Employee Id Data</h1></th>\n                      </tr>\n                      <tr>\n                        <th>Id</th>\n                        <th>First Name</th>\n                        <th>Last Name</th>\n                        <th>Address</th>\n                        <th>Salary</th>\n                        <th>Action</th>\n                      </tr>";
    var t = 0;
    for (var x = 0; x < Employee.length; x++) {
        var eid = Employee[x].id;
        if (empId == eid) {
            t = 1;
            table += "<tr>\n              <td>".concat(Employee[x].id, "</td>\n              <td>").concat(Employee[x].name, "</td>\n              <td>").concat(Employee[x].lastname, "</td>\n              <td>").concat(Employee[x].address, "</td>\n              <td>").concat(Employee[x].salary, "</td>\n         \n                  <td><input type=\"button\" class=\"btn btn-outline-danger\" value=\"Delete\" onClick=\"dele(").concat(Employee[x].id, ")\"></td>\n          </tr>");
        }
    }
    table1.innerHTML = table;
    if (t == 0) {
        table += "<tr><td colspan='6' class='text-center fs-2'>No Data Found</td></tr>";
        table1.innerHTML = table;
    }
});
var idxser = document.getElementById('idxser');
idxser === null || idxser === void 0 ? void 0 : idxser.addEventListener('click', function () {
    var indexId = parseInt(document.getElementById('indexId').value);
    console.log(indexId);
    var table = "\n                      <tr>\n                          <th colspan=\"6\"><h1 class=\" p-3 text-center\">Serach By Index Number Data</h1></th>\n                      </tr>\n                      <tr>\n                        <th>Id</th>\n                        <th>First Name</th>\n                        <th>Last Name</th>\n                        <th>Address</th>\n                        <th>Salary</th>\n                        <th>Action</th>\n                      </tr>";
    // for(var x=0; x<Employee.length; x++){
    //   var eid = Employee[x].id
    // var table1 = document.getElementById('table') as HTMLInputElement;
    if (!isNaN(indexId)) {
        // console.log(indexID);
        var x = indexId;
        table += "<tr>\n              <td>".concat(Employee[x].id, "</td>\n              <td>").concat(Employee[x].name, "</td>\n              <td>").concat(Employee[x].lastname, "</td>\n              <td>").concat(Employee[x].address, "</td>\n              <td>").concat(Employee[x].salary, "</td>\n         \n                  <td><input type=\"button\" class=\"btn btn-outline-danger\" value=\"Delete\" onClick=\"dele(").concat(Employee[x].id, ")\"></td>\n          </tr>");
        table1.innerHTML = table;
    }
    else {
        table += "<tr><td colspan='6' class='text-center fs-2'>No Data Found</td></tr>";
        table1.innerHTML = table;
    }
    // }
});
//@ts-ignore;
// function newData(name,lastname,address,salary):any{
// console.log(name);
// console.log(lname);
// console.log(address);
// console.log(salary);
// name = name1; 
// lastname =   lname1;  
// address =   address1;
// salary   =     salary1;
// }
//Function Definition  
// function display() {  
//   console.log("Hello JavaTpoint!");  
// }  
//Function Call  
// display();  
// var Id: HTMLInputElement = <HTMLInputElement>document.getElementById("Id")
// function getModels() {
//     let quantity:HTMLInputElement=<HTMLInputElement>document.createElement("input");
//     quantity.type = "number"
//     quantity.id = "quan"
//     document.body.appendChild(quantity)
//     var getQuantity:HTMLInputElement=<HTMLInputElement>document.getElementById("quan");
//     var btn:HTMLButtonElement=<HTMLButtonElement>document.createElement("button");
//     btn.onclick="getquantity()"
//     Display.innerHTML += getQuantity 
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
