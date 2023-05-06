<!-- fetch("data.json")
                .then(response => response.text())
                .then(result => get_data(JSON.parse(result)))
                .catch(error => console.log('error', error));

            function get_data(result) {
                var table = '';
                for (let i = 0; i < result.length; i++) {
                    const element = result[i];
                    search = $("#search").val();
                    console.log(search);
                    
                    if (element.email.includes(search)) {
                        table1 = `
                    <tr class="">
                            <td scope="row">${element.name}</td>
                            <td>${element.email}</td>
                            <td>${element.username}</td>
                        </tr>`;
                        
                        
                } 
                $("#table1").append(table1);
                        $("#table").addClass('d-none');
            }

            }
         -->
