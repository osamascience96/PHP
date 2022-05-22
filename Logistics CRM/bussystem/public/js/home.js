let clientList = null;
let companiesList = null;
let employeeList = [];

document.addEventListener('DOMContentLoaded', event => {
    
    GetCompanies();

    function GetCompanies(){
        var settings = {
            "url": `${window.location.origin}/bussystem/Company/GetAllUserEmployees`,
            "method": "GET",
            "timeout": 0,
          };
          
          $.ajax(settings).done(function (response) {
              var jsonRespnse = JSON.parse(response);
              companiesList = jsonRespnse;

              companiesList.forEach(item => {
                  GetEmployees(item.id);
              });

              GetClients();
          })
    }

    function GetClients(){
        var settings = {
            "url": `${window.location.origin}/bussystem/Client/GetAllUserClients`,
            "method": "GET",
            "timeout": 0,
          };
          
          $.ajax(settings).done(function (response) {
              var jsonRespnse = JSON.parse(response);
              clientList = jsonRespnse;
          }).done(() => {
              // Load the Pie Chart
              LoadPieChart();
          });
    }

    function GetEmployees(id){
        var settings = {
            "url": `${window.location.origin}/bussystem/Employee/GetAllUserEmployees`,
            "method": "POST",
            "timeout": 0,
            "data": {
                "companyId": id
            }
          };
          
          $.ajax(settings).done(function (response) {
              var jsonRespnse = JSON.parse(response);

              jsonRespnse.forEach(item => {
                  employeeList.push(item);
              });
          });
    }

    function LoadPieChart(){
        var context = document.getElementById('piechart').getContext('2d');

        var pieChart = new Chart(context, {
            type: 'pie',
            data: {
                datasets:[{
                    data:[clientList.length, companiesList.length, employeeList.length],
                    backgroundColor: ['#28a745', '#007bff', '#17a2b8']
                }],

                labels:[
                    'Your Clients',
                    'Your Companies',
                    'Your Employees'
                ]
            },
        });
    }
});