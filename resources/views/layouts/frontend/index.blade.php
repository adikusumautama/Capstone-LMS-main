<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>UNI-LEARN LMS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/fonts/web-icons/web-icons.min599c.css?v4.0.2') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/toastr/toastr.min599c.css?v4.0.2') }}">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">



    <!-- Favicons -->
    <!-- <link href="/img/favicon.png" rel="icon">
        <link href="/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">
    <style>
        /* body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
        .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
        .fa-anchor,.fa-coffee {font-size:200px} */
        .button-lgn {
            background-color: #164863;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
        }

        .button2:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .become {
            background-color: #164863;
            /* border: none; */
            color: #DDF2FD;
            padding: 5px 11px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            /* font-size: 16px; */
            /* margin: 4px 2px; */
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="se-pre-con"></div>
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <!-- Header -->

    <nav class="navbar navbar-default" style="background-color:#427D9D;">
        <div class="row" style="flex-grow: 1;">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2 mt-auto" id="logo">
                <i class="fa fa-bars d-inline-block d-md-none mobile-nav"></i>
                <a href="{{ route('home') }}" class="float-xl-right"><img
                        src="{{ asset('frontend/img/logo-hitam.png') }}" width="49" />Uni-Learn</a>
            </div>
            <div class="col-md-3 col-lg-6 col-xl-6 d-flex d-md-block mt-3 ml-5" style="color:#164863;">
                <div class="dropdown float-left">
                    <span id="dropdownMenuButton" data-toggle="dropdown" style="color:#DDF2FD;">Categories<i
                            class="fa fa-caret-down"></i></span>
                    <?php 
                        $categories = SiteHelpers::active_categories();
                    ?>
                    <div class="dropdown-menu">
                        @foreach ($categories as $category)
                        <a class="dropdown-item" href="{{ route('course.list','category_id[]='.$category->id) }}">
                            <!-- <i class="fa {{ $category->icon_class }} category-menu-icon"></i> -->
                            {{ $category->name}}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-sm-2 col-md-3 col-lg-2 col-xl-2 d-flex d-sm-block mt-3">
                @if(Auth::check() && !Auth::user()->hasRole('instructor') && !Auth::user()->hasRole('admin'))
                <button class=" become button2">
                    <span class="become-instructor" href="{{ route('login') }}" data-toggle="modal"
                        data-target="#myModal">Become Instructor
                    </span>
                </button>
                @endif
            </div>

            <div class="col-4 col-sm-3 col-md-2 col-lg-2 col-xl-1">
                @guest

                <a class="button-lgn button2 mt-2" href="{{ route('login') }}" style="border-radius: 8px;">Login</a>

                @else
                <div class="dropdown float-xl-left float-sm-right float-right mt-3">
                    <span id="dropdownMenuButtonRight" data-toggle="dropdown" style="color:white;">{{
                        Auth::user()->first_name }}<i class="fa fa-caret-down"></i></span>

                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButtonLeft">

                        @if(Auth::user()->hasRole('instructor'))
                        <a class="dropdown-item" href="{{ route('instructor.dashboard') }}">
                            <i class="fa fa-sign-out-alt"></i> Instructor
                        </a>
                        @endif

                        @if(Auth::user()->hasRole('admin'))
                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-sign-out-alt"></i> Admin
                        </a>
                        @endif



                        <a class="dropdown-item" href="{{ route('my.courses') }}">
                            <i class="fa fa-sign-out-alt"></i> My Courses
                        </a>

                        <a class="dropdown-item" href="{{ route('logOut') }}">
                            <i class="fa fa-sign-out-alt"></i> Logout
                        </a>

                    </div>
                </div>

                @endguest
            </div>
        </div>
    </nav>

    <div id="sidebar">
        <ul>
            <li><a href="javascript:void(0)" class="sidebar-title">Categories</a></li>
            @foreach ($categories as $category)
            <li>
                <a href="{{ $category->slug }}">
                    <i class="fa {{ $category->icon_class }} category-menu-icon"></i>
                    {{ $category->name}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    @yield('content')

    <!-- footer start -->
    <footer id="main-footer" style="background-color:#164863;">

        <div class="row m-0">
            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mt-3">
                <ul>
                    <li class="mb-1"><b>Quick Links</b></li>
                    <li><a href="{{ route('home') }}">Home Page</a></li>
                    <li><a href="{{ route('course.list') }}">Courses List</a></li>
                    <li><a href="{{ route('instructor.list') }}">Instructors List</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mt-3">
                <ul>
                    <li class="mb-1"><b>Resources</b></li>
                    <li><a href="{{ route('register') }}">Register Page</a></li>
                    <li><a href="{{ route('login') }}">Login Page</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 mt-3 d-none d-sm-block">
                <ul>
                    <li class="mb-1"><b>Top Categories</b></li>
                    @foreach ($categories as $category)
                    @if($loop->iteration <= 4) <li><a
                            href="{{ route('course.list','category_id[]='.$category->id) }}">{{ $category->name}}</a>
                        </li>
                        @endif
                        @endforeach

                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-4 col-6 mt-3 footer-contact" style="color:white;">
                <ul>
                    <h3>UNI-LEARN</h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mt-3" style="color:white;">
                <ul>
                    <h4>Our Social Networks</h4>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 text-center mt-2">
                <img src="{{ asset('frontend/img/logo_footer.png') }}" class="img-fluid" width="79">
                <br>
                <span id="c-copyright">
                    Copyright © 2023, Uni-Learn. All rights reserved.
                </span>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- The Modal start -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bi-header ">
                    <h5 class="col-12 modal-title text-center bi-header-seperator-head">Become an Instructor</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="becomeInstructorForm">
                    <form id="becomeInstructorForm" class="form-horizontal" method="POST"
                        action="{{ route('become.instructor') }}">
                        {{ csrf_field() }}
                        <div class="px-4 py-2">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label>First Name</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="First Name"
                                            name="first_name">
                                    </div>
                                    <div class="col-6">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Last Name"
                                            name="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Contact Email</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Contact Email"
                                    name="contact_email">
                            </div>

                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Telephone"
                                    name="telephone">
                            </div>

                            <div class="form-group">
                                <label>Biography</label>
                                <textarea class="form-control form-control" placeholder="Biography"
                                    name="biography"></textarea>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit"
                                    class="btn btn-lg btn-block login-page-button button-lgn button2">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- The Modal end -->
</body>
<script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/fancybox.min.js') }}"></script>
<script src="{{ asset('frontend/js/modernizr.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('backend/vendor/toastr/toastr.min599c.js?v4.0.2') }}"></script>



<script>
    $(window).on("load", function (e) {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        /* Delete record */
        $('.delete-record').click(function (event) {
            var url = $(this).attr('href');
            event.preventDefault();

            if (confirm('Are you sure want to delete this record?')) {
                window.location.href = url;
            } else {
                return false;
            }

        });

        /* Toastr messages */
        toastr.options.closeButton = true;
        toastr.options.timeOut = 5000;
        @if (session() -> has('success'))
            toastr.success("{{ session('success') }}");
        @endif
        @if (session() -> has('status'))
            toastr.success("{{ session('status') }}");
        @endif
        @if (session() -> has('error'))
            toastr.error("{{ session('error') }}");
        @endif
        @if (session() -> has('info'))
            toastr.info("{{ session('info') }}");
        @endif

        $('.mobile-nav').click(function () {
            $('#sidebar').toggleClass('active');

            $(this).toggleClass('fa-bars');
            $(this).toggleClass('fa-times');
        });

        $("#becomeInstructorForm").validate({
            rules: {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                contact_email: {
                    required: true,
                    email: true
                },
                telephone: {
                    required: true
                },
                paypal_id: {
                    required: true,
                    email: true
                },
                biography: {
                    required: true
                },
            },
            messages: {
                first_name: {
                    required: 'The first name field is required.'
                },
                last_name: {
                    required: 'The last name field is required.'
                },
                contact_email: {
                    required: 'The contact email field is required.',
                    email: 'The contact email must be a valid email address.'
                },
                telephone: {
                    required: 'The telephone field is required.'
                },
                paypal_id: {
                    required: 'The paypal id field is required.',
                    email: 'The paypal id must be a valid email address.'
                },
                biography: {
                    required: 'The biography field is required.'
                },
            }
        });
    });
</script>
@yield('javascript')

</html>