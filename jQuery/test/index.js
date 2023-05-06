  // $(function(){
  //   $("#accordion").accordion({collapsible:true});
  // });

  
  var settings = {
    "url": "https://apitutorial.dev.radixweb.net/api/user/63db87117dd58813f66398c9",
    "method": "GET",
    "timeout": 0,
    "headers": {
      "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYzZGI4NzExN2RkNTg4MTNmNjYzOThjOSIsInVzZXJuYW1lIjoiYWFmdGFiLnNoYWlraCIsImVtYWlsIjoic2hhaWtoYWFmdGFiMjUxMEBnbWFpbC5jb20iLCJyb2xlIjoiU3R1ZGVudCIsImlhdCI6MTY4MTIwMzUyNCwiZXhwIjoxNjgxMjIxNTI0fQ.TRvQcHdPWPWJMd8WU5rT2BfX57yBQc-fXQO_txk1eNA",
      "Content-Type": "text/plain"
    },
    "data": "63db6ec97dd58813f6639737",
  };
  
  $.ajax(settings).done(function (response) {
        // console.log(response);

    $(response).each((index,data)=>{

    
        var row = $("<tr></tr>");
        let Full_Name = `${data.fname} ${data.lname}`
          $("<td></td>").attr("class","text-center").text(`${Full_Name}`).appendTo(row);
          $("<td></td>").attr("class","text-center").text(`${data.username}`).appendTo(row);
          $("<td></td>").attr("class","text-center").text(`${data.email}`).appendTo(row);
          $("<td></td>").attr("class","text-center").text(`${data.empId}`).appendTo(row);
          $("<td></td>").html($("<button></button>").text("View Data").attr({id:"accordian", class:"btn btn-info"}))
        .attr({id:"accordian",class:"text-center"}).appendTo(row);
        // ${data._id}
        
        $(row).appendTo("#table");
    });

  });
  

  var settings = {
    "url": "https://apitutorial.dev.radixweb.net/api/exam-api/getSingleUserResult/63db87117dd58813f66398c9",
    "method": "GET",
    "timeout": 0,
    "headers": {
      "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYzZGI4NzExN2RkNTg4MTNmNjYzOThjOSIsInVzZXJuYW1lIjoiYWFmdGFiLnNoYWlraCIsImVtYWlsIjoic2hhaWtoYWFmdGFiMjUxMEBnbWFpbC5jb20iLCJyb2xlIjoiU3R1ZGVudCIsImlhdCI6MTY4MTIwMzUyNCwiZXhwIjoxNjgxMjIxNTI0fQ.TRvQcHdPWPWJMd8WU5rT2BfX57yBQc-fXQO_txk1eNA",
      "Content-Type": "text/plain"
    },
    "data": "    ",
  };
  
  $.ajax(settings).done(function (response) {
    console.log(response);


      let row1 = $("<tr></tr>");
      
        $("<th></th>").attr("class","hed").text('#').appendTo(row1);
        $("<th></th>").attr("class","hed").text('Course Name').appendTo(row1);
        $("<th></th>").attr("class","hed").text('Internal MCQ Mark').appendTo(row1);
        $("<th></th>").attr("class","hed").text('Internal Practical Mark').appendTo(row1);
        $("<th></th>").attr("class","hed").text('Review BY').appendTo(row1);
        $("<th></th>").attr("class","hed").text('External MCQ Mark').appendTo(row1);
        $("<th></th>").attr("class","hed").text('External Practical Mark').appendTo(row1);
        $("<th></th>").attr("class","hed").text('Review BY').appendTo(row1);

        $(row1).appendTo("#exResult")
    $(response).each((index,exdata)=>{
      
      var settings = {
        "url": "https://apitutorial.dev.radixweb.net/api/exam-api/getSingleUserResult/63db87117dd58813f66398c9",
        "method": "GET",
        "timeout": 0,
        "headers": {
          "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjYzZGI4NzExN2RkNTg4MTNmNjYzOThjOSIsInVzZXJuYW1lIjoiYWFmdGFiLnNoYWlraCIsImVtYWlsIjoic2hhaWtoYWFmdGFiMjUxMEBnbWFpbC5jb20iLCJyb2xlIjoiU3R1ZGVudCIsImlhdCI6MTY4MTIwMzUyNCwiZXhwIjoxNjgxMjIxNTI0fQ.TRvQcHdPWPWJMd8WU5rT2BfX57yBQc-fXQO_txk1eNA",
          "Content-Type": "text/plain"
        },
        "data": "    ",
      };
      
      $.ajax(settings).done(function (response) {
        console.log(response);
      });

      let row2 = $("<tr></tr>");

      console.log(exdata);
      let Immarks = Math.floor(exdata.internalExam.mcq[0]?.marks) || "";
      let Ipmarks = exdata.internalExam.practical[0]?.marks ;
      let reviewBy = exdata.internalExam.practical[0]?.reviewBy;
      let Emmarks = Math.floor(exdata.externalExam.mcq[0]?.marks) || "";
      let Epmarks = exdata.externalExam.practical[0]?.marks ;
      let EreviewBy = exdata.externalExam.practical[0]?.reviewBy;

        $("<td></td>").text(index+1).appendTo(row2);
        $("<td></td>").text(exdata.subCourceId.name).appendTo(row2);
        $("<td></td>").text(Immarks).appendTo(row2);
        $("<td></td>").text(Ipmarks).appendTo(row2);
        $("<td></td>").text(reviewBy).appendTo(row2); 
        $("<td></td>").text(Emmarks).appendTo(row2);
        $("<td></td>").text(Epmarks).appendTo(row2);
        $("<td></td>").text(EreviewBy).appendTo(row2);
        
        
        $(row2).appendTo("#exResult");
    });
  });

