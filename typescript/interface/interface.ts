// Interface Example
interface person{
    firstname?:string;
    lastname?:string;
    commandLine: string[]|string|( ()=> string)
}

// Object
var employee:person = {
    firstname:"Aaftab",
    lastname:"shaikh",
    commandLine: "hii"
}

console.log("Employee");
console.log(employee.firstname);
console.log(employee.lastname);
//commandLine as string
console.log(employee.commandLine);

//commandLine as array
employee = { commandLine:["Hii","Friend"]}
console.log(employee.commandLine[0]);
console.log(employee.commandLine[1]);

employee = {commandLine:():string=>{return "***HIi Friends***"}}
var cm:any = employee.commandLine;
console.log(cm());

//interface inheritance

interface people{
    name:string;
}

interface musician extends people{
    instrumaent:string;
}

var drummer=<musician>{};

drummer.name = "Bawalsing";
drummer.instrumaent = "Drum";

console.log("Name :"+drummer.name)
console.log("Instrument :"+drummer.instrumaent);




