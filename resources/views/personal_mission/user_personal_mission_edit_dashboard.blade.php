<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
<div class="container">

    <div class="container mt-5 mb-3">
        <div class="card p-5">
            <div class="card-header">
                <h2>Edit Mission</h2>
            </div>
            <form method="POST" action="{{route('personalMissionUserMissionEdit', $usersWithMissions[0]->id)}}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <textarea type="email" name="personal_mission" class="form-control input-lg mt-3" placeholder="Enter mission">{{$usersWithMissions[0]->personal_mission}}</textarea>
                </div>
                <div class="card-header">
                    <h2>Rating point</h2>
                </div>
                <div class="form-group">
                    <label>Rating point</label>
                    <input class="lll" type="number" name="monthly_rating" value="{{$usersWithMissions[0]->monthly_rating}}" />
                </div>
                <input type="hidden" name="edit_flag" value=0>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
