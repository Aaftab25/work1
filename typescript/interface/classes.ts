//class Example
class ElectricItem{
    laptop:string;
    constructor(laptop){
        this.laptop = laptop;
    }

    disp():void{
        console.log("Laptop is :"+this.laptop);
        
    }
}

var obj = new ElectricItem("Dell");

console.log("Reading Atribute Laptop is: "+obj.laptop);

obj.disp();

//class inheritance
class shape{
    area:number;

    constructor(a:number){
        this.area = a;
    }
}

class circle extends shape{
    disp():void{
        console.log("Area of Circle is: "+this.area);
    }   
}

var obj2 = new circle(223);
obj2.disp()

// class example 2

class root{
    msg:string;
}

class child extends root{}
class leaf extends child{}

var obj3 = new leaf();
obj3.msg = "HEllo";

console.log(obj3.msg);


//implements


// Creating an interface
