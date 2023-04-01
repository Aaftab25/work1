// import './style.css'


let Employee: any =
  [
    { id: 1001, name: "Aaftab", lastname: "Shaikh", address: "07 Vadodara Gujarat", salary: 5000 },
    { id: 1002, name: "Jitendra", lastname: "Patidar", address: "05 Mandsoor UP", salary: 5000 },
    { id: 1003, name: "Kundan", lastname: "Rao", address: "04 Mandsoor UP", salary: 5000 },
    { id: 1004, name: "Jaydev", lastname: "Jagda", address: "06 Rajkot Gujarat", salary: 5000 },
    { id: 1005, name: "Ankit", lastname: "Trivedi", address: "02 Rajkot Gujarat", salary: 5000 }
  ]

var tableData:any = document.getElementById('table');
var table = `<tr>
                <th>Full Name</th>
                <th>Flat No.</th>
                <th>City</th>
                <th>State</th>
                <th>Net Salary</th>
                <th>PF</th>
                <th>Gross Salary</th>
              </tr>`;
for (var i = 0; i < Employee.length; i++) {

  var fnmae = Employee[i].name + " " + Employee[i].lastname;
  // console.log(fnmae);

  var add = Employee[i].address.split(" ");
  // console.log(add[0]);
  var flat = add[0];
  var city = add[1];
  var state = add[2];

  var net_sly = parseInt(Employee[i].salary) * 80 / 100
  // console.log(net_sly);

  var pf = parseInt(Employee[i].salary) - net_sly;
  // console.log(pf);


  table += `<tr>
              <td>${fnmae}</td>
              <td>${flat}</td>
              <td>${city}</td>
              <td>${state}</td>
              <td>${net_sly}</td>
              <td>${pf}</td>
              <td>${Employee[i].salary}</td>
            </tr>`


}

tableData.innerHTML = table;
