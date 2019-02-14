<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>David Teutli - Portfolio - CLOCKINOUT</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                CLOCKINOUT
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Back to Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row mt-2">
            <div class="col-lg-3 col-md-12 col-sm-12 col-12 text-center px-1">
                <div class="card mb-2">
                    <div class="card-header bg-primary text-white p-1">
                        Project Information
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-justify">
                            CLOCKINOUT is a web application to keep track of employees' performance; here you can take
                            a look at one of the main components: the timetable.
                        </li>
                        <li class="list-group-item text-center">
                            <span class="badge badge-secondary">Lumen</span>
                            <span class="badge badge-secondary">PHP</span>
                            <span class="badge badge-secondary">JavaScript</span>
                            <span class="badge badge-secondary">Bootstrap</span>
                            <span class="badge badge-secondary">MySQL</span>
                            <span class="badge badge-secondary">Chart.js</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fab fa-github fa-fw"></i> <a href="https://github.com/dateutli/clockinout" target="_blank">
                                GitHub: CLOCKINOUT</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-9 col-md-12 px-1">
                <div class="card">
                    <div class="card-header bg-primary text-white p-1 text-center">
                        Timetable
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 pr-0 d-none d-md-block">
                                <table class="table table-sm text-center" id="users-names">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="1">Abbey
                                                    Harrison</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="2">Benjamin
                                                    Holmes</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-out"
                                                    data-toggle="modal" data-target="#modal" data-id="3">Cindy Torres</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="4">David Luna</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="5">Eloise Gates</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="6">Finn Botero</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="7">Gabriela
                                                    Martinez</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="8">Henry Jones</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="9">Isabel Smith</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="10">Jake Colins</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-lg-9 col-md-9 col-sm-12 col-12 pl-0">
                                <table class="table table-sm table-responsive" id="users-in">
                                    <thead>
                                        <tr>
                                            <th scope="col">6:00</th>
                                            <th scope="col">7:00</th>
                                            <th scope="col">8:00</th>
                                            <th scope="col">9:00</th>
                                            <th scope="col">10:00</th>
                                            <th scope="col">11:00</th>
                                            <th scope="col">12:00</th>
                                            <th scope="col">1:00</th>
                                            <th scope="col">2:00</th>
                                            <th scope="col">3:00</th>
                                            <th scope="col">4:00</th>
                                            <th scope="col">5:00</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="3"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="4"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="1"><span class="float-left">09:29</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="5"><button class="btn btn-warning btn-block employee-log employee-out"
                                                    data-toggle="modal" data-target="#modal" data-id="2"><span class="float-left">08:27</span>
                                                    - <span class="float-right">12:00</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="2"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="3"><span class="float-left">11:35</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="4"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="4"><span class="float-left">09:34</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="2"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="5"><span class="float-left">11:12</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="5"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="6"><span class="float-left">08:20</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="4"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="7"><span class="float-left">09:01</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr></tr>
                                        <tr>
                                            <td colspan="1"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="6"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="8"><span class="float-left">07:15</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="3"><button class="btn btn-warning btn-block employee-log employee-out"
                                                    data-toggle="modal" data-target="#modal" data-id="9"><span class="float-left">09:29</span>
                                                    - <span class="float-right">11:20</span></button></td>
                                            <td colspan="6"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="5"><button class="btn btn-warning btn-block employee-log employee-out"
                                                    data-toggle="modal" data-target="#modal" data-id="10"><span class="float-left">08:44</span>
                                                    - <span class="float-right">12:30</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title" id="modalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- <div>
                        <strong>Classification:</strong> <span id="classification"></span>
                        </div> -->
                        <canvas id="myChart" width="400" height="200"></canvas>
                        <table class="table table-sm" id="user-logs">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Classification</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>

    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var employees = [
            {
                name: "Abbey Harrison",
                hours: 12,
                classification: 'Undergraduate'
            },
            {
                name: "Benjamin Holmes",
                hours: 32,
                classification: 'Undergraduate'
            },
            {
                name: "Cindy Torres",
                hours: 29,
                classification: 'Graduate'
            },
            {
                name: "David Luna",
                hours: 13,
                classification: 'Undergraduate'
            },
            {
                name: "Eloise Gates",
                hours: 7,
                classification: 'Undergraduate'
            },
            {
                name: "Finn Botero",
                hours: 20,
                classification: 'Graduate'
            },
            {
                name: "Gabriela Martinez",
                hours: 33,
                classification: 'Graduate'
            },
            {
                name: "Henry Jones",
                hours: 39,
                classification: 'Undergraduate'
            },
            {
                name: "Isabel Smith",
                hours: 3,
                classification: 'Undergraduate'
            },
            {
                name: "Jake Colins",
                hours: 11,
                classification: 'Graduate'
            }
        ];

        var loadBarChart = (id) => {
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Weekly Hours"],
                    datasets: [{
                        label: '# of hours',
                        data: [employees[id].hours],
                        backgroundColor: '#074fc1'
                    }]
                },
                options: {
                    tooltips: {
                        enabled: false
                    },
                    hover: {
                        mode: null
                    },
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }

        $('.employee-log').click(function () {
            $('#user-logs tbody tr').remove();
            let id = $(this).data('id') - 1;
            loadBarChart(id);
            let tr = '<tr>\
            <td>'+ employees[id].name + '</td>\
            <td>'+ employees[id].classification + '</td>\
            </tr>';
            $('#user-logs').append(tr);
        });
    </script>

</body>

</html>