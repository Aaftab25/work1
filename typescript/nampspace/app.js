/// <reference path="shape.ts" />
var Drawing;
(function (Drawing) {
    var triangle = /** @class */ (function () {
        function triangle() {
        }
        triangle.prototype.draw = function () {
            console.log("Triangle is drown");
        };
        return triangle;
    }());
    Drawing.triangle = triangle;
})(Drawing || (Drawing = {}));
/// <reference path = "shape.ts" />
var Drawing;
(function (Drawing) {
    var circle = /** @class */ (function () {
        function circle() {
        }
        circle.prototype.draw = function () {
            console.log("Circle is drawn");
        };
        return circle;
    }());
    Drawing.circle = circle;
})(Drawing || (Drawing = {}));
/// <reference path="shape.ts" />
/// <reference path="triangle.ts" />
/// <reference path="circle.ts" />
function drawShape(sap) {
    sap.draw();
}
drawShape(new Drawing.circle());
drawShape(new Drawing.triangle());
