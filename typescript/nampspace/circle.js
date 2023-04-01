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
