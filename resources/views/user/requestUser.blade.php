{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">--}}
{{--    <title>registration</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<section class="vh-100 gradient-custom">--}}
{{--    <div class="container py-5 h-100">--}}
{{--        <div class="row justify-content-center align-items-center h-100">--}}
{{--            <div class="col-12 col-lg-9 col-xl-7">--}}
{{--                <div class="card shadow-2-strong card-registration mb-5" style="border-radius: 15px;">--}}
{{--                    <div class="card-body p-4 p-md-5 ">--}}
{{--                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Information</p></h3>--}}

{{--                        <form method="POST" action="{{route('requestForUpdate')}}">--}}
{{--                            @csrf--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6 mb-4">--}}
{{--                                    <div class="form-outline">--}}
{{--                                        <input type="text" value="{{request()->update_first_name}}" name="update_first_name" id="firstName" class="form-control form-control-lg" />--}}
{{--                                        <label class="form-label" for="firstName">First Name</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 mb-4">--}}
{{--                                    <div class="form-outline">--}}
{{--                                        <input type="text" value="{{request()->update_last_name}}" name="update_last_name" id="last_Name" class="form-control form-control-lg" />--}}
{{--                                        <label class="form-label" for="lastName">Last Name</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 mb-4">--}}
{{--                                    <div class="form-outline">--}}
{{--                                        <input type="text" value="{{request()->update_country}}" name="update_country" id="lastName" class="form-control form-control-lg" />--}}
{{--                                        <label class="form-label" for="lastName">Country</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6 mb-4 d-flex align-items-center">--}}
{{--                                    <div class="form-outline datepicker w-100">--}}
{{--                                        <input type="date" value="{{request()->update_dob}}" name="update_dob" class="form-control form-control-lg" id="birthdayDate" />--}}
{{--                                        <label for="birthdayDate" class="form-label">Birthday</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6 mb-4 pb-2">--}}
{{--                                    <div class="form-outline">--}}
{{--                                        <input type="email" value="{{request()->update_email}}" name="update_email" id="emailAddress" class="form-control form-control-lg" />--}}
{{--                                        <label class="form-label" for="updateEmailAddress">Email</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 mb-4 pb-2">--}}
{{--                                    <div class="form-outline">--}}
{{--                                        <input type="number" value="{{request()->update_phone_number}}" name="phone_number" id="phoneNumber" class="form-control form-control-lg" />--}}
{{--                                        <label class="form-label" for="phoneNumber">Phone Number</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="mt-4 pt-2">--}}
{{--                                <input class="btn btn-primary btn-lg" type="submit" name="store" value="Submit" />--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                        @if (\Session::has('success'))--}}
{{--                            <div class="alert alert-success">{!! \Session::get('success') !!} </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}
