// / <reference path="shape.ts" />
// /// <reference path="triangle.ts" />
// /// <reference path="circle.ts" />
// import "./shape.ts";
// function drawShape(sap:Drawing.shape){
//     sap.draw()
// }
// drawShape(new Drawing.circle());
// drawShape(new Drawing.triangle());
function matrix(mat) {
    // console.log(mat);
    var ele2 = [];
    var ele3 = [];
    var ele4 = [];
    var ele5 = [];
    var n = 10;
    for (var i = 0; i < mat.length; i++) {
        // console.log(i);
        var e1 = ele2.push(mat[i][0]);
        var e2 = ele3.push(mat[i][1]);
        var e3 = ele4.push(mat[i][2]);
        // for (let j = 1; j < mat[i].length; j++) {
        //     // const element = j
        //     // console.log(j);
        // }
    }
    // console.log(ele2);
    // console.log(ele3);
    // console.log(ele4);
    ele5.push(ele2, ele3, ele4);
    console.log(ele5);
}
var data = [[9, 8, 7], [6, 5, 4], [1, 2, 3]];
// console.log(data[0][0]);
matrix(data);
