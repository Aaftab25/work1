// / <reference path="shape.ts" />
// /// <reference path="triangle.ts" />
// /// <reference path="circle.ts" />
// import "./shape.ts";

// function drawShape(sap:Drawing.shape){
//     sap.draw()
// }

// drawShape(new Drawing.circle());
// drawShape(new Drawing.triangle());

function matrix(mat:any) {
    // console.log(mat);
    let ele2:any = []
    let ele3:any = []
    let ele4:any = []
    let ele5:any = []
    let n=10
    for (let i = 0; i < mat.length; i++) {
        // console.log(i);
        
        ele2.push(mat[i][0])
        ele3.push(mat[i][1])
        ele4.push(mat[i][2])
        
        }
        // console.log(ele2);
        // console.log(ele3);
        // console.log(ele4);
    ele5.push(ele2,ele3,ele4)
    console.log(ele5);
    
}

var data:number[][] = [[9,8,7],[6,5,4],[1,2,3]]

// console.log(data[0][0]);

matrix(data);