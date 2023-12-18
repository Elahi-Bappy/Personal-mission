<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>shop</title>
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
                <a href="#" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Delivery</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">New repair</a>
                        <a href="#" class="dropdown-item">Request List</a>
                        <a href="#" class="dropdown-item">Drafts</a>
                    </div>
                </div>
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
    <div class="row">
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Block</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                        <div class="w-100 ms-3">
                            <h4 class="my-0">{{$users->first_name}}</h4>
                            <p class="text-muted">@webdesigner</p>
                            <a class="btn btn-danger" target="__blank" href="{{route('shopPost')}}">New Post</a>
                            <button type="button" class="btn btn-soft-success btn-xs waves-effect mb-2 waves-light">Message</button>
                            <button type="button" class="btn btn-soft-success btn-xs waves-effect mb-2 waves-light">Edit Profile</button>
                        </div>
                    </div>
                    <div class="mt-3">
                        <h4 class="font-13 text-uppercase">About Me :</h4>
                        <p class="text-muted font-13 mb-3">
                            Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.
                        </p>
                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{$users->first_name}}</span></p>

                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">{{$users->phone_number}}</span></p>

                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{$users->email}}</span></p>

                        <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">{{$users->country}}</span></p>

                        <p class="text-muted mb-1 font-13"><strong>Account Type :</strong> <span class="ms-2">{{$users->user_type}}</span></p>
                    </div>
                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item text-center border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item text-center border-danger text-danger"><i class="mdi mdi-google"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item text-center border-info text-info"><i class="mdi mdi-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript: void(0);" class="social-list-item text-center border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                        </li>
                    </ul>
                </div>
            </div> <!-- end card -->
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-4 border-end border-light">
                            <h5 class="text-muted mt-1 mb-2 fw-normal">Applied</h5>
                            <h2 class="mb-0 fw-bold">116</h2>
                        </div>
                        <div class="col-4 border-end border-light">
                            <h5 class="text-muted mt-1 mb-2 fw-normal">Reviewed</h5>
                            <h2 class="mb-0 fw-bold">87</h2>
                        </div>
                        <div class="col-4">
                            <h5 class="text-muted mt-1 mb-2 fw-normal">Contacted</h5>
                            <h2 class="mb-0 fw-bold">98</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Inbox</h4>
                    <div class="inbox-widget" data-simplebar="init" style="max-height: 350px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                            <div class="d-flex align-items-center pb-1" id="tooltips-container">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-3">
                                    <h5 class="mb-1">Tomaslau</h5>
                                    <p class="mb-0 font-13">I've finished it! See you so...</p>
                                </div>
                                <a href="javascript:(0);" class="btn btn-sm btn-soft-info font-13" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Reply"> <i class="mdi mdi-reply"></i> </a>
                            </div>
                            <div class="d-flex align-items-center py-1" id="tooltips-container1">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-3">
                                    <h5 class="mb-1">Stillnotdavid</h5>
                                    <p class="mb-0 font-13">This theme is awesome!</p>
                                </div>
                                <a href="javascript:(0);" class="btn btn-sm btn-soft-info font-13" data-bs-container="#tooltips-container1" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Reply"> <i class="mdi mdi-reply"></i> </a>
                            </div>
                            <div class="d-flex align-items-center py-1" id="tooltips-container2">
                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-3">
                                    <h5 class="mb-1">Shahedk</h5>
                                    <p class="mb-0 font-13">Hey! there I'm available...</p>
                                </div>
                                <a href="javascript:(0);" class="btn btn-sm btn-soft-info font-13" data-bs-container="#tooltips-container2" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Reply"> <i class="mdi mdi-reply"></i> </a>
                            </div>
                            <div class="d-flex align-items-center py-1" id="tooltips-container3">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-3">
                                    <h5 class="mb-1">Kurafire</h5>
                                    <p class="mb-0 font-13">Nice to meet you</p>
                                </div>
                                <a href="javascript:(0);" class="btn btn-sm btn-soft-info font-13" data-bs-container="#tooltips-container3" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Reply"> <i class="mdi mdi-reply"></i> </a>
                            </div>
                            <div class="d-flex align-items-center py-1" id="tooltips-container4">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-3">
                                    <h5 class="mb-1">Adhamdannaway</h5>
                                    <p class="mb-0 font-13">This theme is awesome!</p>
                                </div>
                                <a href="javascript:(0);" class="btn btn-sm btn-soft-info font-13" data-bs-container="#tooltips-container4" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Reply"> <i class="mdi mdi-reply"></i> </a>
                            </div>
                            <div class="d-flex align-items-center py-1" id="tooltips-container5">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-3">
                                    <h5 class="mb-1">Tomaslau</h5>
                                    <p class="mb-0 font-13">I've finished it! See you so...</p>
                                </div>
                                <a href="javascript:(0);" class="btn btn-sm btn-soft-info font-13" data-bs-container="#tooltips-container5" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Reply"> <i class="mdi mdi-reply"></i> </a>
                            </div>
                            <div class="d-flex align-items-center py-1" id="tooltips-container6">
                                <img src="https://bootdey.com/img/Content/avatar/avatar8.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-3">
                                    <h5 class="mb-1">Shahedk</h5>
                                    <p class="mb-0 font-13">Hey! there I'm available...</p>
                                </div>
                                <a href="javascript:(0);" class="btn btn-sm btn-soft-info font-13" data-bs-container="#tooltips-container6" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Reply"> <i class="mdi mdi-reply"></i> </a>
                            </div>
                            <div class="d-flex align-items-center pt-1" id="tooltips-container7">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-3">
                                    <h5 class="mb-1">Stillnotdavid</h5>
                                    <p class="mb-0 font-13">This theme is awesome!</p>
                                </div>
                                <a href="javascript:(0);" class="btn btn-sm btn-soft-info font-13" data-bs-container="#tooltips-container7" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Reply"> <i class="mdi mdi-reply"></i> </a>
                            </div>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 532px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 230px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div> <!-- end inbox-widget -->
                </div>
            </div> <!-- end card-->
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">Team Members <i class="mdi mdi-account-multiple ms-1"></i></h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center pb-1" id="tooltips-container">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-2">
                                    <h5 class="mb-1">Herbert Stewart<i class="mdi mdi-check-decagram text-info ms-1"></i></h5>
                                    <p class="mb-0 font-13 text-muted">Co Founder</p>
                                </div>
                                <i class="mdi mdi-chevron-right h2"></i>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center pb-1" id="tooltips-container">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-2">
                                    <h5 class="mb-1">Terry Mouser</h5>
                                    <p class="mb-0 font-13 text-muted">Web Designer</p>
                                </div>
                                <i class="mdi mdi-chevron-right h2"></i>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center pb-1" id="tooltips-container">
                                <img src="https://bootdey.com/img/Content/avatar/avatar8.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-2">
                                    <h5 class="mb-1">Adam Barney</h5>
                                    <p class="mb-0 font-13 text-muted">PHP Developer</p>
                                </div>
                                <i class="mdi mdi-chevron-right h2"></i>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center pb-1" id="tooltips-container">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="rounded-circle img-fluid avatar-md img-thumbnail bg-transparent" alt="">
                                <div class="w-100 ms-2">
                                    <h5 class="mb-1">Michal Chang</h5>
                                    <p class="mb-0 font-13 text-muted">UI/UX Designer</p>
                                </div>
                                <i class="mdi mdi-chevron-right h2"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-3">Upcoming Reminders <i class="mdi mdi-adjust ms-1"></i></h4>
                    <div class="list-group">
                        <a href="#" class="my-1">
                            <div class="d-flex align-items-start" id="tooltips-container">
                                <div class="">
                                    <i class="mdi mdi-circle h3 text-primary"></i>
                                </div>
                                <div class="w-100 ms-2">
                                    <h5 class="mb-1 mt-0">New Admin Layout Discuss</h5>
                                    <ul class="list-inline text-muted font-12">
                                        <li class="list-inline-item"><i class="mdi mdi-calendar-blank-outline me-1"></i>10 May 2021</li>
                                        <li class="list-inline-item"> - </li>
                                        <li class="list-inline-item"><i class="mdi mdi-clock-time-eight-outline me-1"></i>09:00am <span class="px-1">To</span> 10:30am</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="my-1">
                            <div class="d-flex align-items-start" id="tooltips-container">
                                <div class="">
                                    <i class="mdi mdi-circle h3 text-pink"></i>
                                </div>
                                <div class="w-100 ms-2">
                                    <h5 class="mb-1 mt-0">Landing Pages Planning</h5>
                                    <ul class="list-inline text-muted font-12">
                                        <li class="list-inline-item"><i class="mdi mdi-calendar-blank-outline me-1"></i>10 May 2021</li>
                                        <li class="list-inline-item"> - </li>
                                        <li class="list-inline-item"><i class="mdi mdi-clock-time-eight-outline me-1"></i>02:00pm <span class="px-1">To</span> 4:00pm</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="my-1">
                            <div class="d-flex align-items-start" id="tooltips-container">
                                <div class="">
                                    <i class="mdi mdi-circle h3 text-success"></i>
                                </div>
                                <div class="w-100 ms-2">
                                    <h5 class="mb-1 mt-0">Meet Our Clients</h5>
                                    <ul class="list-inline text-muted font-12">
                                        <li class="list-inline-item"><i class="mdi mdi-calendar-blank-outline me-1"></i>11 May 2021</li>
                                        <li class="list-inline-item"> - </li>
                                        <li class="list-inline-item"><i class="mdi mdi-clock-time-eight-outline me-1"></i>08:00am <span class="px-1">To</span> 11:20am</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="my-1">
                            <div class="d-flex align-items-start" id="tooltips-container">
                                <div class="">
                                    <i class="mdi mdi-circle h3 text-warning"></i>
                                </div>
                                <div class="w-100 ms-2">
                                    <h5 class="mb-1 mt-0">Project Discussion</h5>
                                    <ul class="list-inline text-muted font-12">
                                        <li class="list-inline-item"><i class="mdi mdi-calendar-blank-outline me-1"></i>11 May 2021</li>
                                        <li class="list-inline-item"> - </li>
                                        <li class="list-inline-item"><i class="mdi mdi-clock-time-eight-outline me-1"></i>12:00am <span class="px-1">To</span> 03:00am</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="my-1">
                            <div class="d-flex align-items-start" id="tooltips-container">
                                <div class="">
                                    <i class="mdi mdi-circle h3 text-dark"></i>
                                </div>
                                <div class="w-100 ms-2">
                                    <h5 class="mb-1 mt-0">Businees Meeting</h5>
                                    <ul class="list-inline text-muted font-12">
                                        <li class="list-inline-item"><i class="mdi mdi-calendar-blank-outline me-1"></i>12 May 2021</li>
                                        <li class="list-inline-item"> - </li>
                                        <li class="list-inline-item"><i class="mdi mdi-clock-time-eight-outline me-1"></i>08:30am <span class="px-1">To</span> 10:00am</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-xl-7">
            <div class="card">
                <div class="card-body">
                    <!-- comment box -->
                    <form action="#" class="comment-area-box mb-3">
                        <span class="input-icon">
                            <textarea rows="3" class="form-control" placeholder="Write something..."></textarea>
                        </span>
                        <div class="comment-area-btn">
                            <div class="float-end">
                                <button type="submit" class="btn btn-sm btn-dark waves-effect waves-light">Post</button>
                            </div>
                            <div>
                                <a href="#" class="btn btn-sm btn-light text-black-50"><i class="far fa-user"></i></a>
                                <a href="#" class="btn btn-sm btn-light text-black-50"><i class="fa fa-map-marker-alt"></i></a>
                                <a href="#" class="btn btn-sm btn-light text-black-50"><i class="fa fa-camera"></i></a>
                                <a href="#" class="btn btn-sm btn-light text-black-50"><i class="far fa-smile"></i></a>
                            </div>
                        </div>
                    </form>
                    <!-- end comment box -->

                    <!-- Story Box-->
                    <div class="border border-light p-2 mb-3">
                        <div class="d-flex align-items-start">
                            <img class="me-2 avatar-sm rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Generic placeholder image">
                            <div class="w-100">
                                <h5 class="">Thelma Fridley <small class="text-muted"> 1 hour ago</small></h5>
                                <div class="">
                                    Cras sit amet nibh libero, in
                                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                    purus odio, vestibulum in vulputate at, tempus viverra turpis. Duis
                                    sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper
                                    porta. Mauris massa.
                                    <br>
                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i class="mdi mdi-reply"></i> Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-user-comment-box">
                            <div class="d-flex align-items-start">
                                <img class="me-2 avatar-sm rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Generic placeholder image">
                                <div class="w-100">
                                    <h5 class="mt-0">Jeremy Tomlinson <small class="text-muted">3 hours ago</small></h5>
                                    Nice work, makes me think of The Money Pit.
                                    <br>
                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i class="mdi mdi-reply"></i> Reply</a>
                                    <div class="d-flex align-items-start mt-3">
                                        <a class="pe-2" href="#">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" class="avatar-sm rounded-circle" alt="Generic placeholder image">
                                        </a>
                                        <div class="w-100">
                                            <h5 class="mt-0">Kathleen Thomas <small class="text-muted">5 hours ago</small></h5>
                                            <p> i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mt-2">
                                <a class="pe-2" href="#">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle" alt="Generic placeholder image" height="31">
                                </a>
                                <div class="w-100">
                                    <input type="text" id="simpleinput" class="form-control border-0 form-control-sm" placeholder="Add comment">
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-danger"><i class="mdi mdi-heart"></i> Like (28)</a>
                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                        </div>
                    </div>

                    <!-- Story Box-->
                    <div class="border border-light p-2 mb-3">
                        <div class="d-flex align-items-start">
                            <img class="me-2 avatar-sm rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Generic placeholder image">
                            <div class="w-100">
                                <h5 class="m-0">Jeremy Tomlinson</h5>
                                <p class="text-muted"><small>about 2 minuts ago</small></p>
                            </div>
                        </div>
                        <p>Story based around the idea of time lapse, animation to post soon!</p>

                        <img src="https://www.bootdey.com/image/800x540/FF7F50/000000" alt="post-img" class="rounded me-1" height="60">
                        <img src="https://www.bootdey.com/image/800x540/FF7F50/000000" alt="post-img" class="rounded me-1" height="60">
                        <img src="https://www.bootdey.com/image/800x540/FF7F50/000000" alt="post-img" class="rounded" height="60">

                        <div class="mt-2">
                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-heart-outline"></i> Like</a>
                            <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                        </div>
                    </div>

                    <!-- Story Box-->
                    <div class="border border-light p-2 mb-3">
                        <div class="d-flex align-items-start">
                            <img class="me-2 avatar-sm rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Generic placeholder image">
                            <div class="w-100">
                                <h5 class="m-0">Jeremy Tomlinson</h5>
                                <p class="text-muted"><small>15 hours ago</small></p>
                            </div>
                        </div>
                        <p>The parallax is a little odd but O.o that house build is awesome!!</p>

                        <iframe src="https://www.youtube.com/watch?v=QKMTreKTpug&list=RDQKMTreKTpug&start_radio=1" height="300" class="img-fluid border-0"></iframe>
                    </div>

                    <div class="text-center">
                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1"></i> Load more </a>
                    </div>
                </div>
            </div> <!-- end card-->

        </div> <!-- end col -->
    </div>
    <!-- end row-->
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>