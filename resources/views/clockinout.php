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
            <div class="col-lg-3 col-md-4 col-sm-12 col-12 text-center px-1">
                <div class="card mb-2">
                    <div class="card-header bg-primary text-white p-1">
                        Project Information
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-justify">
                            CLOCKINOUT is a web application to keep track of employees' performance; here you can take a look at one of the main components: the timetable.
                        </li>
                        <li class="list-group-item text-center">
                            <span class="badge badge-secondary">Lumen</span>
                            <span class="badge badge-secondary">PHP</span>
                            <span class="badge badge-secondary">JavaScript</span>
                            <span class="badge badge-secondary">Bootstrap</span>
                            <span class="badge badge-secondary">MySQL</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fab fa-github fa-fw"></i> <a href="https://github.com/dateutli/clockinout"> GitHub: CLOCKINOUT</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header bg-primary text-white p-1 text-center">
                        Timetable
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 pr-0">
                                <table class="table table-sm text-center" id="users-names">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="24">Abbey
                                                    Harrison</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="100">Benjamin
                                                    Holmes</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-out"
                                                    data-toggle="modal" data-target="#modal" data-id="67">Cindy Torres</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="104">David Luna</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="26">Eloise Gates</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="11">Finn Botero</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="29">Gabriela
                                                    Martinez</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="28">Henry Jones</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="111">Isabel Smith</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-secondary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="102">Jake Colins</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-lg-9 col-md-9 col-sm-12 col-12 pl-0">
                                <table class="table table-sm" id="users-in">
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
                                                    data-toggle="modal" data-target="#modal" data-id="24"><span class="float-left">09:29</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="5"><button class="btn btn-warning btn-block employee-log employee-out"
                                                    data-toggle="modal" data-target="#modal" data-id="67"><span class="float-left">08:27</span>
                                                    - <span class="float-right">12:00</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="2"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="104"><span class="float-left">11:35</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="4"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="26"><span class="float-left">09:34</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="2"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="29"><span class="float-left">11:12</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="5"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="28"><span class="float-left">08:20</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="4"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="107"><span class="float-left">09:01</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr></tr>
                                        <tr>
                                            <td colspan="1"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="6"><button class="btn btn-primary btn-block employee-log employee-in"
                                                    data-toggle="modal" data-target="#modal" data-id="32"><span class="float-left">07:15</span></button></td>
                                            <td colspan="5"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="3"><button class="btn btn-warning btn-block employee-log employee-out"
                                                    data-toggle="modal" data-target="#modal" data-id="112"><span class="float-left">09:29</span>
                                                    - <span class="float-right">11:20</span></button></td>
                                            <td colspan="6"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button class="btn btn-default btn-block" disabled="">-</button></td>
                                            <td colspan="5"><button class="btn btn-warning btn-block employee-log employee-out"
                                                    data-toggle="modal" data-target="#modal" data-id="108"><span class="float-left">08:44</span>
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

    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>