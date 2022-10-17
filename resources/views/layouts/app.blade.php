<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Meta setup -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="decription" content="">
    <meta name="designer" content="Procoder_Tech">

    <!-- Title -->
    <title>Remarketed Portal</title>

    <!-- Fav Icon -->
    <link rel="icon" href="/assets/img/favicon.ico" />

    <!-- Include Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/icons/css/font-awesome.min.css') }}">

    <!-- Main StyleSheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    @livewireStyles
    @powerGridStyles

</head>

<body>
    <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <!-- mobile-header start -->
    <div class="mobile-header">
        <div class="mobile-part">
            <div class="mobile-left">
                <div class="container1" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

            </div>
            <div class="mobile-inner">
                <div class="header-left">
                    <div class="mbheader-part">
                        <div class="header-left1">
                            <img src="/assets/img/list.svg" alt="images not found">
                        </div>
                        <div class="header-left2">
                            <h2>Repair Macbook-121</h2>
                            <p>in list <span>In-Progress</span></p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="mobile-right">
                <div class="header-right">
                    <ul>
                        <li></li>
                        <li><a href="#"><img src="/assets/img/icon7.svg" alt="icon"></a></li>
                        <li><a href="#"><img src="/assets/img/icon6.svg" alt="icon"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- mobile-header end -->
    <!-- mobilesearch-part start -->
    <div class="mobilesearch-part">
        <div class="mobilesearch-inner">
            <form action="#" method="POST">
                <input type="text" name="Search" placeholder="Search" autofocus>
                <button>
                    <img src="/assets/img/search-icon.svg" alt="icon">
                </button>
            </form>

        </div>
    </div>
    <!-- mobilesearch-part end -->
    <!-- main-area start -->
    <div class="main-area">
        <div class="main-part">
            <div class="main-left">

                <div class="mainleft-inner">
                    <div class="menu-part">
                        <ul>
                            <li class="active"><a href="{{ route('dashboard.index') }}"><img src="/assets/img/icon1.svg"
                                        alt="icon" />
                                    <p>Dashboard</p>
                                </a></li>
                            <li><a href="{{ route('device.index') }}"><img src="/assets/img/icon2.svg" alt="icon" />
                                    <p>My Devices</p>
                                </a>
                            </li>
                            <li><a href="{{ route('employee.index') }}"><img src="/assets/img/icon2.svg"
                                        alt="icon" />
                                    <p>All Employees</p>
                                </a>
                            </li>
                            <li><a href="{{ route('task.index') }}"><img src="/assets/img/icon2.svg" alt="icon" />
                                    <p>My Tasks</p>
                                </a>
                            </li>
                            <li><a href="{{ route('category.index') }}"><img src="/assets/img/icon2.svg"
                                        alt="icon" />
                                    <p>Parts Categories</p>
                                </a>
                            </li>
                            <li><a href="{{ route('parts.index') }}"><img src="/assets/img/icon2.svg" alt="icon" />
                                    <p>All Parts</p>
                                </a>
                            </li>
                            {{-- <li><a href="#"><img src="/assets/img/icon3.svg" alt="icon" />
                                    <p>Alarms/Notifications</p>
                                </a></li>
                            <li><a href="#"><img src="/assets/img/icon4.svg" alt="icon" />
                                    <p>Reports</p>
                                </a></li>
                            <li><a href="#"><img src="/assets/img/icon5.svg" alt="icon" />
                                    <p>Settings</p>
                                </a></li> --}}
                        </ul>
                    </div>
                    <div class="profile-part">
                        <h3><img src="/assets/img/10.png" alt="images not found" /> <span>Profile</span></h3>
                    </div>
                </div>
            </div>
            <div class="main-right">

                <div class="header-part">
                    <div class="row no-gutters">
                        <div class="col-lg-6 col-md-6">
                            <div class="header-left">
                                <div class="row no-gutters align-items-center ">
                                    <div class="col-lg-1 col-md-2">
                                        <div class="header-left1">
                                            <img src="/assets/img/list.svg" alt="images not found" />
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-10">
                                        <div class="header-left2">
                                            <h2>Repair Macbook-121</h2>
                                            <p>in list <span>In-Progress</span></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header-right">

                                <ul>
                                    @livewire('search')
                                    <li><a href="#" onclick="window.location.reload();"><img
                                                src="/assets/img/icon7.svg" alt="icon" /></a></li>
                                    <li><a href="#"><img src="/assets/img/icon6.svg" alt="icon" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <!--tab-part end--->
    </div>
    </div>
    </div>
    <!-- main-area end -->

    <!-- Main jQuery -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap Propper jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <!-- Bootstrap jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Fontawesome Script -->
    <script src="https://kit.fontawesome.com/7749c9f08a.js"></script>

    <!-- Custom jQuery -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <x-alert />

    <script>
        function refreshPage() {
            window.location.reload();
        }
    </script>

    @livewireScripts
    @powerGridScripts
</body>

</html>
