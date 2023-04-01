/// <reference path="shape.ts" />
// import {shape} from ./shape.ts
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
