<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>David Teutli - Portfolio - Trackr</title>
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
                TRACKR
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
                    <div class="card-header bg-info text-white p-1">
                        Project Information
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-left">
                            TRACKR is a web application to monitor the position of GPS trackers in real-time.
                            Here is an example of the main component, "live-view", with a geofence and a vehicle status bar.
                        </li>
                        <li class="list-group-item">
                            <button class="btn btn-primary btn-block" onclick="toggleGeofence();">
                                <i class="fas fa-vector-square fa-fw"></i> Toggle Geofence
                            </button>
                        </li>
                        <li class="list-group-item" id="bounds-alert">
                            <div class="alert alert-success mb-1" role="alert">
                                Vehicle #1 is within bounds!
                            </div>
                        </li>
                        <li class="list-group-item text-left">
                            <span class="badge badge-secondary">Lumen</span>
                            <span class="badge badge-secondary">PHP</span>
                            <span class="badge badge-secondary">JavaScript</span>
                            <span class="badge badge-secondary">Bootstrap</span>
                            <span class="badge badge-secondary">MySQL</span>
                            <span class="badge badge-secondary">Google Maps</span>
                            <span class="badge badge-secondary">Stripe</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fab fa-github fa-fw"></i> <a href="https://github.com/dateutli/tracker"> GitHub:
                                TRACKR</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-12 col-12 text-center mb-1 px-1">
                <div class="card">
                    <div class="card-header bg-info text-white p-1">
                        Map
                    </div>
                    <div id="map" style="height:500px;"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        var geofence, map, marker;
        var i = 70;
        var route = [
            [
                31.780295594791895,
                -106.44117815494486
            ],
            [
                31.780990865720575,
                -106.44117279052684
            ],
            [
                31.781620159765637,
                -106.4411835193629
            ],
            [
                31.782430188052736,
                -106.4411674261088
            ],
            [
                31.78329942560081,
                -106.4411502220105
            ],
            [
                31.78437509376063,
                -106.44113895609695
            ],
            [
                31.785348479772928,
                -106.44114248472701
            ],
            [
                31.786356212711837,
                -106.44114248472701
            ],
            [
                31.787363934667198,
                -106.44112102705489
            ],
            [
                31.788449161412444,
                -106.4411049338008
            ],
            [
                31.78961189021765,
                -106.44109767908809
            ],
            [
                31.79074039698032,
                -106.44111033513998
            ],
            [
                31.79178454783458,
                -106.44109424188589
            ],
            [
                31.792892520341027,
                -106.44107278421377
            ],
            [
                31.793932087406624,
                -106.44106205537771
            ],
            [
                31.79516957279845,
                -106.44106205537771
            ],
            [
                31.796131604987316,
                -106.44104596212362
            ],
            [
                31.7972135376867,
                -106.44106205537771
            ],
            [
                31.798303208063032,
                -106.44105132654165
            ],
            [
                31.799420220844908,
                -106.44106741979574
            ],
            [
                31.80048706942648,
                -106.44122835233664
            ],
            [
                31.801810003035826,
                -106.44151582594804
            ],
            [
                31.802680785195854,
                -106.44175186034136
            ],
            [
                31.803903367735423,
                -106.44205226775102
            ],
            [
                31.804901780514506,
                -106.44220783587389
            ],
            [
                31.806161645227654,
                -106.44226684447221
            ],
            [
                31.80707797469121,
                -106.44220783587389
            ],
            [
                31.8083589971641,
                -106.44210054751329
            ],
            [
                31.809266187387934,
                -106.44202008124284
            ],
            [
                31.810510710235555,
                -106.44190742846422
            ],
            [
                31.811454348250848,
                -106.44180014010362
            ],
            [
                31.812593994837485,
                -106.44167139407091
            ],
            [
                31.813921217090744,
                -106.44146818988054
            ],
            [
                31.81522037837778,
                -106.44117851130693
            ],
            [
                31.816150293129304,
                -106.44088883273332
            ],
            [
                31.81736281496604,
                -106.44050259463518
            ],
            [
                31.818370198819878,
                -106.44012708537309
            ],
            [
                31.819459619668642,
                -106.43958527915208
            ],
            [
                31.820553585829906,
                -106.43889863364427
            ],
            [
                31.82171135256678,
                -106.43816907279222
            ],
            [
                31.822764269553062,
                -106.43767018191545
            ],
            [
                31.824084222143156,
                -106.4371391045305
            ],
            [
                31.824950236378108,
                -106.4363827215883
            ],
            [
                31.82552134593611,
                -106.43449444644182
            ],
            [
                31.825548693452568,
                -106.43259007804124
            ],
            [
                31.825712778381124,
                -106.43061597220628
            ],
            [
                31.82598169471668,
                -106.42888326518266
            ],
            [
                31.826223262960326,
                -106.4268555151674
            ],
            [
                31.826296189098358,
                -106.42504770629137
            ],
            [
                31.826337210025663,
                -106.42310578696458
            ],
            [
                31.82637367305687,
                -106.42125506274431
            ],
            [
                31.826237348379586,
                -106.41936202696533
            ],
            [
                31.826196327407892,
                -106.41749520949097
            ],
            [
                31.8262419062642,
                -106.41550501040192
            ],
            [
                31.826255579916698,
                -106.41368647268982
            ],
            [
                31.826281255929104,
                -106.4117626136445
            ],
            [
                31.826326834743476,
                -106.40990652500619
            ],
            [
                31.826231119207293,
                -106.40811480938424
            ],
            [
                31.825675055557802,
                -106.40608169495096
            ],
            [
                31.824789354431672,
                -106.40452852592146
            ],
            [
                31.823517675887224,
                -106.4031123195616
            ],
            [
                31.822382722178737,
                -106.4019965206114
            ],
            [
                31.821334358968187,
                -106.40079489097273
            ],
            [
                31.82043184545237,
                -106.39905681953108
            ],
            [
                31.819903096062262,
                -106.39700224742568
            ],
            [
                31.819848397676672,
                -106.39510324344313
            ],
            [
                31.819880305072203,
                -106.39322033271468
            ],
            [
                31.819953236220584,
                -106.39133742198622
            ],
            [
                31.819966910804474,
                -106.38922036715914
            ],
            [
                31.819998818159043,
                -106.38754130431582
            ],
            [
                31.82001705092813,
                -106.38563693591524
            ],
            [
                31.820058074645438,
                -106.3837379319327
            ],
            [
                31.820115659695617,
                -106.38167996243662
            ],
            [
                31.82051222110914,
                -106.37937862710184
            ],
            [
                31.82102273444425,
                -106.37784976796335
            ],
            [
                31.822047175621066,
                -106.37576970968715
            ],
            [
                31.823022602071504,
                -106.37435886774531
            ],
            [
                31.824194011806142,
                -106.37276563559047
            ],
            [
                31.825432636181525,
                -106.37086199851228
            ],
            [
                31.82640346898716,
                -106.36945652098848
            ],
            [
                31.82752014198281,
                -106.36757361026002
            ],
            [
                31.82844537508886,
                -106.36589802154003
            ],
            [
                31.829685081756878,
                -106.36415995009838
            ],
            [
                31.82846655791206,
                -106.36296904929577
            ],
            [
                31.827491188980886,
                -106.3617674196571
            ],
            [
                31.82623322131014,
                -106.36029220469891
            ],
            [
                31.825271502579376,
                -106.35914421924053
            ],
            [
                31.82420949821755,
                -106.35786212333142
            ],
            [
                31.823079111054454,
                -106.35651028998791
            ],
            [
                31.821802850849195,
                -106.35501898177563
            ],
            [
                31.820877551168806,
                -106.35393000491558
            ],
            [
                31.819650606690125,
                -106.35245821190243
            ],
            [
                31.818670586358387,
                -106.35131022644406
            ],
            [
                31.817505336308542,
                -106.34994963129185
            ],
            [
                31.8164478009855,
                -106.34867289980076
            ],
            [
                31.81518807656142,
                -106.34721377809666
            ],
            [
                31.814198891913044,
                -106.3460496993842
            ],
            [
                31.812990887074726,
                -106.34461519392157
            ],
            [
                31.81195609300792,
                -106.34338674219275
            ],
            [
                31.810857466355024,
                -106.34206709535742
            ],
            [
                31.80972691574256,
                -106.3407474485221
            ],
            [
                31.808518852416974,
                -106.33930442007208
            ],
            [
                31.807520478726808,
                -106.33814570577765
            ],
            [
                31.80628047446374,
                -106.33668974264286
            ],
            [
                31.805323106845897,
                -106.33558467252873
            ],
            [
                31.804091878737452,
                -106.33450605702058
            ],
            [
                31.803134488440882,
                -106.33391060661927
            ],
            [
                31.802072229502294,
                -106.33347072434083
            ],
            [
                31.800937012245193,
                -106.33320786785737
            ],
            [
                31.79966044606006,
                -106.33297719788209
            ],
            [
                31.798707569091796,
                -106.3328001720871
            ],
            [
                31.797767176231808,
                -106.3345789519619
            ],
            [
                31.797525533554193,
                -106.33662279523125
            ],
            [
                31.797268045099088,
                -106.33856810196448
            ],
            [
                31.79700360448166,
                -106.34052611454536
            ],
            [
                31.796743722448014,
                -106.3425324068885
            ],
            [
                31.796502077094424,
                -106.34436703785468
            ],
            [
                31.796228515554276,
                -106.34643770321418
            ],
            [
                31.795977750097833,
                -106.34823478325416
            ],
            [
                31.79572698396099,
                -106.35032751921787
            ],
            [
                31.79547165774079,
                -106.35212996367588
            ],
            [
                31.795307519083913,
                -106.35407188300266
            ],
            [
                31.79507498882102,
                -106.35592797164097
            ],
            [
                31.79482877966975,
                -106.3578430688776
            ],
            [
                31.794573450968265,
                -106.35984936122074
            ],
            [
                31.794272526950273,
                -106.36180200938358
            ],
            [
                31.794017196712154,
                -106.36369028453007
            ],
            [
                31.793727916379773,
                -106.36568953547534
            ],
            [
                31.79349994164337,
                -106.36756708178577
            ],
            [
                31.793237638941115,
                -106.36957621053467
            ],
            [
                31.79299142489557,
                -106.37138401941071
            ],
            [
                31.792731531580394,
                -106.37332057431946
            ],
            [
                31.79247619708549,
                -106.37524103597413
            ],
            [
                31.79220262362969,
                -106.37715613321076
            ],
            [
                31.791965525979734,
                -106.37906050161133
            ],
            [
                31.791664593471324,
                -106.3813599466514
            ],
            [
                31.791454852052766,
                -106.38290489904398
            ],
            [
                31.791176715959402,
                -106.38503707925791
            ],
            [
                31.790957854182842,
                -106.3867268709373
            ],
            [
                31.790670597314723,
                -106.38876534978861
            ],
            [
                31.79044717468907,
                -106.39053024332041
            ],
            [
                31.790237430508256,
                -106.39225979177469
            ],
            [
                31.79003224552308,
                -106.39431972829813
            ],
            [
                31.789788848327767,
                -106.39621684412602
            ],
            [
                31.789524386312124,
                -106.3982499585593
            ],
            [
                31.789287281792816,
                -106.40014896254185
            ],
            [
                31.789013698899538,
                -106.40206942419651
            ],
            [
                31.788753794400996,
                -106.4041561828101
            ],
            [
                31.7885030086659,
                -106.40588352541569
            ],
            [
                31.788278288917382,
                -106.40754903027533
            ],
            [
                31.787726556564422,
                -106.40980208584784
            ],
            [
                31.786664120527462,
                -106.41155088612555
            ],
            [
                31.785496794754216,
                -106.41339088150977
            ],
            [
                31.784676009995593,
                -106.41512895295142
            ],
            [
                31.783978337222123,
                -106.417215711565
            ],
            [
                31.782968703286926,
                -106.41897524067878
            ],
            [
                31.78195181328917,
                -106.42002666661261
            ],
            [
                31.78066586463467,
                -106.42078304955481
            ],
            [
                31.77974927329557,
                -106.42118538090705
            ],
            [
                31.77851345666138,
                -106.42179156014441
            ],
            [
                31.777696012494523,
                -106.42325661504913
            ],
            [
                31.777495359967638,
                -106.4255203994577
            ],
            [
                31.777477118807248,
                -106.42707608068633
            ],
            [
                31.777523792406036,
                -106.42933377099396
            ],
            [
                31.777532912982068,
                -106.43137982011201
            ],
            [
                31.777523792406022,
                -106.43313398480775
            ],
            [
                31.777905745145,
                -106.43535613602155
            ],
            [
                31.778138318592717,
                -106.43693327492231
            ],
            [
                31.77825688522332,
                -106.43891435497754
            ],
            [
                31.779296616857927,
                -106.44072216385358
            ]
        ];

        var toggleGeofence = () => {
            if (geofence.getMap()) {
                geofence.setMap(null);
            } else {
                geofence.setMap(map);
            }
        };

        function initMap() {
            map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 13,
                    center: { lat: 31.805153, lng: -106.392383 },
                    disableDefaultUI: true,
                    gestureHandling: 'none',
                    zoomControl: false,
                    styles: [
                        {
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "color": "#f5f5f5"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.land_parcel",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#bdbdbd"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#eeeeee"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e5e5e5"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#757575"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#dadada"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#616161"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.line",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#e5e5e5"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#eeeeee"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#c9c9c9"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#9e9e9e"
                                }
                            ]
                        }
                    ]
                });
            marker = new google.maps.Marker({ position: { lat: route[69][0], lng: route[69][1] } });
            var boundaries = [
                { lat: 31.829055, lng: -106.443587 },
                { lat: 31.829055, lng: -106.372749 },
                { lat: 31.773887, lng: -106.372749 },
                { lat: 31.773887, lng: -106.443587 },
                { lat: 31.829055, lng: -106.443587 }
            ];
            geofence = new google.maps.Polyline({
                path: boundaries,
                geodesic: true,
                strokeColor: '#3075e5',
                strokeOpacity: 0.5,
                strokeWeight: 5,
            });
            marker.setMap(map);
            geofence.setMap(map);
        }

        setInterval(function () {
            if (i > 78 && i < 132) {
                $('#bounds-alert').html('');
                $('#bounds-alert').html('<div class="alert alert-danger mb-1" role="alert">Vehicle #1 exited the allowed perimiter!</div>');
            } else {
                $('#bounds-alert').html('<div class="alert alert-success mb-1" role="alert">Vehicle #1 is within bounds!</div>');
            }
            if (i >= route.length) i = 0;
            marker.setPosition({ lat: route[i][0], lng: route[i++][1] });
        }, 400);


    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbyFL0xrQjqK-4VtFn00T4f3xqDZwdTgw &callback=initMap">
    </script>

</body>

</html>