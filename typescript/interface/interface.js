// Object
var employee = {
    firstname: "Aaftab",
    lastname: "shaikh",
    commandLine: "hii"
};
console.log("Employee");
console.log(employee.firstname);
console.log(employee.lastname);
//commandLine as string
console.log(employee.commandLine);
//commandLine as array
employee = { commandLine: ["Hii", "Friend"] };
console.log(employee.commandLine[0]);
console.log(employee.commandLine[1]);
employee = { commandLine: function () { return "***HIi Friends***"; } };
var cm = employee.commandLine;
console.log(cm());
var drummer = {};
drummer.name = "Bawalsing";
drummer.instrumaent = "Drum";
console.log("Name :" + drummer.name);
console.log("Instrument :" + drummer.instrumaent);
var Car = /** @class */ (function () {
    //constructor 
    function Car(engine) {
        this.engine = engine;
    }
    //function 
    Car.prototype.disp = function () {
        console.log("Function displays Engine is  :   " + this.engine);
    };
    return Car;
}());
//create an object 
var obj = new Car("XXSY1");
//access the field 
console.log("Reading attribute value Engine as :  " + obj.engine);
//access the function
obj.disp();
