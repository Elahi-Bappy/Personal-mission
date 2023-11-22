<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <title>Users Rating</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">CodeSparks</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <button type="button" class="btn btn-secondary"><i class="bi-search"></i></button>
            </div>
        </form>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="{{route('admin')}}" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Personal Mission</a>
                    <div class="dropdown-menu">
                        <a href="{{route('personalMissionAdminView')}}" class="dropdown-item">Mission List</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
    <div class="container-fluid pt-3">
        <section class="vh-100" style="background-color: rgba(40,222,217,0.88);">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="pl-2">
                                @php($xValues = [])
                                @php($yValues = [])
                                {{--                                @dd($usersWithMissions)--}}
                                @foreach($usersWithMissions as $usersDataWithMissions)
                                    @php(array_push($xValues, $usersDataWithMissions->first_name))
                                    @php(array_push($yValues, $usersDataWithMissions->monthly_rating))
                                @endforeach
                                <canvas id="myChart" style="width:100%;max-width:1000px;margin-left: 10px"></canvas>

                                <script>
                                    var xValues = JSON.parse('<?= json_encode($xValues); ?>');
                                    var yValues = JSON.parse('<?= json_encode($yValues); ?>');
                                    var barColors = [
                                        "rgba(255, 26, 104, 1)",
                                        "rgba(54, 162, 235, 1)",
                                        "rgba(255, 206, 86, 1)",
                                        "rgba(75, 192, 192, 1)",
                                        "rgb(100,52,192)",
                                        "rgba(25,162,121,0.46)",
                                    ];

                                    new Chart("myChart", {
                                        type: "doughnut",
                                        data: {
                                            labels: xValues,
                                            datasets: [{
                                                backgroundColor: barColors,
                                                data: yValues
                                            }]
                                        },
                                        options: {
                                            legend: {display: true},
                                            title: {
                                                display: true,
                                                text: "This Month's Monthly Mission Report"
                                            },
                                            layout: {
                                                padding: 26
                                            },
                                            plugins: {
                                                labels: {
                                                    render: 'label',
                                                    fontStyle: 'bolder',
                                                    position: 'outside',
                                                }
                                            },
                                        },
                                        plugins: [ChartDataLabels]
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
