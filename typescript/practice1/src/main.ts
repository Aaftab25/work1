
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


  let Employee =
    [
      {  id:1001, name:"Aaftab", lastname:"Shaikh", address:"Vadodara", salary:5000},
      {  id:1002, name:"Jitendra", lastname:"Patidar", address:"Mandsoor", salary:5000},
      {  id:1003, name:"Kundan", lastname:"Rao", address:"Mandsoor", salary:5000},
      {  id:1004, name:"Jaydev", lastname:"Jagda", address:"Rajkot", salary:5000},
      {  id:1005, name:"Ankit", lastname:"Trivedi", address:"Rajkot", salary:5000}
    ]
  
  // Employee.splice(1, 1);
  var table1 = document.getElementById('table') as HTMLInputElement;

// console.log(Employee["employeeList"]);

// let empData = Employee;

            // var tableData = "";
          
          let addData = document.getElementById('add');
          addData?.addEventListener('click',function(){
      var name1 = (<HTMLInputElement>document.getElementById('name')).value;
              var lname1 = (<HTMLInputElement>document.getElementById('lname')).value;                                                                                                                                             
              var address1 = (<HTMLInputElement>document.getElementById('address')).value;
              var salary1 = (<HTMLInputElement>document.getElementById('salary')).value;

              if(name1==""||lname1==""||address1==""||salary1==""){
                alert("Fill Up The Details")
              }
              else{
                   var eid = Employee[Employee.length-1].id;
                   
                var empdetail:any={
                  id:eid+1,
                  name : name1,
                  lastname : lname1,
                  address : address1,
                  salary : salary1
                }    
                
                Employee.push(empdetail);
                console.log(Employee);
              }
              // console.log(Employee);
            
            })

        
        let getData = document.getElementById('get') ;
        getData?.addEventListener('click',function(){


          var table = `
                      <tr>
                          <th colspan="6"><h1 class=" p-3 text-center">This is all store Data</h1></th>
                      </tr>
                      <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Action</th>
                      </tr>`

          // var table = "";


          for(var x=0; x<Employee.length; x++){
          // console.log(Employee[x]);
          table += `<tr>
                  <td>${Employee[x].id}</td>
                  <td>${Employee[x].name}</td>
                  <td>${Employee[x].lastname}</td>
                  <td>${Employee[x].address}</td>
                  <td>${Employee[x].salary}</td>
                  <td><input type="button" class="btn btn-outline-danger" value="Delete" onClick="dele(${Employee[x].id})"></td>
              </tr>`;
              // var emid = Employee[x].id;
              // var table1 = document.getElementById('table') as HTMLInputElement;
              table1.innerHTML = table;
              // table1.innerHTML = table2;
            }
                    
        })

        // Employee.filter(dele);
      
        function dele(id:any){
             alert(id)
             console.log(Employee);

             Employee= Employee.filter((e)=> e.id != id)
             console.log(Employee);
            // Employee.splice(id, 1);
            // getda();
            getData?.click()
          }
          
          
          
        // }
        let empSer = document.getElementById('empSer');
        empSer?.addEventListener('click', function(){
          let empId = parseInt((<HTMLInputElement>document.getElementById('empId')).value);
          console.log(empId);
          var table = `
                      <tr>
                          <th colspan="6"><h1 class=" p-3 text-center">Serach By Employee Id Data</h1></th>
                      </tr>
                      <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Action</th>
                      </tr>`
                      var t=0;
          for(var x=0; x<Employee.length; x++){
            var eid = Employee[x].id
            
            if(empId == eid){
              t=1;
              table += `<tr>
              <td>${Employee[x].id}</td>
              <td>${Employee[x].name}</td>
              <td>${Employee[x].lastname}</td>
              <td>${Employee[x].address}</td>
              <td>${Employee[x].salary}</td>
         
                  <td><input type="button" class="btn btn-outline-danger" value="Delete" onClick="dele(${Employee[x].id})"></td>
          </tr>`;
          
          }

        }
          table1.innerHTML = table;

            if(t==0){
              table += "<tr><td colspan='6' class='text-center fs-2'>No Data Found</td></tr>";
            table1.innerHTML = table;
            }
        })

        let idxser = document.getElementById('idxser');

         idxser?.addEventListener('click',function(){
          let indexId = parseInt((<HTMLInputElement>document.getElementById('indexId')).value);
          console.log(indexId);
          var table = `
                      <tr>
                          <th colspan="6"><h1 class=" p-3 text-center">Serach By Index Number Data</h1></th>
                      </tr>
                      <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Action</th>
                      </tr>`
          // for(var x=0; x<Employee.length; x++){
          //   var eid = Employee[x].id
          // var table1 = document.getElementById('table') as HTMLInputElement;
            
            if(!isNaN(indexId)){  
              // console.log(indexID);
              
              let x = indexId
              table += `<tr>
              <td>${Employee[x].id}</td>
              <td>${Employee[x].name}</td>
              <td>${Employee[x].lastname}</td>
              <td>${Employee[x].address}</td>
              <td>${Employee[x].salary}</td>
         
                  <td><input type="button" class="btn btn-outline-danger" value="Delete" onClick="dele(${Employee[x].id})"></td>
          </tr>`;
          
          table1.innerHTML = table;

            }else{
              table += "<tr><td colspan='6' class='text-center fs-2'>No Data Found</td></tr>";
            table1.innerHTML = table;
              
            }
          // }


        })


   
            
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






