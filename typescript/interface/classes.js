var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
//class Example
var ElectricItem = /** @class */ (function () {
    function ElectricItem(laptop) {
        this.laptop = laptop;
    }
    ElectricItem.prototype.disp = function () {
        console.log("Laptop is :" + this.laptop);
    };
    return ElectricItem;
}());
var obj = new ElectricItem("Dell");
console.log("Reading Atribute Laptop is: " + obj.laptop);
obj.disp();
//class inheritance
var shape = /** @class */ (function () {
    function shape(a) {
        this.area = a;
    }
    return shape;
}());
var circle = /** @class */ (function (_super) {
    __extends(circle, _super);
    function circle() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    circle.prototype.disp = function () {
        console.log("Area of Circle is: " + this.area);
    };
    return circle;
}(shape));
var obj2 = new circle(223);
obj2.disp();
// class example 2
var root = /** @class */ (function () {
    function root() {
    }
    return root;
}());
var child = /** @class */ (function (_super) {
    __extends(child, _super);
    function child() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    return child;
}(root));
var leaf = /** @class */ (function (_super) {
    __extends(leaf, _super);
    function leaf() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    return leaf;
}(child));
var obj3 = new leaf();
obj3.msg = "HEllo";
console.log(obj3.msg);
var B = /** @class */ (function () {
    function B() {
    }
    B.prototype.display = function () {
        console.log("B");
    };
    return B;
}());
