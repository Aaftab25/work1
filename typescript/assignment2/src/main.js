// import './style.css'
var Employee = [
    { id: 1001, name: "Aaftab", lastname: "Shaikh", address: "07 Vadodara Gujarat", salary: 5000 },
    { id: 1002, name: "Jitendra", lastname: "Patidar", address: "05 Mandsoor UP", salary: 5000 },
    { id: 1003, name: "Kundan", lastname: "Rao", address: "04 Mandsoor UP", salary: 5000 },
    { id: 1004, name: "Jaydev", lastname: "Jagda", address: "06 Rajkot Gujarat", salary: 5000 },
    { id: 1005, name: "Ankit", lastname: "Trivedi", address: "02 Rajkot Gujarat", salary: 5000 }
];
var tableData = document.getElementById('table');
var table = "<tr>\n                <th>Full Name</th>\n                <th>Flat No.</th>\n                <th>City</th>\n                <th>State</th>\n                <th>Net Salary</th>\n                <th>PF</th>\n                <th>Gross Salary</th>\n              </tr>";
for (var i = 0; i < Employee.length; i++) {
    var fnmae = Employee[i].name + " " + Employee[i].lastname;
    // console.log(fnmae);
    var add = Employee[i].address.split(" ");
    // console.log(add[0]);
    var flat = add[0];
    var city = add[1];
    var state = add[2];
    var net_sly = parseInt(Employee[i].salary) * 80 / 100;
    // console.log(net_sly);
    var pf = parseInt(Employee[i].salary) - net_sly;
    // console.log(pf);
    table += "<tr>\n              <td>".concat(fnmae, "</td>\n              <td>").concat(flat, "</td>\n              <td>").concat(city, "</td>\n              <td>").concat(state, "</td>\n              <td>").concat(net_sly, "</td>\n              <td>").concat(pf, "</td>\n              <td>").concat(Employee[i].salary, "</td>\n            </tr>");
}
tableData.innerHTML = table;
