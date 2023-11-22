<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>User Mission List</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">CodeSparks</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="{{route('users')}}" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
            </div>
            <form class="d-flex">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="button" class="btn btn-secondary"><i class="bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="container mt-5 mb-3">
        <div class="card p-5">
            <div class="card-header">
                <h2>Mission List</h2>
            </div>

            <div class="row mt-3">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">SN</th>
                        <th scope="col">Name</th>
                        <th scope="col">Roll</th>
                        <th scope="col">Mission</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)
                    @foreach($usersWithMissions as $usersMission)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td><div class="ms-2 me-auto">{{$usersMission->first_name}} {{$usersMission->last_name}}</div></td>
                            <td>
                                <div class="ms-2 me-auto">
                                    @if($usersMission->user_type == 1)
                                        Admin
                                    @else
                                        User
                                    @endif
                                </div>
                            </td>
                            <td><div class="ms-2 me-auto">{{$usersMission->personal_mission}}</div></td>
                            <td>
                                <div class="ms-2 me-auto">

                                    @if($usersMission->edit_flag == 0)
                                        <form method="POST" action="{{route('personalMissionUserEditRequest', $usersMission->id)}}">
                                            @method('put')
                                            @csrf
                                            <input type="hidden" name="id" value="{{$usersMission->id}}">
                                            <input type="hidden" name="edit_flag" value=1>
                                            <a href="#">
                                                <button type="submit" class="btn btn-secondary">Make Request To Edit Your Mission</button>
                                            </a>
                                        </form>
                                    @elseif($usersMission->edit_flag == 1)
                                        <button type="button" disabled class="btn btn-success">Requested</button>

                                    @elseif($usersMission->edit_flag == 2)
                                        <a href="{{route('personalMissionUserMissionEditDashboard', ['id'=>$usersMission->id, 'personal_mission'=>$usersMission->personal_mission])}}">
                                            <button type="button" class="btn btn-success">Edit Mission</button>
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
