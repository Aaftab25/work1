import './style.css'


let Employee =
   [
    {  id:1001, name:"Aaftab", lastname:"Shaikh", address:"Vadodara", salary:5000},
    {  id:1002, name:"Jitendra", lastname:"Patidar", address:"Mandsoor", salary:5000},
    {  id:1003, name:"Kundan", lastname:"Rao", address:"Mandsoor", salary:5000},
    {  id:1004, name:"Jaydev", lastname:"Jagda", address:"Rajkot", salary:5000},
    {  id:1005, name:"Ankit", lastname:"Trivedi", address:"Rajkot", salary:5000}
  ]

for(var i=0; i<Employee.length; i++){
  var emo = Employee[i].name.split("")
  console.log(emo);
  
}